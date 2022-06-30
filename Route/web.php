<?php

use Horseloft\Phalanx\Builder\Route;

Route::group(['prefix' => 'index', 'namespace' => '', 'interceptor' => ['default']], function () {

    Route::post('', 'IndexController::index');
});

Route::get('/', 'IndexController::index', null, 'default');
