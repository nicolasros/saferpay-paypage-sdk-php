<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Options
 * @package Worldline\Saferpay\Common\Fields
 */
class Options
{
    /**
     * @Groups("RequestParams")
     * @var null|boolean
     */
    private $PreAuth;

    /**
     * @return bool|null
     */
    public function getPreAuth(): ?bool
    {
        return $this->PreAuth;
    }

    /**
     * @param bool|null $PreAuth
     * @return $this
     */
    public function setPreAuth(?bool $PreAuth): self
    {
        $this->PreAuth = $PreAuth;

        return $this;
    }
}
