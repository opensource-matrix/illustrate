<?php

namespace Illustrate\Contracts\Driver;

interface Driver {
    /**
     * Add a listener to the driver.
     * 
     * @param string $name
     * @return void
     */
    public function addListener($name);

    /**
     * Activate a listener, then return data to the $closure.
     * 
     * @param string $name
     * @param Closure $closure
     * @return void;
     */
    public function useListener($name, Closure $closure);

    /**
     * Remove listener from the driver.
     * 
     * @param string $name
     * @return void
     */
    public function removeListener($name);

    /**
     * Resolve the listener with {$name} and do necessary checks.
     * 
     * @param string $name
     * @return bool
     */
    function resolve($name);

    /**
     * Configure the driver.
     * 
     * @param array $data
     * @return void
     */
    public function config($data);

    /**
     * Set the driver closure.
     * 
     * @param Closure $driver
     * @return void
     */
    public function driver(Closure $driver);
}