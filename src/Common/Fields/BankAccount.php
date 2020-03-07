<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class BankAccount
 * @package Worldline\Saferpay\Common\Fields
 */
class BankAccount
{
    /**
     * @var null|string
     */
    private $IBAN;

    /**
     * @var null|string
     */
    private $HolderName;

    /**
     * @var null|string
     */
    private $BIC;

    /**
     * @var null|string
     */
    private $BankName;

    /**
     * @var null|string
     */
    private $CountryCode;


    /**
     * @return string|null
     */
    public function getIBAN(): ?string
    {
        return $this->IBAN;
    }

    /**
     * @param null|string $IBAN
     * @return BankAccount
     */
    public function setIBAN(?string $IBAN): self
    {
        $this->IBAN = $IBAN;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderName(): ?string
    {
        return $this->HolderName;
    }

    /**
     * @param null|string $HolderName
     * @return BankAccount
     */
    public function setHolderName(?string $HolderName): self
    {
        $this->HolderName = $HolderName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBIC(): ?string
    {
        return $this->BIC;
    }

    /**
     * @param null|string $BIC
     * @return BankAccount
     */
    public function setBIC(?string $BIC): self
    {
        $this->BIC = $BIC;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->BankName;
    }

    /**
     * @param null|string $BankName
     * @return BankAccount
     */
    public function setBankName(?string $BankName): self
    {
        $this->BankName = $BankName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }

    /**
     * @param null|string $CountryCode
     * @return BankAccount
     */
    public function setCountryCode(?string $CountryCode): self
    {
        $this->CountryCode = $CountryCode;

        return $this;
    }
}
