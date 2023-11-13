<?php
namespace controllers;
use core\App;
class PagesController
{
    public function home()
    {
        $tasks = App::get("database")->selectAll("tasks");
        $users = App::get("database")->selectAll("users");
        view("index",[
            "users" => $users,
            "tasks" => $tasks,
           // "success" => 0,
        ]);

    }

    public function about_about()
    {
        $tasks = App::get("database")->selectAll("tasks");
        $users = App::get("database")->selectAll("users");


        view("about",[
            "users" => $users,
            "tasks" => $tasks
        ]);
    }

    public function contact()
    {
        view("contact");
    }

    public function order()
    {
        view("order");
    }

    
}