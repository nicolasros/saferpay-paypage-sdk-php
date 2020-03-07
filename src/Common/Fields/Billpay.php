<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Billpay
 * @package Worldline\Saferpay\Common\Fields
 */
class Billpay
{
    /**
     * @Groups("RequestParams")
     * @var null|int
     */
    private $DelayInDays;


    /**
     * @return int|null
     */
    public function getDelayInDays(): ?int
    {
        return $this->DelayInDays;
    }

    /**
     * @param null|int $DelayInDays
     * @return Billpay
     */
    public function setDelayInDays(?int $DelayInDays): self
    {
        $this->DelayInDays = $DelayInDays;

        return $this;
    }
}
