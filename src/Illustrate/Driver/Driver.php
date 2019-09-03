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
    protected $app;

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

    /**
     * The name of the driver.
     * 
     * @var string
     */
    public $name;

    public function __construct($name, $app) {
        $this->name = $name;
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
     * Activate a listener, then pipe data to the $closure.
     * 
     * @param string $name
     * @param Closure $closure
     * @param array $data
     * @return void;
     */
    public function useListener(Closure $closure, $data) {
        $use_closure = True;
        if(!isset($closure)) {
            $use_closure = False;
        }

        $listener = $this->resolve($name);
        if($listener) { // If not disabled.
            $this->app->call($this->closure, $data);
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

    /**
     * Set the driver closure.
     * 
     * @param Closure $driver
     * @return void
     */
    public function driver(Closure $closure) {
        $this->closure = $closure;
    }
}