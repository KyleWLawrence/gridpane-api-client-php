<?php

error_reporting(- 1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
date_default_timezone_set('UTC');

$loader = require dirname(__DIR__) . '/vendor/autoload.php';
$loader->add('GridPane\\API\\LiveTests\\', __DIR__);
$loader->add('GridPane\\API\\UnitTests\\', __DIR__);
