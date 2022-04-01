<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;

class OrderController extends Controller
{
    public function index() {
        // poi lo modifico con gli ordini del ristorante corrente
        $orders = Order::all();

        // $user_id = Auth::user()->id;
   
        // $orders = Order::all()->where('user_id', '=', $user_id);

        // dd($user_id);
        // dd($orders);

        $data = [
            'orders' => $orders
        ];

        return view('admin.orders.index', $data);
    }

}
