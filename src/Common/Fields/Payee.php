<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;


/**
 * Class Payee
 * @package Worldline\Saferpay\Common\Fields
 */
class Payee
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $IBAN;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $HolderName;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $BIC;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $BankName;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getIBAN(): ?string
    {
        return $this->IBAN;
    }

    /**
     * @param string $IBAN
     * @return Payee
     */
    public function setIBAN(string $IBAN): self
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
     * @param string $HolderName
     * @return Payee
     */
    public function setHolderName(string $HolderName): self
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
     * @param string $BIC
     * @return Payee
     */
    public function setBIC(string $BIC): self
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
     * @param string $BankName
     * @return Payee
     */
    public function setBankName(string $BankName): self
    {
        $this->BankName = $BankName;

        return $this;
    }
}
