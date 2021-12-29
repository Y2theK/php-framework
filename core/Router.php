<?php

class Router{
    protected $routes=[
        "GET" => [],
        "POST" => []
    ];
    // [
    //     ""=>"controllers/IndexController.php",
    //     "about"=>"controllers/AboutController.php",
    //     "contact"=>"controllers/ContactController.php",
    // ]
    public static function load($filename)
    {
        $router = new Router;
        require $filename;
        return $router;
    }
    public function register($routes){
        $this->routes = $routes;

    }
    public function get($uri,$controller)
    {
        $this->routes["GET"][$uri]=$controller;
    }
    public function post($uri,$controller)
    {
        $this->routes["POST"][$uri]=$controller;
    }
    public function callAction($class,$method)
    {
        $myclass = new $class;
        $myclass->$method();
    }
    public function direct($uri,$method)
    {
        if(!array_key_exists($uri,$this->routes[$method]))
        {
           
            die("404!!");
        }
        // dd($this->routes[$method][$uri]);
        // $explosion = explode("@",$this->routes[$method][$uri]);
        $explosion = $this->routes[$method][$uri];
        //    dd($explosion);
            $this->callAction($explosion[0],$explosion[1]);
       
        
    }
    
    
}

?>