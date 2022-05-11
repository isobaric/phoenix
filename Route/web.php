<?php

use Horseloft\Phalanx\Builder\Route;

Route::group(['prefix' => 'index', 'namespace' => '', 'interceptor' => ['default']], function () {

    Route::get('index', 'IndexController::index');

    Route::post('', 'IndexController::index');
});

Route::get('/', 'IndexController::index', null, 'default');

Route::post('', 'IndexController::index', null, 'default');

Route::get('/user', 'IndexController::getUserDetail', null, 'default');
