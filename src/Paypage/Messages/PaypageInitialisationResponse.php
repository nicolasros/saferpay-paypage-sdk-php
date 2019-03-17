<?php

namespace Worldline\Saferpay\Paypage\Messages;

use Worldline\Saferpay\Common\Fields\ResponseHeader;

class PaypageInitialisationResponse
{
    /**
     * @Groups("RequestParams")
     * @var ResponseHeader
     */
    private $ResponseHeader;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Token;

    /**
     * @Groups("RequestParams")
     * @var \DateTimeInterface
     */
    private $Expiration;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $RedirectUrl;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Error;

    /**
     * @Groups("RequestParams")
     * @var integer
     */
    private $StatusCode;

    public function getResponseHeader(): ?ResponseHeader
    {
        return $this->ResponseHeader;
    }

    public function setResponseHeader(ResponseHeader $ResponseHeader): self
    {
        $this->ResponseHeader = $ResponseHeader;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->Token;
    }

    public function setToken(string $Token): self
    {
        $this->Token = $Token;

        return $this;
    }

    public function getExpiration(): ?\DateTimeInterface
    {
        return $this->Expiration;
    }

    public function setExpiration(string $Expiration): self
    {
        $expirationDT = \DateTime::createFromFormat("Y-m-d\TH:i:s.u+P", $Expiration);
        $this->Expiration = $expirationDT;

        return $this;
    }

    public function getRedirectUrl(): ?string
    {
        return $this->RedirectUrl;
    }

    public function setRedirectUrl(string $RedirectUrl): self
    {
        $this->RedirectUrl = $RedirectUrl;

        return $this;
    }

    public function getError(): ?string
    {
        return $this->Error;
    }

    public function setError(?string $Error): self
    {
        $this->Error = $Error;

        return $this;
    }

    public function getStatusCode(): ?int
    {
        return $this->StatusCode;
    }

    public function setStatusCode(int $StatusCode): self
    {
        $this->StatusCode = $StatusCode;

        return $this;
    }
}
