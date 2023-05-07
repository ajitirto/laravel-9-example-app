<?php

use App\Models\User;
use App\Models\Product;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return "Success Access Root Path('/')";
});

Route::get('/user',function() {
    $userFactory = User::with('product')->where('id','<',6)->get();
    // dd($userFactory);
    return view('show-user',compact('userFactory'));
});
