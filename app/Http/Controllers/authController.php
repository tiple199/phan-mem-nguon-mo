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
        
        if($inputUsername != '' && $inputPassword != "")
        {
            $this->username = $inputUsername;
            $this->password = $inputPassword;
            return "Register success";
        }
        else{
            return "Register false - Username or password is empty";
        }
    }
}
