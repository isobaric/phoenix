<?php

return [
    /**
     * key=>value格式，value为callable类型，value不接受参数，参数需要在命令行中传递
     *
     * value格式：
     * key => [Application\Controllers\IndexController::class, 'index']
     * key => ['Application\Controller\IndexController', 'index']
     * key => 'Application\Controllers\IndexController::index'
     *
     * 不带参数：
     * php command test
     *
     * 带参数：参数之间以空格分割
     * php command test name=tom,lily age=12 file=old=new
     */
    'test' => [Application\Controllers\IndexController::class, 'index']
];
