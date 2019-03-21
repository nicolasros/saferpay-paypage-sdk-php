<?php

namespace Worldline\Saferpay\Transaction\Messages;

use Symfony\Component\Serializer\Annotation\Groups;
use Worldline\Saferpay\Common\Fields\Amount;
use Worldline\Saferpay\Common\Fields\Billpay;
use Worldline\Saferpay\Common\Fields\Marketplace;
use Worldline\Saferpay\Common\Fields\PendingNotification;
use Worldline\Saferpay\Common\Fields\RequestHeader;
use Worldline\Saferpay\Common\Fields\TransactionReference;
use Worldline\Saferpay\Common\Messages\SaferPayMessage;


/**
 * Class TransactionCapture
 * @package Worldline\Saferpay\Transaction\Messages
 */
class TransactionCapture extends SaferPayMessage
{
    /**
     * @var string
     */
    private $serviceUrl = "api/Payment/v1/Transaction/Capture";
    
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
     * @Groups("RequestParams")
     * @var Amount
     */
    private $Amount;

    /**
     * @Groups("RequestParams")
     * @var Billpay
     */
    private $Billpay;

    /**
     * @Groups("RequestParams")
     * @var PendingNotification
     */
    private $PendingNotification;

    /**
     * @Groups("RequestParams")
     * @var Marketplace
     */
    private $Marketplace;

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

    /**
     * @return Amount|null
     */
    public function getAmount(): ?Amount
    {
        return $this->Amount;
    }

    /**
     * @param Amount|null $Amount
     * @return TransactionCapture
     */
    public function setAmount(?Amount $Amount): self
    {
        $this->Amount = $Amount;

        return $this;
    }

    /**
     * @return Billpay|null
     */
    public function getBillpay(): ?Billpay
    {
        return $this->Billpay;
    }

    /**
     * @param Billpay|null $Billpay
     * @return TransactionCapture
     */
    public function setBillpay(?Billpay $Billpay): self
    {
        $this->Billpay = $Billpay;

        return $this;
    }

    /**
     * @return PendingNotification|null
     */
    public function getPendingNotification(): ?PendingNotification
    {
        return $this->PendingNotification;
    }

    /**
     * @param PendingNotification|null $PendingNotification
     * @return TransactionCapture
     */
    public function setPendingNotification(?PendingNotification $PendingNotification): self
    {
        $this->PendingNotification = $PendingNotification;

        return $this;
    }

    /**
     * @return Marketplace|null
     */
    public function getMarketplace(): ?Marketplace
    {
        return $this->Marketplace;
    }

    /**
     * @param Marketplace|null $Marketplace
     * @return TransactionCapture
     */
    public function setMarketplace(?Marketplace $Marketplace): self
    {
        $this->Marketplace = $Marketplace;

        return $this;
    }
}
