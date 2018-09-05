<?php

namespace Seaon\Routing;

class Route
{
    private $routes = [];
    
    public function map($pattern, $callable, $method)
    {
        $route = new Router($pattern, $callable);
        $this->routes[$method][] = $route;
        return $route;
    }
}
