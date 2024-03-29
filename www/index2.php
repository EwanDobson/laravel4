<?php

require '../vendor/autoload.php';


use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

$logger = new Logger('my_logger');
$logger->pushHandler(new StreamHandler(__DIR__.'/log/myapp.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());
var_dump(__DIR__);
$logger->addInfo("My logger is now ready");

