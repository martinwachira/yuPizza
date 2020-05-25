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

Route::apiResource('/customer', 'CustomerController');
Route::apiResource('/pizza', 'PizzaController');
Route::apiResource('/order', "OrderController");

Route::post('/addcustomer', 'CustomerController@store');
Route::post('/login', 'CustomerController@login');
Route::get('/customer/{customer}', 'CustomerController@index');

// Route::apiResource('/pizza', 'PizzaController');
Route::get('/pizzas/{pizza}', 'PizzaController@show');

Route::post('/saveorder', "OrderController@store");

// Route::get('/', 'PizzaController@index');

Route::get('/', function () {
    return view('welcome');
});