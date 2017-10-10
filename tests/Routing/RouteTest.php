<?php

namespace Seaon\Tests\Routing;

use PHPUnit\Framework\TestCase;
use Seaon\Routing\Route;

class RouteTest extends TestCase
{
    public function testabc()
    {
        $route = new Route();
        $this->assertEquals(123, $route->abc());
    }
}
