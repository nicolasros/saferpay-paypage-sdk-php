<?php

namespace Worldline\Saferpay\Paypage\Messages;

use Worldline\Saferpay\Common\Fields\ResponseHeader;

/**
 * Class PaypageInitialisationResponse
 * @package Worldline\Saferpay\Paypage\Messages
 */
class PaypageInitialisationResponse
{
    /**
     * @Groups("RequestParams")
     * @var null|ResponseHeader
     */
    private $ResponseHeader;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Token;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Expiration;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $RedirectUrl;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Error;

    /**
     * @Groups("RequestParams")
     * @var null|integer
     */
    private $StatusCode;

    /**
     * @return ResponseHeader|null
     */
    public function getResponseHeader(): ?ResponseHeader
    {
        return $this->ResponseHeader;
    }

    /**
     * @param ResponseHeader|null $ResponseHeader
     * @return $this
     */
    public function setResponseHeader(?ResponseHeader $ResponseHeader): self
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
     * @return $this
     */
    public function setToken(?string $Token): self
    {
        $this->Token = $Token;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpiration(): ?string
    {
        return \DateTime::createFromFormat("Y-m-d\TH:i:s.u+P", $this->Expiration);
    }

    /**
     * @param string|null $Expiration
     * @return $this
     */
    public function setExpiration(?string $Expiration): self
    {
        $this->Expiration = $Expiration;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->RedirectUrl;
    }

    /**
     * @param string|null $RedirectUrl
     * @return $this
     */
    public function setRedirectUrl(?string $RedirectUrl): self
    {
        $this->RedirectUrl = $RedirectUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->Error;
    }

    /**
     * @param string|null $Error
     * @return $this
     */
    public function setError(?string $Error): self
    {
        $this->Error = $Error;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getStatusCode(): ?int
    {
        return $this->StatusCode;
    }

    /**
     * @param int|null $StatusCode
     * @return $this
     */
    public function setStatusCode(?int $StatusCode): self
    {
        $this->StatusCode = $StatusCode;

        return $this;
    }
}
