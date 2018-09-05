<?php

namespace Seaon\Routing;

class Router
{
    public static $routes = [];
    public static function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $uri = self::replace($uri);
        echo "<pre>";
        var_dump($uri);
        exit();
    }

    public static function get(string $route, $callback)
    {
        self::$routes[$route] = $callback;
    }

    public function replace(string $uri)
    {
        $str = 'index.php';

        return mb_strpos($uri, $str) !== false ? str_replace('/'.$str, '', $uri) : $uri;
    }
}
