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

    public function addListener($name) {
        $this->listeners[$name] = True;
    }

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

    public function removeListener($name) {
        $listener = $this->resolve($name);
        if($listener || !$listener) {
            unset($this->listeners[$name]);
        }
    }

    public function resolve($name) {
        $name = $name ?: null;

        if(!isset($this->listeners[$name])) {
            throw new ResolveError('That listener does not exist.');
        }

        return $this->listeners[$name];
    }

    public function toggleListener($name, bool $value) {
        $listener = $this->resolve($name);
        if($listener || !$listener) {
            $value = $value ?: !$this->listeners[$name];
            $this->listeners[$name] = $value;
        }
    }
}