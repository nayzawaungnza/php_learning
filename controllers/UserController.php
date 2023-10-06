<?php
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
            "name" => $_POST['txtname'],
            "email" => $_POST['txtemail'],
            "phone" => $_POST['txtphone'],
        ],"users");
        
        return redirect('/');
        
        
        
    }
}