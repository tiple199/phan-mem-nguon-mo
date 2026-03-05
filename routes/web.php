<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\authController;
use App\Http\Middleware\checkTimeAccess;
use App\Http\Middleware\checkAge;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CategoryController;

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
        Route::get("/add", "create")->name("add");
        Route::post("/store", "store")->name("store");
        Route::get("/edit/{id?}", "show")->name("edit");
        Route::put("/update/{id?}", "update")->name("update");
        Route::get("/detail/{id?}", "getDetail");
        Route::delete("/delete/{id?}", "destroy")->name("delete");
        
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
    // Route::post("/login", "checkLogin");
    Route::post("/checkLogin", "checkLogin");
    Route::get("/register","indexRegister");
    Route::post("/checkRegister", "handleRegister");
    });

Route::get('/login', [authController::class, 'index'])->name("login");


Route::get("/input_age",function (){
    return view("input_age");
});

Route::post("/handle-input-age", [authController::class, 'handleInputAge'])->name("handleAge");

Route::controller(ProductController::class)->group(function(){
    Route::get("/admin", "index")->name("admin");
});

// category routes
Route::controller(CategoryController::class)->group(function(){
    Route::get("/admin/category", "index")->name("category.index");
    Route::get("/admin/category/add", "create")->name("category.create");
    Route::post("/admin/category/store", "store")->name("category.store");
    Route::get("/admin/category/edit/{id?}", "edit")->name("category.edit");
    Route::put("/admin/category/update/{id?}", "update")->name("category.update");
    Route::delete("/admin/category/delete/{id?}", "destroy")->name("category.delete");
});
// category  routes end

// category routes
Route::controller(ProductController::class)->group(function(){
    Route::get("/admin/product", "index")->name("product.index");
    Route::get("/admin/product/add", "create")->name("product.create");
    Route::post("/admin/product/store", "store")->name("product.store");
    Route::get("/admin/product/edit/{id?}", "edit")->name("product.edit");
    Route::put("/admin/product/update/{id?}", "update")->name("product.update");
    Route::put("/admin/product/delete/{id?}", "destroy")->name("product.delete");
});
// category  routes end

// show index
Route::get("/index", function(){
    return view("index");
})->name("index");