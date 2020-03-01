<?php
/**
 * Created by PhpStorm.
 * User: nmortelmans
 * Date: 01/03/2020
 * Time: 16:30
 */

namespace Nmo\AcsManager\Facades;


use Illuminate\Support\Facades\Facade;

class ACSTaskService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'acstaskservice';
    }
}