<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Gateway;

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

    public function makePayment (Request $request, Gateway $gateway){
        
        $result = $gateway->transaction()->sale([
            'amount' => $request->amount,
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
        
        
        
        return 'make Payment';


    }

}
