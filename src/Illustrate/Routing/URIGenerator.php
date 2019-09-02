<?php

namespace Illustrate\Routing;

use Illustrate\Contracts\Routing\URIGenerator as URIGeneratorContract;
// \{(.*|[a-zA-Z0-9]*)\}

class URIGenerator implements URIGeneratorContract {
    private $path;
}