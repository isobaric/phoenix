<?php

namespace Application\Runtime;

use Horseloft\Phalanx\Builder\Request;
use Throwable;

class Exception
{
    /**
     * 默认异常处理类
     *
     * 在命名空间 Application\Runtime 中自定义异常处理类
     *   例：RuntimeException::class 捕捉RuntimeException异常并处理
     *   例：LoginException::class 捕捉LoginException异常并处理
     *
     * 当前类中必须存在handle()方法
     *
     * handle()方法必须有两个参数
     *
     * handle()方法的第一个参数：Horseloft\Bridge\Builder\Request $request
     *
     * handle()方法的第二个参数：\Throwable $e
     *
     * handle()方法的返回值将作为本次接口的响应值输出
     *
     * 如果在当前类中出现了异常信息 则当前异常的处理无效，服务将使用默认的异常处理
     *
     * @param Request $request
     * @param Throwable $e
     * @return mixed
     */
    public static function handle(Request $request, Throwable $e)
    {
        return "Default Exception: " . $e->getMessage() . " " . json_encode($request->all());
    }
}
