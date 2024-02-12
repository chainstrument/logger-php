<?php 

require_once '../vendor/autoload.php';
 
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// Create the logger
$logger = new Logger('my_logger');
// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'/../logs/my_app.log' ));
 

// You can now use your logger
$logger->info('My logger is now ready');