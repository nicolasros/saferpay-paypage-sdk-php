<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class BillingAddress
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $FirstName;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $LastName;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $DateOfBirth;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Company;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Gender;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $LegalForm;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Street;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Street2;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Zip;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $City;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $CountrySubdivisionCode;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $CountryCode;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Phone;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Email;

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(?string $FirstName): self
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(?string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getDateOfBirth(): ?string
    {
        return $this->DateOfBirth;
    }

    public function setDateOfBirth(?string $DateOfBirth): self
    {
        $this->DateOfBirth = $DateOfBirth;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->Company;
    }

    public function setCompany(?string $Company): self
    {
        $this->Company = $Company;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->Gender;
    }

    public function setGender(?string $Gender): self
    {
        $this->Gender = $Gender;

        return $this;
    }

    public function getLegalForm(): ?string
    {
        return $this->LegalForm;
    }

    public function setLegalForm(?string $LegalForm): self
    {
        $this->LegalForm = $LegalForm;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->Street;
    }

    public function setStreet(?string $Street): self
    {
        $this->Street = $Street;

        return $this;
    }

    public function getStreet2(): ?string
    {
        return $this->Street2;
    }

    public function setStreet2(?string $Street2): self
    {
        $this->Street2 = $Street2;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->Zip;
    }

    public function setZip(?string $Zip): self
    {
        $this->Zip = $Zip;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(?string $City): self
    {
        $this->City = $City;

        return $this;
    }

    public function getCountrySubdivisionCode(): ?string
    {
        return $this->CountrySubdivisionCode;
    }

    public function setCountrySubdivisionCode(?string $CountrySubdivisionCode): self
    {
        $this->CountrySubdivisionCode = $CountrySubdivisionCode;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }

    public function setCountryCode(?string $CountryCode): self
    {
        $this->CountryCode = $CountryCode;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    public function setPhone(?string $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }
}
