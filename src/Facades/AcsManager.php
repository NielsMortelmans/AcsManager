<?php
/**
 * Created by PhpStorm.
 * User: nmortelmans
 * Date: 29/02/2020
 * Time: 18:57
 */

namespace Nmo\AcsManager\Facades;


use Illuminate\Support\Facades\Facade;

class AcsManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'acsmanager';
    }
}