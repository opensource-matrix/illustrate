<?php

namespace Illustrate\Contracts\Routing;

interface Router {
    /**
     * @param string $path
     */
    public function Evaluate(string $path);
}