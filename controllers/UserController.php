<?php
namespace controllers;
use core\App;

class UserController
{
    public function index()
    {
        $users = App::get("database")->selectAll("users");
        return view("users",[
            "users" => $users
        ]);
    }

    public function createUser()
    {
        App::get("database")->insert([
            "name" => request('txtname'),
            "email" => request('txtemail'),
            "phone" => request('txtphone'),
        ],"users");
        
        return redirect('/');
        
        
        
    }

    public function delete($id)
    {
        dd($id);
    }
}