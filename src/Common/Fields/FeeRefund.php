<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class FeeRefund
 * @package Worldline\Saferpay\Common\Fields
 */
class FeeRefund
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Value;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $CurrencyCode;

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }

    /**
     * @param null|string $Value
     * @return FeeRefund
     */
    public function setValue(?string $Value): self
    {
        $this->Value = $Value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->CurrencyCode;
    }

    /**
     * @param null|string $CurrencyCode
     * @return FeeRefund
     */
    public function setCurrencyCode(?string $CurrencyCode): self
    {
        $this->CurrencyCode = $CurrencyCode;

        return $this;
    }
}
