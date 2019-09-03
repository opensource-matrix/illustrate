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
     * @param array $data
     * @return void;
     */
    public function useListener($name, Closure $closure, $data);

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
     * Toggle a listener.
     * 
     * @param string $name
     * @param bool|void $value
     * @return void
     */
    public function toggleListener($name, $value);

    /**
     * Set the driver closure.
     * 
     * @param Closure $driver
     * @return void
     */
    public function driver(Closure $driver);
}