<?php
/**
 * Created by PhpStorm.
 * User: m.shakin@digitalwand.ru
 * Date: 21.12.17
 * Time: 13:12
 */

namespace Shakinm\Tinkoff;

use Illuminate\Support\Facades\Facade;

/**
 * Class TinkoffFacade
 * @package Shakinm\Tinkoff
 */
class TinkoffFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tinkoff';
    }
}