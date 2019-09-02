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

    public function setPath($path) {
        
    }
}