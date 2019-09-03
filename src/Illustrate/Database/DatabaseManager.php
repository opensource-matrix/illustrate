<?php

namespace Illustrate\Database;
use Illustrate\Contracts\Database\DatabaseManager as DatabaseManagerContract;
use Illustrate\Database\Connection as Connection;
use Illustrate\Driver\Driver as Driver;

class DatabaseManager implements DatabaseManagerContract {
    /**
     * The application instance.
     * 
     * @var Illustrate\Foundation\Application
     */
    protected $app;

    /**
     * A list of drivers used by the DatabaseManager.
     * 
     * @var array
     */
    protected $drivers = [];

    public function __construct($app) {
        $this->app = $app;
    }

    /**
     * Add a driver to the DatabaseManager instance.
     * 
     * @param string $name
     * @param \Illuminate\Driver\Driver $driver
     * @return void
     */
    protected function addDriver(Driver $driver) {
        $this->drivers[$driver->name] = $driver;
    }

    public function connection($name) {

    }
}