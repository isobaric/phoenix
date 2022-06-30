<?php

namespace Application\Controllers;

use Horseloft\Phalanx\Builder\Request;

/**
 * ------------------------------------------------
 * 控制器中的方法必须是静态方法
 * ------------------------------------------------
 *
 * Class DemoController
 * @package Application\Controller
 */
class IndexController
{
    public static function index(Request $request)
    {
        return 'horseloft' . json_encode($request->all());
    }
}
