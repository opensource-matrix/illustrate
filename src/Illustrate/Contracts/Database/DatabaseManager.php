<?php

namespace Illuminate\Contracts\Database;

interface DatabaseManager {
    /**
     * Add a connection to the DatabaseManager instance.
     * 
     * @param string $name
     * @return \Illuminate\Database\Connection
     */
    public function connection($name);
}