<?php

namespace Illustrate\Database;
use Illustrate\Database\DatabaseManager as DatabaseManager;
use Illustrate\Foundation\Application as Application;
use Illustrate\Driver\Driver as Driver;

class Potent extends DatabaseManager {
    public function __construct() {
        parent::__construct(new Application);

        $sql = new Driver('mysql', $this->app);
        $sql->addListener('create');
    }
}