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

    public function call() {
        $closure = func_get_arg(0);
        $args = array_slice(func_get_args(), 1);
        call_user_func_array($closure, $args);

        $this->generateCache([
            'arguments' => $args
        ]);
    }

    public function cache($key, $value) {
        $this->cached[$key] = $value;
    }

    public function generateCache($value) {
        $this->cache(hash('sha256', str_val(microtime(true))), $value);
    }
}