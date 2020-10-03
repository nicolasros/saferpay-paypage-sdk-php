<?php


namespace Worldline\Saferpay\Transaction\Messages;


use Worldline\Saferpay\Common\Fields\RegisterAlias;
use Worldline\Saferpay\Common\Fields\RequestHeader;
use Worldline\Saferpay\Common\Messages\SaferPayMessage;

/**
 * Class TransactionAuthorize
 * @package Worldline\Saferpay\Transaction\Messages
 */
class TransactionAuthorize extends SaferPayMessage
{
    /**
     * @var string
     */
    private $serviceUrl = "api/Payment/v1/Transaction/Authorize";
    /**
     * @var RequestHeader|null
     */
    private $RequestHeader;
    /**
     * @var string|null
     */
    private $Token;
    /**
     * @var string|null
     */
    private $Contdition;
    /**
     * @var string|null
     */
    private $VerificationCode;
    /**
     * @var RegisterAlias|null
     */
    private $RegisterAlias;

    /**
     * @return string
     */
    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    /**
     * @return RequestHeader|null
     */
    public function getRequestHeader(): ?RequestHeader
    {
        return $this->RequestHeader;
    }

    /**
     * @param RequestHeader|null $RequestHeader
     * @return TransactionAuthorize
     */
    public function setRequestHeader(?RequestHeader $RequestHeader): TransactionAuthorize
    {
        $this->RequestHeader = $RequestHeader;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->Token;
    }

    /**
     * @param string|null $Token
     * @return TransactionAuthorize
     */
    public function setToken(?string $Token): TransactionAuthorize
    {
        $this->Token = $Token;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContdition(): ?string
    {
        return $this->Contdition;
    }

    /**
     * @param string|null $Contdition
     * @return TransactionAuthorize
     */
    public function setContdition(?string $Contdition): TransactionAuthorize
    {
        $this->Contdition = $Contdition;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVerificationCode(): ?string
    {
        return $this->VerificationCode;
    }

    /**
     * @param string|null $VerificationCode
     * @return TransactionAuthorize
     */
    public function setVerificationCode(?string $VerificationCode): TransactionAuthorize
    {
        $this->VerificationCode = $VerificationCode;
        return $this;
    }

    /**
     * @return RegisterAlias|null
     */
    public function getRegisterAlias(): ?RegisterAlias
    {
        return $this->RegisterAlias;
    }

    /**
     * @param RegisterAlias|null $RegisterAlias
     * @return TransactionAuthorize
     */
    public function setRegisterAlias(?RegisterAlias $RegisterAlias): TransactionAuthorize
    {
        $this->RegisterAlias = $RegisterAlias;
        return $this;
    }

}