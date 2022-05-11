<?php

namespace Application\Controllers;

use Application\Models\UserModel;
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

    public static function getUserDetail(Request $request): array
    {
        $id = 1;
        if (!empty($request->get('id'))) {
            $id = $request->get('id');
        }
        return UserModel::getUserById($id);
    }
}
