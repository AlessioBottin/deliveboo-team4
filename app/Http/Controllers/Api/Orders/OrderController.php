<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Gateway;
use App\Http\Requests\Orders\OrderRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewOrderRestaurantNotification;
use App\Mail\NewOrderClientNotification;
use App\Order;
use App\Plate;
use App\User;


class OrderController extends Controller
{
    public function generate (Request $request, Gateway $gateway) {

        $token = $gateway->clientToken()->generate();        

        $data = [
            'success' => true,
            'token' => $token
        ];
        
        return response()->json($data,200);
    }
    
    // By passing the FormRequest: 'OrderRequest' the makePayment function gets executed if the validation passes 
    // Otherwise we are redirected as the documentation suggests: https://laravel.com/docs/7.x/validation#creating-form-requests
     
    public function makePayment (OrderRequest $request, Gateway $gateway) {
        // Dobbiamo salvarci per ogni piatto la quantity 
        // e calcolare il prezzo poi sommarlo in una variabile e passarlo ad amount
        $plates_array = $request->cart;
        $userForm = $request->form;

        $total_amount = 0;
        foreach ($plates_array as $plate) {
            $plate_database = Plate::find($plate["id"]);
            $plate_multiplied_price = $plate_database->price * $plate["quantity"];
            $total_amount = $total_amount + $plate_multiplied_price;
        }

        // The transaction is created 
        $result = $gateway->transaction()->sale([
            'amount' => $total_amount,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        // If the transaction is successful, return a messsage to the user 
        if($result->success)  {
            $data = [
                'success' => true,
                'message' => 'Transazione eseguita con successo!',
            ];

            $new_order = new Order();
            $new_order->fill($userForm);
            $new_order->status = 1;
            $new_order->total_price = $total_amount;
            $new_order->save();

            // ! SAVING DATA IN ORDER_PLATE TABLE
            $new_array = [];
            $owner_email = "";
            foreach ($plates_array as $new_plate) {
                // $new_plate->user_id
                // dd($new_plate);

                $plate = Plate::findOrfail($new_plate['id']);

                // dd($plate->user_id);

                $user = User:: findOrfail($plate->user_id);
                // dd($user->email);

                $new_row = [
                    'order_id' => $new_order->id,
                    'plate_id' => $new_plate['id'],
                    'quantity' => $new_plate['quantity']
                ];
                $new_array[] = $new_row;
            };
            
            $new_order->plates()->sync($new_array);
            // ! END SAVING DATA IN ORDER_PLATE TABLE
            // dd($new_order);

            // Email to restaurant
            Mail::to($user->email)->send(new NewOrderRestaurantNotification($new_order));
            
            // Email to client
            // dd($userForm['customer_email']);
            Mail::to($userForm['customer_email'])->send(new NewOrderClientNotification());

            return response()->json($data,200);

        }else {
            $data = [
                'success' => false,
                'message' => 'Transazione fallita!'
            ];
            return response()->json($data,401);
        }

    }

}
