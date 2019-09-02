<?php

namespace Illuminate\Driver;
use Illuminate\Contracts\Driver\Driver as DriverContract;
use Illuminate\Driver\Access\ResolveError as ResolveError;

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

    /**
     * Add a listener to the driver.
     * 
     * @param string $name
     * @return void
     */
    public function addListener($name) {
        $this->listeners[$name] = True;
    }

    /**
     * Activate a listener, then return data to the $closure.
     * 
     * @param string $name
     * @param Closure $closure
     * @return void;
     */
    public function useListener($name, Closure $closure) {
        $use_closure = True;
        if(!isset($closure)) {
            $use_closure = False;
        }

        $listener = $this->resolve($name);
        if($listener) { // If not disabled.
            $this->app->call($this->closure, $name);
        }
    }

    /**
     * Remove listener from the driver.
     * 
     * @param string $name
     * @return void
     */
    public function removeListener($name) {
        $listener = $this->resolve($name);
        if($listener || !$listener) {
            unset($this->listeners[$name]);
        }
    }

    /**
     * Resolve the listener with {$name} and do necessary checks.
     * 
     * @param string $name
     * @return bool
     */
    public function resolve($name) {
        $name = $name ?: null;

        if(!isset($this->listeners[$name])) {
            throw new ResolveError('That listener does not exist.');
        }

        return $this->listeners[$name];
    }

    /**
     * Toggle a listener.
     * 
     * @param string $name
     * @param bool|void $value
     * @return void
     */
    public function toggleListener($name, bool $value) {
        $listener = $this->resolve($name);
        if($listener || !$listener) {
            $value = $value ?: !$this->listeners[$name];
            $this->listeners[$name] = $value;
        }
    }

    
    public function driver(Closure $closure) {
        $this->closure = $closure;
    }
}