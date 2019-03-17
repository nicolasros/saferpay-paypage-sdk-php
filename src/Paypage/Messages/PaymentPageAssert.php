<?php

namespace Worldline\Saferpay\Paypage\Messages;

use Symfony\Component\Serializer\Annotation\Groups;
use Worldline\Saferpay\Common\Fields\RequestHeader;
use Worldline\Saferpay\Common\Messages\SaferPayMessage;

/**
 * Class PaymentPageAssert
 * @package Worldline\Saferpay\Paypage\Messages
 */
class PaymentPageAssert extends SaferPayMessage
{
    /**
     * @var string
     */
    private $serviceUrl = "api/Payment/v1/PaymentPage/Assert";

    /**
     * @Groups("RequestParams")
     * @var RequestHeader
     */
    public $RequestHeader;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    public $Token;

    /**
     * @return string
     */
    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    /**
     * @return RequestHeader
     */
    public function getRequestHeader(): RequestHeader
    {
        return $this->RequestHeader;
    }

    /**
     * @param RequestHeader $RequestHeader
     * @return PaymentPageAssert
     */
    public function setRequestHeader(RequestHeader $RequestHeader): self
    {
        $this->RequestHeader = $RequestHeader;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return PaymentPageAssert
     */
    public function setToken(string $Token): self
    {
        $this->Token = $Token;
        return $this;
    }

}