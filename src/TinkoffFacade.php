<?php
/**
 * Created by PhpStorm.
 * User: m.shakin@digitalwand.ru
 * Date: 21.12.17
 * Time: 13:12
 */

namespace Shakinm\Tinkoff;

/**
 * Class TinkoffFacade
 * @package Shakinm\Tinkoff
 */
class TinkoffFacade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tinkoff';
    }
}