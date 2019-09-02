<?php

namespace Illustrate\Foundation;
use Illustrate\Contracts\Foundation\Application as ApplicationContract;

class Application implements ApplicationContract {
    /**
     * The cache that stores output.
     * 
     * @var array
     */
    public $cached = [];

    /**
     * Call a function and cache it under the current application.
     * 
     * @param Closure $closure
     * @param mixed $...
     * @return void
     */
    public function call() {
        $closure = func_get_arg(0);
        $args = array_slice(func_get_args(), 1);
        call_user_func_array($closure, $args);

        $this->generateCache([
            'arguments' => $args
        ]);
    }

    /**
     * Cache an array of data.
     * 
     * @param array $data
     * @return void
     */
    public function cache($key, $value) {
        $this->cached[$key] = $value;
    }

    /**
     * Generate with keys => values.
     * 
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function generateCache($value) {
        $this->cache(hash('sha256', str_val(microtime(true))), $value);
    }
}