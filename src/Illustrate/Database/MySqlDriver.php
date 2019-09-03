<?php

namespace Illustrate\Database;
use Illustrate\Driver\Driver as Driver;

class MySqlDriver extends Driver {
    /**
     * Connection instance.
     * 
     * @var \Illustrate\Database\Connection
     */
    private $connection;

    public function __construct($app, $connection) {
        parent::__construct($app);

        $this->addListener('create_database');
        $this->addListener('create_table');
        $this->addListener('add_to_table');

        $this->initializeDriver();
    }

    private function initializeDriver() {
        $this->driver(function($data) {
            if($data['type'] == 'create_database') {

            }
        });
    }
}