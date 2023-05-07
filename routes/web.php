<?php

use App\Http\Middleware\admin;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return "Success Access Root Path('/')";
});

Route::get('/user',function() {
    $userFactory = User::with('product')
                        ->idLessThan(6)
                        ->get();
    // dd($userFactory);
    return view('show-user',compact('userFactory'));
});

Route::get('/join', function() {
    $join = DB::table('users as a')
                ->join('products as b', 'a.id', 'b.id' )
                ->select('a.name as nama','b.price as harga', 'b.description as deskripsi')
                ->where('a.id','<',6)
                ->get();
    // dd($join);
    return view('join',compact('join'));

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
