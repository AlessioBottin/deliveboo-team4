<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Plate;


class OrderController extends Controller
{
    public function index() {

        // ! versione piu' lenta 
        // poi lo modifico con gli ordini del ristorante corrente
        // $all_orders = Order::all();

        // $orders = [];
        // // 
        // foreach ($all_orders as $single_order) {
        //     $plates = $single_order->plates;

        //     foreach ($plates as $plate) {
        //         $id = $plate->user_id;

        //         if($id == Auth::id()){
        //             if(!in_array($single_order, $orders)){
        //                 $orders[] = $single_order;
        //             }
        //         }
        //     }
        // };
        $orders = [];

        $user_id = Auth::user()->id;
        
        $plates = Plate::all()->where('user_id', '=', $user_id);

        foreach ($plates as $plate) {

            $plate_id = $plate->id;
            $orders_related_plate = Order::whereHas('plates', function ($query) use($plate_id) {
                $query->where('id', $plate_id);
            })->get(); 

            foreach ($orders_related_plate as $order) {
                if (!in_array($order, $orders)) {
                    $orders[] = $order;
                }
            }        
        }

        

        $data = [
            'orders' => $orders
        ];

        return view('admin.orders.index',$data);
    }

    public function show($id) {
        $order = Order::find($id);

    
        $data = [
            'order' => $order
        ];
        

        return view('admin.orders.show',$data);
    }

}
