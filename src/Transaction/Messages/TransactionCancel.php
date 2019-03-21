<?php

namespace Worldline\Saferpay\Transaction\Messages;

use Symfony\Component\Serializer\Annotation\Groups;
use Worldline\Saferpay\Common\Fields\RequestHeader;
use Worldline\Saferpay\Common\Fields\TransactionReference;
use Worldline\Saferpay\Common\Messages\SaferPayMessage;


/**
 * Class TransactionCancel
 * @package Worldline\Saferpay\Transaction\Messages
 */
class TransactionCancel extends SaferPayMessage
{
    /**
     * @var string
     */
    private $serviceUrl = "api/Payment/v1/Transaction/Cancel";

    /**
     * @Groups("RequestParams")
     * @var RequestHeader
     */
    private $RequestHeader;

    /**
     * @Groups("RequestParams")
     * @var TransactionReference
     */
    private $TransactionReference;

    /**
     * @return string
     */
    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    /**
     * @return RequestHeader|null
     */
    public function getRequestHeader(): ?RequestHeader
    {
        return $this->RequestHeader;
    }

    /**
     * @param RequestHeader|null $RequestHeader
     * @return TransactionCapture
     */
    public function setRequestHeader(?RequestHeader $RequestHeader): self
    {
        $this->RequestHeader = $RequestHeader;

        return $this;
    }

    /**
     * @return TransactionReference|null
     */
    public function getTransactionReference(): ?TransactionReference
    {
        return $this->TransactionReference;
    }

    /**
     * @param TransactionReference|null $TransactionReference
     * @return TransactionCapture
     */
    public function setTransactionReference(?TransactionReference $TransactionReference): self
    {
        $this->TransactionReference = $TransactionReference;

        return $this;
    }
}
