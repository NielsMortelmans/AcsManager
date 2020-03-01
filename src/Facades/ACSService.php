<?php
/**
 * Created by PhpStorm.
 * User: nmortelmans
 * Date: 29/02/2020
 * Time: 18:10
 */

namespace Nmo\AcsManager\Facades;


use Illuminate\Support\Facades\Facade;

class ACSService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'acsservice';
    }
}