<?php

namespace Illustrate\Router;

use Illustrate\Contracts\Routing\Router as RouterContract;

class Router implements RouterContract {
    /**
     * The path that was called.
     * 
     * @var 
     */
    public $path;

    public function evaluate($path = '/') {

    }
}