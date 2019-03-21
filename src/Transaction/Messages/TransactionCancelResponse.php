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
     * @var ResponseHeader
     */
    private $ResponseHeader;

    /**
     * @var string
     */
    private $TransactionId;

    /**
     * @var string
     */
    private $OrderId;

    /**
     * @var \DateTime
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
     * @param string $TransactionId
     * @return TransactionCancelResponse
     */
    public function setTransactionId(string $TransactionId): self
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
     * @param string $OrderId
     * @return TransactionCancelResponse
     */
    public function setOrderId(string $OrderId): self
    {
        $this->OrderId = $OrderId;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return TransactionCancelResponse
     */
    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }
}
