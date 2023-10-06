<?php
class PagesController
{
    public function home()
    {
        $tasks = App::get("database")->selectAll("tasks");
        $users = App::get("database")->selectAll("users");
        view("index",[
            "users" => $users,
            "tasks" => $tasks
        ]);

    }

    public function about()
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

    public function createUser()
    {
        App::get("database")->insert([
            "name" => $_POST['txtname'],
            "email" => $_POST['txtemail'],
            "phone" => $_POST['txtphone'],
        ],"users");
        
        Header("Location: /");
    }
}