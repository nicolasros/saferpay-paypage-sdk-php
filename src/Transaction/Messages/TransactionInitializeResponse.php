<?php


namespace Worldline\Saferpay\Transaction\Messages;


use Worldline\Saferpay\Common\Fields\Redirect;
use Worldline\Saferpay\Common\Fields\ResponseHeader;

/**
 * Class TransactionInitializeResponse
 * @package Worldline\Saferpay\Transaction\Messages
 */
class TransactionInitializeResponse
{
    /**
     * @var ResponseHeader|null
     */
    private $ResponseHeader;
    /**
     * @var string|null
     */
    private $Token;
    /**
     * @var string|null
     */
    private $Expiration;
    /**
     * @var bool|null
     */
    private $LiabilityShift;
    /**
     * @var bool|null
     */
    private $RedirectionRequired;
    /**
     * @var Redirect|null
     */
    private $Redirect;

    /**
     * @return ResponseHeader|null
     */
    public function getResponseHeader(): ?ResponseHeader
    {
        return $this->ResponseHeader;
    }

    /**
     * @param ResponseHeader|null $ResponseHeader
     * @return TransactionInitializeResponse
     */
    public function setResponseHeader(?ResponseHeader $ResponseHeader): TransactionInitializeResponse
    {
        $this->ResponseHeader = $ResponseHeader;
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
     * @return TransactionInitializeResponse
     */
    public function setToken(?string $Token): TransactionInitializeResponse
    {
        $this->Token = $Token;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpiration(): ?string
    {
        return $this->Expiration;
    }

    /**
     * @param string|null $Expiration
     * @return TransactionInitializeResponse
     */
    public function setExpiration(?string $Expiration): TransactionInitializeResponse
    {
        $this->Expiration = $Expiration;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLiabilityShift(): ?bool
    {
        return $this->LiabilityShift;
    }

    /**
     * @param bool|null $LiabilityShift
     * @return TransactionInitializeResponse
     */
    public function setLiabilityShift(?bool $LiabilityShift): TransactionInitializeResponse
    {
        $this->LiabilityShift = $LiabilityShift;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRedirectionRequired(): ?bool
    {
        return $this->RedirectionRequired;
    }

    /**
     * @param bool|null $RedirectionRequired
     * @return TransactionInitializeResponse
     */
    public function setRedirectionRequired(?bool $RedirectionRequired): TransactionInitializeResponse
    {
        $this->RedirectionRequired = $RedirectionRequired;
        return $this;
    }

    /**
     * @return Redirect|null
     */
    public function getRedirect(): ?Redirect
    {
        return $this->Redirect;
    }

    /**
     * @param Redirect|null $Redirect
     * @return TransactionInitializeResponse
     */
    public function setRedirect(?Redirect $Redirect): TransactionInitializeResponse
    {
        $this->Redirect = $Redirect;
        return $this;
    }

}