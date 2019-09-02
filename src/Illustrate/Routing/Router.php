<?php

namespace Illustrate\Router;

use Illustrate\Contracts\Routing\Router as RouterContract;

class Router implements RouterContract {
    /**
     * The path that was called.
     * 
     * @var string
     */
    public $path;

    /**
     * Evaluate the URL and send it to the right handler.
     * 
     * @param string $path
     * @param \
     * @return void
     */
    public function evaluate($path = '/', $routeObject) {
        $this->$path = $path;

        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->get();
        }
    }

    /**
     * GET request handler.
     * 
     * @return void
     */
    private function get() {

    }
}