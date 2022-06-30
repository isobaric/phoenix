<?php

use Horseloft\Phalanx\Bootstrap;

require_once dirname(__DIR__) . '/Core/core.php';

$app = new Bootstrap(dirname(__DIR__));

$app->run();
