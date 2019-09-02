<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illustrate\Routing\GenerateURI as GenerateURI;
print_r(GenerateURI);
$generator = new GenerateURI();

$generator->setPath('/{test}');
echo $generator->generate();