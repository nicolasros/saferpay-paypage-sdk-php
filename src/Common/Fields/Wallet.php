<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class Wallet
 * @package Worldline\Saferpay\Common\Fields
 */
class Wallet
{
    /**
     * @var string|null
     */
    private $Type;
    /**
     * @var array|null
     */
    private $PaymentMethods;
    /**
     * @var bool|null
     */
    private $RequestDeliveryAddress;
    /**
     * @var bool|null
     */
    private $EnableAmountAdjustment;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * @param string|null $Type
     * @return Wallet
     */
    public function setType(?string $Type): Wallet
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getPaymentMethods(): ?array
    {
        return $this->PaymentMethods;
    }

    /**
     * @param array|null $PaymentMethods
     * @return Wallet
     */
    public function setPaymentMethods(?array $PaymentMethods): Wallet
    {
        $this->PaymentMethods = $PaymentMethods;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRequestDeliveryAddress(): ?bool
    {
        return $this->RequestDeliveryAddress;
    }

    /**
     * @param bool|null $RequestDeliveryAddress
     * @return Wallet
     */
    public function setRequestDeliveryAddress(?bool $RequestDeliveryAddress): Wallet
    {
        $this->RequestDeliveryAddress = $RequestDeliveryAddress;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getEnableAmountAdjustment(): ?bool
    {
        return $this->EnableAmountAdjustment;
    }

    /**
     * @param bool|null $EnableAmountAdjustment
     * @return Wallet
     */
    public function setEnableAmountAdjustment(?bool $EnableAmountAdjustment): Wallet
    {
        $this->EnableAmountAdjustment = $EnableAmountAdjustment;
        return $this;
    }

}