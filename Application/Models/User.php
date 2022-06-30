<?php

namespace Application\Models;

use Horseloft\Plodder\Reservoir;

class UserModel extends Reservoir
{
    public static $connection = 'default';

    public static $table = 'user';

    /**
     * 查询一条数据记录
     *
     * @param int $id
     *
     * @return array
     */
    public static function getUserById(int $id): array
    {
        return self::select()->where(['id' => $id])->first();
    }
}
