<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$Log = new Logger('name');
$Log->pushHandler(new StreamHandler('your.log', Logger::WARNING));

$Log->warning('Foo');
$Log->error('Bar');
