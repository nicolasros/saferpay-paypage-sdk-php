<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class Alipay
 * @package Worldline\Saferpay\Common\Fields
 */
class Alipay
{
    /**
     * @var string|null
     */
    private $LocalWallet;

    /**
     * @return string|null
     */
    public function getLocalWallet(): ?string
    {
        return $this->LocalWallet;
    }

    /**
     * @param string|null $LocalWallet
     * @return Alipay
     */
    public function setLocalWallet(?string $LocalWallet): self
    {
        $this->LocalWallet = $LocalWallet;
        return $this;
    }


}