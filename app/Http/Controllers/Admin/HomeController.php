<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;
use App\Plate;
use App\Category;


class HomeController extends Controller
{
    public function index(){
        $user = Auth::user();

        $categories = Category::all();
        
        
        // If he has already any related category, redirect him to the homepage
        if(count($user->categories)>0){
            return view('admin.home');
        }
        // If the user doesn't have any related category (ex. when he registers)
        // Redirect him to the categories selection page
        else{
            return view('admin.categories', compact('categories'));
        }
    }

    
    protected function saveCategories(Request $request){
        $user = Auth::user();
        $form_data = $request->all();

        // Saving the selected categories in the user_category table
        // and then redirect him to the homepage
        $user->categories()->sync($form_data['categories']);

        return redirect()->route('admin.home');
    }
}
