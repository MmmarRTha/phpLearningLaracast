<?php

class Router
{
    protected $routes = [];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
<<<<<<< HEAD
            return $this->routes['$uri'];
        }
        throw new Exception('No route defined for this URI!');
=======
            return $this->routes[$uri];
        }
        throw  new Exception('No route defined for this URI');
>>>>>>> main
    }
}