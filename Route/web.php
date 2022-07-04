<?php

use Horseloft\Phalanx\Builder\Route;

Route::group(['prefix' => '/index', 'namespace' => '', 'interceptor' => ['Auth', 'TokenAuth']], function () {

    Route::post('/', 'IndexController::index');
});

Route::get('/', 'IndexController::index', null, 'Auth');
