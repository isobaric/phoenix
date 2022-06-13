<?php
/**
 * Date: 2022/6/13 10:15
 * User: YHC
 * Desc:
 */

namespace Application\Models;

use Horseloft\Plodder\DataObject;

class ApiModel extends DataObject
{
    public static function index()
    {
        self::fetch('');
    }
}
