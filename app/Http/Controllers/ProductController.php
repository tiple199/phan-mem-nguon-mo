<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Http\Middleware\checkTimeAccess;

class ProductController extends Controller implements HasMiddleware
{
    //
    public static function middleware():array{
        return [checkTimeAccess::class];
    }
    public function index(){
        $title = "Product Page";
        return view("product.index",["title"=>$title,
        "product"=>[
            ["name"=>"Laptop Dell XPS 13","price"=>3000],
            ["name"=>"MacBook Pro 16","price"=>3500],
            ["name"=>"HP Spectre x360","price"=>2800],
            ["name"=>"Lenovo ThinkPad X1 Carbon","price"=>3200],
        ]]);
    }
    public function getDetail(string $id = "123"){
        return view("product.detail",['id'=>$id]);
    }
    public function add(){
        return view("product.add");
    }
    public function handleInput(int $id){
        
    }
    
    
    
}
