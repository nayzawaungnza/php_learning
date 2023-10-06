<?php
class Router
{
    protected $routes=[
        "GET" => [],
        "POST" => [],
    ];

    public static function load($fileName)
    {
        $router = new Router();
        require $fileName;
        return $router;
    }

    public function get($uri,$controller)
    {
        $this->routes['GET'][$uri]=$controller;
    }

    public function post($uri,$controller)
    {
        $this->routes['POST'][$uri]=$controller;
    }

    public function direct($uri,$method)
    {
        if(!array_key_exists($uri,$this->routes[$method])){
            die("404 Page");
        }
        
        $parts = explode("@",$this->routes[$method][$uri]);
           //return $this->routes[$method][$uri];
        $this->callMethod($parts[0], $parts[1]);
        //dd($this->routes[$method][$uri]);
    }

    public function callMethod($class,$method)
    {
        //get $class by string, get $method by string ==> change object
        //dd($method);
        
        $class = new $class;//new PagesController likes this //create object or instantiate with new keyword
        $class->$method();
    }
}