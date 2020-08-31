<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class PaymentMethodsOptions
 * @package Worldline\Saferpay\Common\Fields
 */
class PaymentMethodsOptions
{
    /**
     * @var Alipay|null
     */
    private $Alipay;
    /**
     * @var Ideal|null
     */
    private $Ideal;

    /**
     * @return Alipay|null
     */
    public function getAlipay(): ?Alipay
    {
        return $this->Alipay;
    }

    /**
     * @param Alipay|null $Alipay
     * @return PaymentMethodsOptions
     */
    public function setAlipay(?Alipay $Alipay): self
    {
        $this->Alipay = $Alipay;
        return $this;
    }

    /**
     * @return Ideal|null
     */
    public function getIdeal(): ?Ideal
    {
        return $this->Ideal;
    }

    /**
     * @param Ideal|null $Ideal
     * @return PaymentMethodsOptions
     */
    public function setIdeal(?Ideal $Ideal): self
    {
        $this->Ideal = $Ideal;
        return $this;
    }


}