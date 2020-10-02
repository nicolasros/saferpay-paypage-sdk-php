<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class Redirect
 * @package Worldline\Saferpay\Common\Fields
 */
class Redirect
{
    /**
     * @var string|null
     */
    private $RedirectUrl;
    /**
     * @var bool|null
     */
    private $PaymentMeansRequired;

    /**
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->RedirectUrl;
    }

    /**
     * @param string|null $RedirectUrl
     * @return Redirect
     */
    public function setRedirectUrl(?string $RedirectUrl): Redirect
    {
        $this->RedirectUrl = $RedirectUrl;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPaymentMeansRequired(): ?bool
    {
        return $this->PaymentMeansRequired;
    }

    /**
     * @param bool|null $PaymentMeansRequired
     * @return Redirect
     */
    public function setPaymentMeansRequired(?bool $PaymentMeansRequired): Redirect
    {
        $this->PaymentMeansRequired = $PaymentMeansRequired;
        return $this;
    }

}