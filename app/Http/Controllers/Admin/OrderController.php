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
        // poi lo modifico con gli ordini del ristorante corrente
        $orders = Order::all();
        
        // dd('test');

        dd($orders[0]->plates());

        // $user_id = Auth::user()->id;
   
        // $plates = Plate::all()->where('user_id', '=', $user_id);

        // $orders = App\Order::find(1);

        // foreach ($orders->plates as $plate) {
            
        //     $plates = App\Plate::find(1)->plates()->get();

        //     echo $plate->pivot->name;
        // }

            
        // $user_id = Auth::user()->id;
   
        // $orders = Order::all()->where('user_id', '=', $user_id);

        // dd($user_id);
        // dd($orders);

        // $data = [
        //     'orders' => $orders,
        //     'plates' => $plates

        // ];

        return view('admin.orders.index');
    }

}
