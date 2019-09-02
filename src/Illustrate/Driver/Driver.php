<?php

namespace Illuminate\Driver;
use Illuminate\Contracts\Driver\Driver as DriverContract;

class Driver implements DriverContract {
    /**
     * The application instance.
     * 
     * @var \Illuminate\Foundation\Application
     */
    public $app;

    /**
     * The driver closure.
     * 
     * @var Closure
     */
    public $closure;

    /**
     * The list of listeners.
     * 
     * @var array
     */
    public $listeners = [];

    public function __construct($app) {
        $this->app = $app;
    }
}