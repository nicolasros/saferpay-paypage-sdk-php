<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class Amount
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Value;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $CurrencyCode;

    public function getValue(): ?string
    {
        return $this->Value;
    }

    public function setValue(string $Value): self
    {
        $this->Value = $Value;

        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->CurrencyCode;
    }

    public function setCurrencyCode(string $CurrencyCode): self
    {
        $this->CurrencyCode = $CurrencyCode;

        return $this;
    }
}
