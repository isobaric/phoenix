<?php

use Horseloft\Phalanx\Builder\Route;
use Application\Controllers\IndexController;

Route::group(['prefix' => '/index', 'interceptor' => ['auth']], function () {

    Route::post('/', [IndexController::class, 'index']);

    Route::get('/', [IndexController::class, 'index']);
});

Route::get('/', [IndexController::class, 'index'], 'auth');

Route::post('/', [IndexController::class, 'index'], 'auth');
