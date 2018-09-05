<?php

namespace Seaon;

use Seaon\Routing\Router;

class App
{

    /**
     * Current version
     *
     * @var string
     */
    const VERSION = '0.0.1';

    /**
     * instance
     *
     * @var object
     */
    private static $instance;

    public $baseePath;

    public function __construct(string $path)
    {
        $this->baseePath = $path;
        // 加载所有路由设置
        $this->router = new Router();
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new App();
        }
        return self::$instance;
    }
}
