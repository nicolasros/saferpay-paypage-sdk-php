<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class PaymentMeans
 * @package Worldline\Saferpay\Common\Fields
 */
class PaymentMeans
{
    /**
     * @Groups("RequestParams")
     * @var null|Brand
     */
    private $Brand;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $DisplayText;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Wallet;

    /**
     * @Groups("RequestParams")
     * @var null|Card
     */
    private $Card;

    /**
     * @Groups("RequestParams")
     * @var null|BankAccount
     */
    private $BankAccount;

    /**
     * @Groups("RequestParams")
     * @var null|Twint
     */
    private $Twint;
    
    /**
     * @return Brand|null
     */
    public function getBrand(): ?Brand
    {
        return $this->Brand;
    }

    /**
     * @param Brand|null $Brand
     * @return PaymentMeans
     */
    public function setBrand(?Brand $Brand): self
    {
        $this->Brand = $Brand;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDisplayText(): ?string
    {
        return $this->DisplayText;
    }

    /**
     * @param null|string $DisplayText
     * @return PaymentMeans
     */
    public function setDisplayText(?string $DisplayText): self
    {
        $this->DisplayText = $DisplayText;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWallet(): ?string
    {
        return $this->Wallet;
    }

    /**
     * @param null|string $Wallet
     * @return PaymentMeans
     */
    public function setWallet(?string $Wallet): self
    {
        $this->Wallet = $Wallet;

        return $this;
    }

    /**
     * @return Card|null
     */
    public function getCard(): ?Card
    {
        return $this->Card;
    }

    /**
     * @param Card|null $Card
     * @return PaymentMeans
     */
    public function setCard(?Card $Card): self
    {
        $this->Card = $Card;

        return $this;
    }

    /**
     * @return BankAccount|null
     */
    public function getBankAccount(): ?BankAccount
    {
        return $this->BankAccount;
    }

    /**
     * @param BankAccount|null $BankAccount
     * @return PaymentMeans
     */
    public function setBankAccount(?BankAccount $BankAccount): self
    {
        $this->BankAccount = $BankAccount;

        return $this;
    }

    /**
     * @return Twint|null
     */
    public function getTwint(): ?Twint
    {
        return $this->Twint;
    }

    /**
     * @param Twint|null $Twint
     * @return PaymentMeans
     */
    public function setTwint(?Twint $Twint): self
    {
        $this->Twint = $Twint;

        return $this;
    }
}
