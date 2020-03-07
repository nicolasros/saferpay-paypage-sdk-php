<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Marketplace
 * @package Worldline\Saferpay\Common\Fields
 */
class Marketplace
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $SubmerchantId;

    /**
     * @Groups("RequestParams")
     * @var null|Fee
     */
    private $Fee;

    /**
     * @Groups("RequestParams")
     * @var null|FeeRefund
     */
    private $FeeRefund;

    /**
     * @Groups("RequestParams")
     * @return string|null
     */
    public function getSubmerchantId(): ?string
    {
        return $this->SubmerchantId;
    }

    /**
     * @param null|string $SubmerchantId
     * @return Marketplace
     */
    public function setSubmerchantId(?string $SubmerchantId): self
    {
        $this->SubmerchantId = $SubmerchantId;

        return $this;
    }

    /**
     * @return Fee|null
     */
    public function getFee(): ?Fee
    {
        return $this->Fee;
    }

    /**
     * @param Fee|null $Fee
     * @return Marketplace
     */
    public function setFee(?Fee $Fee): self
    {
        $this->Fee = $Fee;

        return $this;
    }

    /**
     * @return FeeRefund|null
     */
    public function getFeeRefund(): ?FeeRefund
    {
        return $this->FeeRefund;
    }

    /**
     * @param FeeRefund|null $FeeRefund
     * @return Marketplace
     */
    public function setFeeRefund(?FeeRefund $FeeRefund): self
    {
        $this->FeeRefund = $FeeRefund;

        return $this;
    }
}
