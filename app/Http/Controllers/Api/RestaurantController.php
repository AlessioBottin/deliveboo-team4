<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Plate;

class RestaurantController extends Controller
{

    public function getRestaurant($slug){
        $restaurant = User::where('slug', '=', $slug)->first();

        return response()->json($restaurant);
    } 

    // ! Function that returns an API with x categories to show in the homepage slider
    public function loadCategories(){
        $categories = Category::all()->take(10);

        foreach ($categories as $category) {
            $category['isCategoryActive'] = false;
        }

        return response()->json($categories);
    }


    // ! Function that returns an API with all the restaurants having the specified category
    public function getRestaurants($category_slug){
        // Taking all the users
        $users = User::all();

        // Creating an array for the users that will be shown in the frontoffice page
        $correct_users = [];

        // Foreach user, take all the related categories, and if one of them matches with the one in the url
        // add the user in the $correct_users array
        foreach ($users as $user) {
            $categories = $user->categories;
            foreach ($categories as $category) {
                if($category->slug == $category_slug){
                    $correct_users[] = $user;
                }
            }
        }

        return response()->json($correct_users);
    }


    // ! Function that returns API with all the plates of a given restaurant
    public function getPlatesForRestaurant($restaurant_slug){
        $restaurant = User::where('slug', '=', $restaurant_slug)->first();

        $plates = Plate::where('user_id', '=', $restaurant->id)->get();

        return response()->json($plates);
    }
}
