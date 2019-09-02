<?php

namespace Illustrate\Contracts\Routing;

interface Router {
    public function Evaluate(string $path);
}