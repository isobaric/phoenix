<?php

namespace Application\Exceptions;

use Horseloft\Phalanx\Builder\Request;
use Horseloft\Phalanx\Multiple\Exceptions;
use Horseloft\Phalanx\ShutdownException;
use Throwable;

class Runtime extends Exceptions
{
    /**
     * 默认异常处理类
     *
     * 当前类中必须存在handle()方法
     *
     * handle()方法的第一个参数：Horseloft\Bridge\Builder\Request $request
     *
     * handle()方法的第二个参数：\Throwable $e
     *
     * handle()方法的返回值将作为本次接口的响应值输出，返回值为Null则不输出任何内容
     *
     * @param Request $request
     * @param Throwable $e
     *
     * @return mixed
     */
    public function handle(Request $request, Throwable $e)
    {
        if ($e instanceof ShutdownException && env('debug')) {
            return $e->getMessage();
        }
        return "Default Exception: " . $e->getMessage() . json_encode($request->all());
    }
}
