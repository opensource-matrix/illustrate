<?php

namespace Illustrate\Driver\Access;

class ResolveError extends ErrorException {
    public function __construct($message = '', 
            $code = 0, 
            $severity = E_ERROR, 
            $filename = __FILE__, 
            $lineno = __LINE__, 
            $previous = NULL) {
        return parent::__construct($message, $code, $severity, $filename, $lineno, $previous);
    }
}