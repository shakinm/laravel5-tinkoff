<?php
/**
 * Created by PhpStorm.
 * User: shakin
 * Date: 21.12.17
 * Time: 18:18
 */

namespace Shakinm\Tinkoff;

require_once 'TinkoffMerchantAPI.php';

class TinkoffService extends \TinkoffMerchantAPI
{

    /**
     * @return bool|string
     */
    public function getStatus() {
        return $this->__get('status');
    }

}