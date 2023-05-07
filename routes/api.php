<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Product;
use App\Models\User;

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
        ]
    );
});
