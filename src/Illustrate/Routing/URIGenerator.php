<?php

namespace Illustrate\Routing;

use Illustrate\Contracts\Routing\URIGenerator as URIGeneratorContract;
// \{(.*|[a-zA-Z0-9]*)\}

class URIGenerator implements URIGeneratorContract {
    /**
     * The URI input to generate the regex string from.
     * 
     * @var string
     */
    private $path;

    /**
     * Set the path to generate the URI regex from.
     * 
     * @param string $path
     * @return void
     */
    public function setPath($path) {
        $this->$path = $path;
    }

    /**
     * Generate the regex string and return it.
     * 
     * @return string
     */
    public function generate() {
        
    }
}