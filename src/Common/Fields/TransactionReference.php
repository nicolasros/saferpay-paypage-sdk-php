<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class TransactionReference
 * @package Worldline\Saferpay\Common\Fields
 */
class TransactionReference
{
    /**
     * @var null|string
     */
    private $TransactionId;

    /**
     * @var null|string
     */
    private $OrderId;

    /**
     * @param null|string $TransactionId
     * @return TransactionReference
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
     * @return TransactionReference
     */
    public function setOrderId(?string $OrderId): self
    {
        $this->OrderId = $OrderId;

        return $this;
    }
}
