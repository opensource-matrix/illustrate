<?php

namespace Illustrate\Contracts\Routing;

interface URIGenerator {
    /**
     * Set the path to generate the URI regex from.
     */
    public function setPath($path);
}