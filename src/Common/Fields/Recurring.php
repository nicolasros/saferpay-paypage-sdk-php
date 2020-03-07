<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Recurring
 * @package Worldline\Saferpay\Common\Fields
 */
class Recurring
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
