<?php
/**
 * Created by PhpStorm.
 * User: m.shakin@digitalwand.ru
 * Date: 21.12.17
 * Time: 13:13
 */

namespace Shakinm\Tinkoff;


require_once 'TinkoffMerchantAPI.php';

/**
 * Class TinkoffService
 * @package Shakinm\Tinkoff
 */
class TinkoffService
{
    private $tinkoff;

    /**
     * TinkoffService constructor.
     * @param $terminalKey
     * @param $secretKey
     * @param $api_url
     */
    public function __construct($terminalKey, $secretKey, $api_url)
    {
        $this->tinkoff = new \TinkoffMerchantAPI($terminalKey, $secretKey, $api_url);
    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->tinkoff;
    }



}