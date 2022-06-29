<?php

use Horseloft\Phalanx\Bootstrap;

require_once dirname(__DIR__) . '/Core/core.php';

$bridge = new Bootstrap(dirname(__DIR__));

$bridge->run();
