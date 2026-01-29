<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\authController;
use App\Http\Middleware\checkTimeAccess;
use App\Http\Middleware\checkAge;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('home');
});


Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, World!']);
});

// Route::get("")
Route::resource("test",TestController::class);

Route::prefix('/product')->middleware([checkTimeAccess::class])->group(function(){
    Route::controller(ProductController::class)->group(function(){
        Route::get("/", "index")->name("product");
        Route::get("/add", "add")->name("add");
        Route::get("/detail/{id?}", "getDetail");
        
        // check middleware single
        // Route::get("/", "index")->name("product")->middleware(checkTimeAccess::class);

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


Route::controller(authController::class)->group(function(){
    Route::post("/login", "checkLogin");
    Route::get("/register","indexRegister");
    Route::post("/checkRegister", "handleRegister");
    });

Route::get('/login', function(){
    return view('login');
});


Route::get("/input_age",function (){
    return view("input_age");
});

Route::post("/handle-input-age", [authController::class, 'handleInputAge'])->name("handleAge");