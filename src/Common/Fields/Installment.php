<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Installment
 * @package Worldline\Saferpay\Common\Fields
 */
class Installment
{
    /**
     * @Groups("RequestParams")
     * @var null|boolean
     */
    private $Initial;

    /**
     * @return bool|null
     */
    public function getInitial(): ?bool
    {
        return $this->Initial;
    }

    /**
     * @param bool|null $Initial
     * @return $this
     */
    public function setInitial(?bool $Initial): self
    {
        $this->Initial = $Initial;

        return $this;
    }
}
