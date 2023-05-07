<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Product;
use App\Models\User;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', function () {
    $data = Product::all();
    return response()->json(
        [
            "message" => "GET method success",
            "data" => $data
        ],200
    );
});

Route::get('/users', function () {
    $data = User::all();
    return response()->json(
        [
            "message" => "GET method success",
            "data" => $data
        ],200
    );
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
