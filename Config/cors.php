<?php
/*
 * ------------------------------------------------------------------
 * 跨域配置
 * ------------------------------------------------------------------
 *
 */

return [
    //允许的请求网址
    'Access-Control-Allow-Origin: *',

    //允许的请求头信息
    'Access-Control-Allow-Headers: *',

    //允许的请求类型
    'Access-Control-Allow-Methods: GET,POST',

    //允许缓存时长 86,400秒（1天）
    'Access-Control-Max-Age: 86400'
];
