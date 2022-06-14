<?php
/*
 * ------------------------------------------------------------------
 * horseloft项目的数据库配置文件
 * ------------------------------------------------------------------
 *
 */

return [
    'default' => 'default',

    'connections' => [
        /**
         * 从env配置文件读取
         */
        'default' => env('database'),

        /**
         *  连接名称 default
         */
        'mysql' => [
            'host' => 'host.docker.internal',
            'port' => 3306,
            'database' => 'horseloft',
            'username' => 'root',
            'password' => '123456',
            'driver' => 'mysql'
        ],

        /**
         * 读写分离 / 多数据源配置
         */
        'read_and_write' => [
            'host' => 'host.docker.internal',
            'port' => 3306,
            'database' => 'horseloft',
            'username' => 'root',
            'password' => '123456',
            'driver' => 'mysql',
            'read' => [
                'host' => 'host.docker.internal',
                'port' => 3306,
                'database' => 'horseloft',
                'username' => 'root',
                'password' => '123456',
                'driver' => 'mysql',
                [
                    'host' => 'host.docker.internal',
                    'port' => 3306,
                    'database' => 'horseloft',
                    'username' => 'root',
                    'password' => '123456',
                    'driver' => 'mysql',
                ],
                [
                    'host' => 'host.docker.internal',
                    'port' => 3306,
                    'database' => 'horseloft',
                    'username' => 'root',
                    'password' => '123456',
                    'driver' => 'mysql',
                ]
            ],
            'write' => [
                'host' => 'host.docker.internal',
                'port' => 3307,
                'database' => 'horseloft',
                'username' => 'root',
                'password' => '123456',
                'driver' => 'mysql',
                [
                    'host' => 'host.docker.internal',
                    'port' => 3307,
                    'database' => 'horseloft',
                    'username' => 'root',
                    'password' => '123456',
                    'driver' => 'mysql',
                ],
                [
                    'host' => 'host.docker.internal',
                    'port' => 3307,
                    'database' => 'horseloft',
                    'username' => 'root',
                    'password' => '123456',
                    'driver' => 'mysql',
                ]
            ]
        ]
    ],
];
