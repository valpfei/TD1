<?php

//date_default_timezone_set('Europe/Paris');

require __DIR__ . '/../vendor/autoload.php';

//require_once '../vendor/autoload.php';
//require_once 'demo.php';

//use valpfei\demo;
use valpfei\td1\demo;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('../log/your.log', Logger::WARNING));
$log->pushHandler(new StreamHandler('../log/general.log'));

// Add records to the log
//$log->date.timezone('Europe/Berlin');
$log->debug('Debug');
//$log->warning('Foo');
//$log->error('Bar');

$demo = new demo();
echo $demo->version;
echo PHP_EOL;
$demo->hello();

$log->debug('End');

echo PHP_EOL;
echo 'DIR: ';
echo __DIR__;
echo PHP_EOL;


//Monolog PHP Logging
//echo "Bonjour";
//echo PHP_EOL;
//echo "Le monde";
//echo PHP_EOL;

?>