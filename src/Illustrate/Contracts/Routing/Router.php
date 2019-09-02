<?php

namespace Illustrate\Contracts\Routing;

interface Router {
    public function Evaluate(Request $request);
}