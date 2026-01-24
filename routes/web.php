<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\authController;

Route::get('/', function () {
    return view('home');
});


Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, World!']);
});

// Route::get("")

Route::prefix('/product')->group(function(){
    Route::controller(ProductController::class)->group(function(){
        Route::get("/", "index")->name("product");
        Route::get("/add", "add")->name("add");
        Route::get("/detail/{id?}", "getDetail");

    });
    // Route::get('/', [ProductController::class,"index"])->name("product");
    // // Route::get('/product/{id?}', function(?string $id="hello"){
    // //     return "ID: $id";
    // // });
    // Route::get('/add', [ProductController::class,"add"])->name("add");

    // Route::get('/detail/{id?}', [ProductController::class,"getDetail"]);
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
    Route::post("/register", "handleRegister");
    });

Route::get('/login', function(){
    return view('login');
});
Route::get('/register', function(){
    return view('register');
});