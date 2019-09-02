<?php

namespace Illustrate\Contracts\Routing;

interface Router {
    /**
     * Evaluate the URL and send it to the right handler.
     * 
     * @param string $path
     * @return void
     */
    public function evaluate($path = '/');

    /**
     * GET request handler.
     * 
     * @return void
     */
    public function get();

    /**
     * POST request handler.
     */
    public function post();
}