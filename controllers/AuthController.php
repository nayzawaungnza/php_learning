<?php
namespace controllers;

use core\App;
use core\Redirect;
use core\Session;
use core\Validator;


class AuthController{

    public function login(){
        view("login");
    }

    public function register(){
        view("register");
    }
    public function store(){
        $dataToValidate = [
            "txtname" => request('txtname'),
            "txtemail" => request('txtemail'),
            "txtphone" => request('txtphone'),
            "txtpassword" => request('txtpassword'),
            "confirmPassword" => request('confirmPassword'),
        ];

        $validator = new Validator($dataToValidate);
        
        $rules = [
            'txtname' => 'required',
            'txtemail' => 'required|email',
            'txtphone' => 'required|phone',
            'txtpassword' => 'required|min:8',
            'confirmPassword' => 'required|same:txtpassword',
        ];

        
        
        $errors = $validator->validate($rules);
      
    if (!empty($errors)) {
        Session::start();
        Session::set('errors', $errors);
        Session::set('inputs', $dataToValidate);
        Redirect::back();
        exit; // Ensure to exit after the redirect
    }


    $dataforSQLTable = [
        "name" => $dataToValidate['txtname'],
        "email" => $dataToValidate['txtemail'],
        "phone" => $dataToValidate['txtphone'],
        "password" => password_hash($dataToValidate['txtpassword'],PASSWORD_BCRYPT),
    ];


    App::get("database")->insert($dataforSQLTable,"users");
        Session::start();
        Session::set('success', 'Registration Successfull.');
        Redirect::back();
        exit; // Ensure to exit after the redirect
    //return redirect('/login');
    }
}