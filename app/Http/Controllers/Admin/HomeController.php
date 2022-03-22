<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Plate;


class HomeController extends Controller
{
    public function index(){
        return view('admin.home');
    }
}
