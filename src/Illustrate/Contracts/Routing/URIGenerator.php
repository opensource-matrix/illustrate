<?php

namespace Illustrate\Contracts\Routing;

interface URIGenerator {
    /**
     * Set the path to generate the URI regex from.
     * 
     * @param string $path
     * @return void
     */
    public function setPath($path);

    /**
     * Generate the regex string.
     * 
     * @return string
     */
    public function generate();
}