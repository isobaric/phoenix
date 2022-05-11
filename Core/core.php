<?php

$loader = require_once dirname(__DIR__) . '/vendor/autoload.php';
$loader->addPsr4('Application' . '\\', dirname(__DIR__) . '/Application');

require_once dirname(__DIR__) . '/Core/functions.php';

$_HORSELOFT_CORE_CONTAINER_ = [];
