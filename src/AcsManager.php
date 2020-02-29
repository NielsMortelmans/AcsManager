<?php
/**
 * Created by PhpStorm.
 * User: nmortelmans
 * Date: 29/02/2020
 * Time: 17:09
 */

namespace Nmo\AcsManager;


class AcsManager
{
    public function greet(String $sName): string
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}