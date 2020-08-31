<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class Ideal
 * @package Worldline\Saferpay\Common\Fields
 */
class Ideal
{
    /**
     * @var string|null
     */
    private $IssuerId;

    /**
     * @return string|null
     */
    public function getIssuerId(): ?string
    {
        return $this->IssuerId;
    }

    /**
     * @param string|null $IssuerId
     * @return Ideal
     */
    public function setIssuerId(?string $IssuerId): self
    {
        $this->IssuerId = $IssuerId;
        return $this;
    }

}