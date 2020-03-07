<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class BillingAddress
 * @package Worldline\Saferpay\Common\Fields
 */
class BillingAddress
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $FirstName;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $LastName;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $DateOfBirth;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Company;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Gender;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $LegalForm;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Street;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Street2;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Zip;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $City;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $CountrySubdivisionCode;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $CountryCode;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Phone;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Email;

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    /**
     * @param string|null $FirstName
     * @return $this
     */
    public function setFirstName(?string $FirstName): self
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    /**
     * @param string|null $LastName
     * @return $this
     */
    public function setLastName(?string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->DateOfBirth;
    }

    /**
     * @param string|null $DateOfBirth
     * @return $this
     */
    public function setDateOfBirth(?string $DateOfBirth): self
    {
        $this->DateOfBirth = $DateOfBirth;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->Company;
    }

    /**
     * @param string|null $Company
     * @return $this
     */
    public function setCompany(?string $Company): self
    {
        $this->Company = $Company;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->Gender;
    }

    /**
     * @param string|null $Gender
     * @return $this
     */
    public function setGender(?string $Gender): self
    {
        $this->Gender = $Gender;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLegalForm(): ?string
    {
        return $this->LegalForm;
    }

    /**
     * @param string|null $LegalForm
     * @return $this
     */
    public function setLegalForm(?string $LegalForm): self
    {
        $this->LegalForm = $LegalForm;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->Street;
    }

    /**
     * @param string|null $Street
     * @return $this
     */
    public function setStreet(?string $Street): self
    {
        $this->Street = $Street;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreet2(): ?string
    {
        return $this->Street2;
    }

    /**
     * @param string|null $Street2
     * @return $this
     */
    public function setStreet2(?string $Street2): self
    {
        $this->Street2 = $Street2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getZip(): ?string
    {
        return $this->Zip;
    }

    /**
     * @param string|null $Zip
     * @return $this
     */
    public function setZip(?string $Zip): self
    {
        $this->Zip = $Zip;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->City;
    }

    /**
     * @param string|null $City
     * @return $this
     */
    public function setCity(?string $City): self
    {
        $this->City = $City;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountrySubdivisionCode(): ?string
    {
        return $this->CountrySubdivisionCode;
    }

    /**
     * @param string|null $CountrySubdivisionCode
     * @return $this
     */
    public function setCountrySubdivisionCode(?string $CountrySubdivisionCode): self
    {
        $this->CountrySubdivisionCode = $CountrySubdivisionCode;

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
     * @param string|null $CountryCode
     * @return $this
     */
    public function setCountryCode(?string $CountryCode): self
    {
        $this->CountryCode = $CountryCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    /**
     * @param string|null $Phone
     * @return $this
     */
    public function setPhone(?string $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * @param string|null $Email
     * @return $this
     */
    public function setEmail(?string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }
}
