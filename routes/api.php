<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories', 'Api\RestaurantController@loadCategories');

Route::get('/restaurant/{id}', 'Api\RestaurantController@getRestaurant');

Route::get('/restaurants/{category_slug}', 'Api\RestaurantController@getRestaurants');

Route::get('/restaurant-list/{restaurant_id}', 'Api\RestaurantController@getPlatesForRestaurant');



// Payment API
Route::get('orders/generate', 'Api\Orders\OrderController@generate');
Route::post('orders/make/payment', 'Api\Orders\OrderController@makePayment');




