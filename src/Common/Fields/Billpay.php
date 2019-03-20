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
     * @var int
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
     * @param int $DelayInDays
     * @return Billpay
     */
    public function setDelayInDays(int $DelayInDays): self
    {
        $this->DelayInDays = $DelayInDays;

        return $this;
    }
}
