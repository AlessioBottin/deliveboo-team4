<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\NewOrderRestaurantNotification;
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
        

        $orders = Order::getAllMyOrders();

        $data = [
            'orders' => $orders
        ];

        return view('admin.orders.index',$data);
    }

    public function show($id) {
        $orders = Order::find($id);
        
        $data = [
            'order' => $orders,
        ];

        return view('admin.orders.show',$data);
    }


    // public function store(Users $users) {
    //     Mail::to('$users->email')->send(new NewOrderRestaurantNotification($new_order));
    // }

    public function statistics() {
        $php_orders = Order::getAllMyOrders();
        $orders = json_encode($php_orders);

        return view('admin.orders.statistics', compact('orders'));
    }
}
