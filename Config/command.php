<?php

return [
    /**
     * key=>value格式，value为callable类型，value不接受参数，参数需要在命令行中传递
     *
     * 不带参数：
     * php command test
     *
     * 带参数：参数之间以空格分割
     * php command test name=tom,lily age=12 file=old=new
     */
    'test' => 'Application\Controllers\IndexController::index',

    /**
     * value的另一种形式
     */
    'other' => [Application\Controllers\IndexController::class, 'index'],
];
