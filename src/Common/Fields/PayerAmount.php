<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class PayerAmount
 * @package Worldline\Saferpay\Common\Fields
 */
class PayerAmount
{
    /**
     * @var string
     */
    private $Value;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $CurrencyCode;

    /**
     * @Groups("RequestParams")
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return PayerAmount
     */
    public function setValue(string $Value): self
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
     * @param string $CurrencyCode
     * @return PayerAmount
     */
    public function setCurrencyCode(string $CurrencyCode): self
    {
        $this->CurrencyCode = $CurrencyCode;

        return $this;
    }
}
