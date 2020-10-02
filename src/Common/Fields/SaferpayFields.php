<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class SaferpayFields
 * @package Worldline\Saferpay\Common\Fields
 */
class SaferpayFields
{
    /**
     * @var string|null
     */
    private $Token;

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->Token;
    }

    /**
     * @param string|null $Token
     * @return SaferpayFields
     */
    public function setToken(?string $Token): SaferpayFields
    {
        $this->Token = $Token;
        return $this;
    }


}