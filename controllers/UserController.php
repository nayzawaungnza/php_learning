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
}