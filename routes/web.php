<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')
->namespace('Admin') //this is the folder in which all the private controllers are saved
->name('admin.')  //this is how routes "->name()" have to start
->prefix('admin') //all urls have to start with /admin/
->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/save', 'HomeController@saveCategories')->name('save-categories');

    // Crud Plates 
    Route::resource('plates', 'PlatesController');

});


Route::get('{any?}', function(){
    return view ('guests.home');
})->where('any', '.*'); //When you go in a route that is not preceded by /admin/ you will go in the home.blade.php file in the guests folder