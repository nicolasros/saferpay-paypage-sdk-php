<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class PayerProfile
 * @package Worldline\Saferpay\Common\Fields
 */
class PayerProfile
{
    /**
     * @var bool|null
     */
    private $HasAccount;
    /**
     * @var bool|null
     */
    private $HasPassword;
    /**
     * @var bool|null
     */
    private $PasswordForgotten;
    /**
     * @var string|null
     */
    private $FirstName;
    /**
     * @var string|null
     */
    private $LastName;
    /**
     * @var string|null
     */
    private $Company;
    /**
     * @var string|null
     */
    private $DateOfBirth;
    /**
     * @var string|null
     */
    private $LastLoginDate;
    /**
     * @var string|null
     */
    private $Gender;
    /**
     * @var string|null
     */
    private $CreationDate;
    /**
     * @var string|null
     */
    private $PasswordLastChangeDate;
    /**
     * @var string|null
     */
    private $Email;
    /**
     * @var string|null
     */
    private $SecondaryEmail;
    /**
     * @var Phone|null
     */
    private $Phone;

    /**
     * @return bool|null
     */
    public function getHasAccount(): ?bool
    {
        return $this->HasAccount;
    }

    /**
     * @param bool|null $HasAccount
     * @return PayerProfile
     */
    public function setHasAccount(?bool $HasAccount): PayerProfile
    {
        $this->HasAccount = $HasAccount;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasPassword(): ?bool
    {
        return $this->HasPassword;
    }

    /**
     * @param bool|null $HasPassword
     * @return PayerProfile
     */
    public function setHasPassword(?bool $HasPassword): PayerProfile
    {
        $this->HasPassword = $HasPassword;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPasswordForgotten(): ?bool
    {
        return $this->PasswordForgotten;
    }

    /**
     * @param bool|null $PasswordForgotten
     * @return PayerProfile
     */
    public function setPasswordForgotten(?bool $PasswordForgotten): PayerProfile
    {
        $this->PasswordForgotten = $PasswordForgotten;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    /**
     * @param string|null $FirstName
     * @return PayerProfile
     */
    public function setFirstName(?string $FirstName): PayerProfile
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
     * @return PayerProfile
     */
    public function setLastName(?string $LastName): PayerProfile
    {
        $this->LastName = $LastName;
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
     * @return PayerProfile
     */
    public function setCompany(?string $Company): PayerProfile
    {
        $this->Company = $Company;
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
     * @return PayerProfile
     */
    public function setDateOfBirth(?string $DateOfBirth): PayerProfile
    {
        $this->DateOfBirth = $DateOfBirth;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastLoginDate(): ?string
    {
        return $this->LastLoginDate;
    }

    /**
     * @param string|null $LastLoginDate
     * @return PayerProfile
     */
    public function setLastLoginDate(?string $LastLoginDate): PayerProfile
    {
        $this->LastLoginDate = $LastLoginDate;
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
     * @return PayerProfile
     */
    public function setGender(?string $Gender): PayerProfile
    {
        $this->Gender = $Gender;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->CreationDate;
    }

    /**
     * @param string|null $CreationDate
     * @return PayerProfile
     */
    public function setCreationDate(?string $CreationDate): PayerProfile
    {
        $this->CreationDate = $CreationDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPasswordLastChangeDate(): ?string
    {
        return $this->PasswordLastChangeDate;
    }

    /**
     * @param string|null $PasswordLastChangeDate
     * @return PayerProfile
     */
    public function setPasswordLastChangeDate(?string $PasswordLastChangeDate): PayerProfile
    {
        $this->PasswordLastChangeDate = $PasswordLastChangeDate;
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
     * @return PayerProfile
     */
    public function setEmail(?string $Email): PayerProfile
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSecondaryEmail(): ?string
    {
        return $this->SecondaryEmail;
    }

    /**
     * @param string|null $SecondaryEmail
     * @return PayerProfile
     */
    public function setSecondaryEmail(?string $SecondaryEmail): PayerProfile
    {
        $this->SecondaryEmail = $SecondaryEmail;
        return $this;
    }

    /**
     * @return Phone|null
     */
    public function getPhone(): ?Phone
    {
        return $this->Phone;
    }

    /**
     * @param Phone|null $Phone
     * @return PayerProfile
     */
    public function setPhone(?Phone $Phone): PayerProfile
    {
        $this->Phone = $Phone;
        return $this;
    }


}