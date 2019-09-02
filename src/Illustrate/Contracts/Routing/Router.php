<?php

namespace Illustrate\Contracts\Routing;

interface Router {
    /**
     * @param $path
     */
    public function Evaluate($path);
}