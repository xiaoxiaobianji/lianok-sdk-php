<?php declare(strict_types=1);

namespace lianok\bank\request;

use lianok\core\entity\AbstractDockingRequest;

class ApiHlBankCheckoutGetRequest extends AbstractDockingRequest{

    /**
     * 提现单号
     */
    public  $orderNo;

    public function getResource(): string
    {
        return "api.hl.bank.checkout.get";
    }
}