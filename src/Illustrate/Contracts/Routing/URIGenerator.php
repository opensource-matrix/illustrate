<?php

namespace Illustrate\Contracts\Routing;

interface URIGenerator {
    /**
     * Set the path to generate the URI from.
     */
    public function setPath($path);
}