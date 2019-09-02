<?php

namespace Illustrate\Contracts\Routing;

interface URIGenerator {
    /**
     * Set the path to generate the URI regex from.
     * 
     * @param $path;
     * @return void;
     */
    public function setPath($path);
}