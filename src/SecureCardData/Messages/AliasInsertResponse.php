<?php


namespace Worldline\Saferpay\SecureCardData\Messages;


use Worldline\Saferpay\Common\Fields\Redirect;
use Worldline\Saferpay\Common\Fields\ResponseHeader;

/**
 * Class AliasInsertResponse
 * @package Worldline\Saferpay\SecureCardData\Messages
 */
class AliasInsertResponse
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
    private $RedirectRequired;
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
     * @return AliasInsertResponse
     */
    public function setResponseHeader(?ResponseHeader $ResponseHeader): AliasInsertResponse
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
     * @return AliasInsertResponse
     */
    public function setToken(?string $Token): AliasInsertResponse
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
     * @return AliasInsertResponse
     */
    public function setExpiration(?string $Expiration): AliasInsertResponse
    {
        $this->Expiration = $Expiration;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRedirectRequired(): ?bool
    {
        return $this->RedirectRequired;
    }

    /**
     * @param bool|null $RedirectRequired
     * @return AliasInsertResponse
     */
    public function setRedirectRequired(?bool $RedirectRequired): AliasInsertResponse
    {
        $this->RedirectRequired = $RedirectRequired;
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
     * @return AliasInsertResponse
     */
    public function setRedirect(?Redirect $Redirect): AliasInsertResponse
    {
        $this->Redirect = $Redirect;
        return $this;
    }

}