<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public string $username = 'tiep';
    public string $password = '123';
    
    public function checkLogin(Request $request){   
        $inputUsername = $request->input("username");
        $inputPassword = $request->input("password");
        
        if($inputUsername == "" || $inputPassword == "")
        {
            return "Login false - Username or password is empty";
        }
        
        if($inputUsername == $this->username && $inputPassword == $this->password)
        {
            return "Login success";
        }
        else{
            return "Login false - Invalid credentials";
        }
    }
    
    public function handleRegister(Request $request){
        $inputUsername = $request->input("username");
        $inputPassword = $request->input("password");
        $repass = $request->input("repass");
        $mssv = $request->input("mssv");
        $lopmonhoc = $request->input("lopmonhoc");
        $gioitinh = $request->input("gioitinh");
        
        if($inputUsername != '' && $inputPassword != "" && $mssv == "0217367" && $lopmonhoc == "67PM1" && $gioitinh == "Nam" && $repass == $inputPassword)
        {
            $this->username = $inputUsername;
            $this->password = $inputPassword;
            return "Register success";
        }
        else{
            return "Register false";
        }
    }
    public function indexRegister(){
        return view('register');
    }
    public function handleInputAge(Request $request){
        $age = $request->input("age");
        
        if($age >= 18){
            session(["age" => $age]);
            return redirect("/")->with("success", "Chào mừng bạn đến với website!");
        } else {
            return redirect("/input_age")->with("error", "Bạn phải từ 18 tuổi trở lên để truy cập!");
        }
    }
}
