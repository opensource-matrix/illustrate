<?php

namespace Illustrate\Contracts\Foundation;

interface Application {
    /**
     * Call the a function and cache it under the current application.
     * 
     * @param Closure $closure
     * @param mixed $...
     * @return void
     */
    public function call();

    /**
     * Cache an array of data.
     * 
     * @param array $data
     * @return void
     */
    public function cache($data);
}