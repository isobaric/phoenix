<?php
// 启动命令：php crontab

return [
    'test' => [
        'command' => '*/1 * * * *',
        'callback' => [Application\Controllers\IndexController::class, 'index'],
        'args' => ['user' => 'Tom']
    ]
];
