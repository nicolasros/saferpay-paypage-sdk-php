<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Dcc
 * @package Worldline\Saferpay\Common\Fields
 */
class Dcc
{
    /**
     * @Groups("RequestParams")
     * @var PayerAmount
     */
    private $PayerAmount;

    /**
     * @return PayerAmount|null
     */
    public function getPayerAmount(): ?PayerAmount
    {
        return $this->PayerAmount;
    }

    /**
     * @param PayerAmount|null $PayerAmount
     * @return Dcc
     */
    public function setPayerAmount(?PayerAmount $PayerAmount): self
    {
        $this->PayerAmount = $PayerAmount;

        return $this;
    }
}
