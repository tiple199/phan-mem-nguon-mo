<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, World!']);
});

Route::prefix('/product')->group(function(){
    Route::get('/', function () {
        return view("product.index");
    })->name("product");
    // Route::get('/product/{id?}', function(?string $id="hello"){
    //     return "ID: $id";
    // });
    Route::get('/add', function () {
        return view('product.add');
    })->name("add");

    Route::get('/{id?}', function(?string $id="123"){
        return view('product.detail',['id'=> $id]);
    });
    

});
Route::fallback(function() {
    return view('404page');
});

Route::get('/sinhvien/{name?}/{mssv?}', function(?string $name="Luong Xuan Hieu",?string $mssv = "123456"){
    return view('sinhvien',['name'=> $name,'mssv'=> $mssv]);
});

Route::get('/banco/{n}', function($n){
    return view('banco', ['n'=> $n]);
});