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
        // $postID="";
        // $routeParts = explode("/",$uri);
        // $replacement = "{id}";
        // foreach ($routeParts as &$part) {
        //     if (is_numeric($part)) {
        //         $postID = $part;
        //         $part = $replacement;
                
        //     }
        // }
        // $routeString = implode("/", $routeParts);

        //dd($routeString);
        if(!array_key_exists($uri,$this->routes[$method])){
            die("404 Page");
        }

        $parts = $this->routes[$method][$uri];
        $this->callMethod($parts[0], $parts[1]);
        //dd($parts);
        // if($postID){
        //     //dd($postID);
        //     $this->callMethodWithId($parts[0], $parts[1], $postID);
        // }else{
        //     $this->callMethod($parts[0], $parts[1]);
        // }
        
       
        //dd($parts);
       
    }

    public function callMethod($class,$method)
    {
        //get $class by string, get $method by string ==> change object
        
        $class = new $class;//new PagesController likes this //create object or instantiate with new keyword
        $class->$method();
    }
    public function callMethodWithId($class, $method, $id)
    {

        $class = new $class;
        //dd($class->$method($id));
        $class->$method($id);
    }

    private function extractId($uri)
    {

        preg_match('/(\d+)$/', $uri, $matches);
        return $matches[0];
    }

    
}