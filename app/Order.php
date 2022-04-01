<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    public function plates(){
        return $this->belongsToMany('App\Plate');
    }

    protected $fillable = [
        'customer_name',
        'customer_address',
        'customer_email',
        'customer_phone',
    ];

    // Static Function 
    static function getAllMyOrders() {
        
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

        return $orders;
    }
}
