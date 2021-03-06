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
     * @var null|string
     */
    private $MaskedNumber;

    /**
     * @Groups("RequestParams")
     * @var null|int
     */
    private $ExpYear;

    /**
     * @Groups("RequestParams")
     * @var null|int
     */
    private $ExpMonth;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $HolderName;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $CountryCode;

    /**
     * @Groups("RequestParams")
     * @var null|string
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
     * @param null|string $MaskedNumber
     * @return Card
     */
    public function setMaskedNumber(?string $MaskedNumber): self
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
     * @param null|int $ExpYear
     * @return Card
     */
    public function setExpYear(?int $ExpYear): self
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
     * @param null|int $ExpMonth
     * @return Card
     */
    public function setExpMonth(?int $ExpMonth): self
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
     * @param null|string $HolderName
     * @return Card
     */
    public function setHolderName(?string $HolderName): self
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
     * @param null|string $CountryCode
     * @return Card
     */
    public function setCountryCode(?string $CountryCode): self
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
     * @param null|string $HashValue
     * @return Card
     */
    public function setHashValue(?string $HashValue): self
    {
        $this->HashValue = $HashValue;

        return $this;
    }
}
