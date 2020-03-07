<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Amount
 * @package Worldline\Saferpay\Common\Fields
 */
class Amount
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
     * @param string|null $Value
     * @return $this
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
     * @param string|null $CurrencyCode
     * @return $this
     */
    public function setCurrencyCode(?string $CurrencyCode): self
    {
        $this->CurrencyCode = $CurrencyCode;

        return $this;
    }
}
