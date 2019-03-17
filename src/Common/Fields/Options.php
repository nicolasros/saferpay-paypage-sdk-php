<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class Options
{
    /**
     * @Groups("RequestParams")
     * @var boolean
     */
    private $PreAuth;

    public function getPreAuth(): ?bool
    {
        return $this->PreAuth;
    }

    public function setPreAuth(?bool $PreAuth): self
    {
        $this->PreAuth = $PreAuth;

        return $this;
    }
}
