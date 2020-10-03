<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class FraudPrevention
 * @package Worldline\Saferpay\Common\Fields
 */
class FraudPrevention
{
    /**
     * @var string|null
     */
    private $Result;

    /**
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->Result;
    }

    /**
     * @param string|null $Result
     * @return FraudPrevention
     */
    public function setResult(?string $Result): FraudPrevention
    {
        $this->Result = $Result;
        return $this;
    }

}