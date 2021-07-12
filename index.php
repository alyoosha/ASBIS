<?php

require_once 'vendor/autoload.php';

use \Alyosha\Router;
use \Alyosha\Action\CsvAction;
use \Alyosha\Action\JsonAction;
use \Alyosha\Action\MainAction;

Router::add('main', ['GET'], '/main', MainAction::class);
Router::add('csv', ['GET'], '/csv', CsvAction::class);
Router::add('json', ['GET'], '/json', JsonAction::class);

Router::match($_SERVER['REQUEST_URI']);
