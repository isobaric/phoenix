<?php

use Horseloft\Phalanx\Builder\Route;

Route::group(['prefix' => '/index', 'namespace' => '', 'interceptor' => ['Auth']], function () {

    Route::post('/', 'IndexController::index');

    Route::get('/', 'IndexController::index');
});

Route::get('/', 'IndexController::index', null, 'Auth');

Route::post('/', 'IndexController::index', null, 'Auth');
