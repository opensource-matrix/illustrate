<?php

namespace Illustrate\Contracts\Foundation;

interface Application {
    /**
     * Call a function and cache it under the current application.
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

    /**
     * Generate with keys => values.
     * 
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function generateCache($key, $value);
}