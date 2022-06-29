<?php

$loader = require_once dirname(__DIR__) . '/vendor/autoload.php';
$loader->addPsr4('Application' . '\\', dirname(__DIR__) . '/Application');

$_HORSELOFT_CORE_CONTAINER_ = [];
