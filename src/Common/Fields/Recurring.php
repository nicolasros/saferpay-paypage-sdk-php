<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class Recurring
{
    /**
     * @Groups("RequestParams")
     * @var boolean
     */
    private $Initial;

    public function getInitial(): ?bool
    {
        return $this->Initial;
    }

    public function setInitial(bool $Initial): self
    {
        $this->Initial = $Initial;

        return $this;
    }
}
