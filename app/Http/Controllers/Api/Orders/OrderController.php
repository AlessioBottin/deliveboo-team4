<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Gateway;
use App\Plate;
use App\Http\Requests\Orders\OrderRequest;

class OrderController extends Controller
{
    public function generate (Request $request, Gateway $gateway) {
        

        $token = $gateway->clientToken()->generate();        
        // dd($gateway->clientToken()->generate());

        $data = [
            'success' => true,
            'token' => $token
        ];
        
        return response()->json($data,200);
    }

    public function makePayment (OrderRequest $request, Gateway $gateway){
        // Dobbiamo salvarci per ogni piatto la quantity 
        // e calcolare il prezzo poi sommarlo in una variabile e passarlo ad amount
        $plates_array = $request->plate;
        $total_amount = 0;
        foreach ($plates_array as $plate) {
            $plate_database = Plate::find($plate["id"]);
            $plate_multiplied_price = $plate_database->price * $plate["quantity"];
            $total_amount = $total_amount + $plate_multiplied_price;
        }

        $result = $gateway->transaction()->sale([
            'amount' => $total_amount,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if($result->success)  {
            $data = [
                'success' => true,
                'message' => 'Transazione eseguita con successo!'
            ];
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
