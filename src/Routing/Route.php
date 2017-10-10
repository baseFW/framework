<?php

namespace Seaon\Routing;

class Route
{
    protected $namespace = 'App\Controller';
    
    public function __construct()
    {
        # do
    }

    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = trim($uri, '/');
        $params = explode('/', $uri);

        if (count($params) != 2) {
            // $default_controller = DEFAULT_CONTROLLER;
            // $default_method = DEFAULT_METHOD;
        } else {
            $controller = $params[0];
            $method = $params[1];
        }

        $controller = $this->namespace.'\\'.$controller."Controller";

        $model = new $controller;
        if (!method_exists($controller, $method)) {
            exit("fangfnot");
        }

        call_user_func([$model, $method]);
    }

    public function abc()
    {
        return 123;
    }
}
