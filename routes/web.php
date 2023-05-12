<?php

use App\Models\User;
use App\Http\Middleware\admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GuzzleController;
use App\Http\Controllers\Api\ApiController;

// Halaman di luar authentifikasi
Route::get('/', function () {
    return "Success Access Root Path('/')";
});

Route::get('/term-and-policy', function(){
    return 'halaman term and policy';
});

// Halaman di Authentification
Route::get('/dashboard', function() {
    return 'dashboard';
});


// halaman consume api
Route::get('/getapi', [ApiController::class, 'index']);
Route::get('/hello', function() {
    echo 'hello';
});

// belajar guzzle
Route::get('/guzzle', [GuzzleController::class, 'index']);







Route::get('/user',function() {
    $userFactory = User::with('product')
                        ->idLessThan(6)
                        ->get();
    // dd($userFactory);
    return view('show-user',compact('userFactory'));
});

Route::get('/user2',function() {
    $userFactory = User::with('product')
                        ->idLessThan(6)
                        ->get();
    // dd($userFactory);
    return view('show-user',compact('userFactory'));
});

Route::get('/join', function() {
    $join = DB::table('users as a')
                ->join('products as b', 'a.id', 'b.id' )
                ->select('a.id','a.name as nama','b.price as harga', 'b.description as deskripsi')
                ->where('a.id','<',6)
                ->get();
    // dd($join);
    return view('join',compact('join'));

});

Route::get('/join/{id}', function($id) {
    $join = User::with(['product'])->find($id);
    // dd($join);
    return view('join-one',compact('join'));

});

// redirect the outer from local
Route::redirect('/my-github', 'https://github.com/ajitirto', 301);


Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function() {
    return redirect('/home');
});

Route::middleware([admin::class])->group(function(){
    Route::get('/home', function() {
        return 'ok';
    });
});
