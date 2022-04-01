<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    public function plates(){
        return $this->belongsToMany('App\Plate' )->withPivot('quantity');
    }

    protected $fillable = [
        'customer_name',
        'customer_address',
        'customer_email',
        'customer_phone',
    ];
}
