<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Card
 * @package Worldline\Saferpay\Common\Fields
 */
class Card
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $MaskedNumber;

    /**
     * @Groups("RequestParams")
     * @var int
     */
    private $ExpYear;

    /**
     * @Groups("RequestParams")
     * @var int
     */
    private $ExpMonth;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $HolderName;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $CountryCode;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $HashValue;

    /**
     * @return string|null
     */
    public function getMaskedNumber(): ?string
    {
        return $this->MaskedNumber;
    }

    /**
     * @param string $MaskedNumber
     * @return Card
     */
    public function setMaskedNumber(string $MaskedNumber): self
    {
        $this->MaskedNumber = $MaskedNumber;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getExpYear(): ?int
    {
        return $this->ExpYear;
    }

    /**
     * @param int $ExpYear
     * @return Card
     */
    public function setExpYear(int $ExpYear): self
    {
        $this->ExpYear = $ExpYear;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getExpMonth(): ?int
    {
        return $this->ExpMonth;
    }

    /**
     * @param int $ExpMonth
     * @return Card
     */
    public function setExpMonth(int $ExpMonth): self
    {
        $this->ExpMonth = $ExpMonth;

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
     * @return Card
     */
    public function setHolderName(string $HolderName): self
    {
        $this->HolderName = $HolderName;

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
     * @param string $CountryCode
     * @return Card
     */
    public function setCountryCode(string $CountryCode): self
    {
        $this->CountryCode = $CountryCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHashValue(): ?string
    {
        return $this->HashValue;
    }

    /**
     * @param string $HashValue
     * @return Card
     */
    public function setHashValue(string $HashValue): self
    {
        $this->HashValue = $HashValue;

        return $this;
    }
}
