<?php

namespace Illustrate\Contracts\Routing;

interface Router {
    /**
     * Evaluate the URL and send it to the right 
     * 
     * @param string $path
     */
    public function Evaluate($path = '/');
}