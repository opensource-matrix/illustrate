<?php

namespace Illustrate\Contracts\Routing;
use Symfony\Component\HttpFoundation\Request;

interface Router {
    public function Evaluate(Request $request);
}