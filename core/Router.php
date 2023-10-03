<?php
class Router
{
    protected $routes=[];
    public static function load($fileName)
    {
        $router = new Router();
        require $fileName;
        return $router;
    }
    public function register($routes)
    {
        $this->routes = $routes;
    }
    public function direct($uri)
    {
        if(array_key_exists($uri,$this->routes)){
           return $this->routes[$uri];
        }
    }
}