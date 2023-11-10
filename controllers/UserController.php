<?php
namespace controllers;
use core\App;

class UserController
{
    public function index()
    {
        $users = App::get("database")->selectAll("users");
        //print_r($users);
        return view("users",[
            "users" => $users,
        ]);
    }

    public function createUser()
    {
        App::get("database")->insert([
            "name" => request('txtname'),
            "email" => request('txtemail'),
            "phone" => request('txtphone'),
        ],"users");
        
        $success = ['success' => 'User created successfully'];
        return redirect('/', $success);
        
        
        
    }

    public function deleteUser(){
        App::get("database")->delete(request('id'),"users");
        return redirect('/?success=1');
    }
}