<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class CardForm
{
    /**
     * @Groups("RequestParams")
     * @var boolean
     */
    private $HolderName;

    public function getHolderName(): ?bool
    {
        return $this->HolderName;
    }

    public function setHolderName(?bool $HolderName): self
    {
        $this->HolderName = $HolderName;

        return $this;
    }
}
