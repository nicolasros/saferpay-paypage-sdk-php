<?php

namespace Worldline\Saferpay\Transaction\Messages;


use Worldline\Saferpay\Common\Fields\ResponseHeader;

/**
 * Class TransactionCancelResponse
 * @package Worldline\Saferpay\Transaction\Messages
 */
class TransactionCancelResponse
{
    /**
     * @var null|ResponseHeader
     */
    private $ResponseHeader;

    /**
     * @var null|string
     */
    private $TransactionId;

    /**
     * @var null|string
     */
    private $OrderId;

    /**
     * @var null|string
     */
    private $Date;

    /**
     * @return ResponseHeader|null
     */
    public function getResponseHeader(): ?ResponseHeader
    {
        return $this->ResponseHeader;
    }

    /**
     * @param ResponseHeader|null $ResponseHeader
     * @return TransactionCancelResponse
     */
    public function setResponseHeader(?ResponseHeader $ResponseHeader): self
    {
        $this->ResponseHeader = $ResponseHeader;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->TransactionId;
    }

    /**
     * @param null|string $TransactionId
     * @return TransactionCancelResponse
     */
    public function setTransactionId(?string $TransactionId): self
    {
        $this->TransactionId = $TransactionId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->OrderId;
    }

    /**
     * @param null|string $OrderId
     * @return TransactionCancelResponse
     */
    public function setOrderId(?string $OrderId): self
    {
        $this->OrderId = $OrderId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return \DateTime::createFromFormat("Y-m-d\TH:i:s.u+P", $this->Date);
    }

    /**
     * @param null|string $Date
     * @return TransactionCancelResponse
     */
    public function setDate(?string $Date): self
    {
        $this->Date = $Date;

        return $this;
    }
}
