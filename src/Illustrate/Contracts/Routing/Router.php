<?php

namespace Illustrate\Contracts\Routing;

interface Router {
    /**
     * Evaluate the URL and send it to the right handler.
     * 
     * @param string $path
     */
    public function evaluate($path = '/');

    public function get();
}