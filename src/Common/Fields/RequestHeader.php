<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class RequestHeader
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $SpecVersion;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $CustomerId;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $RequestId;

    /**
     * @Groups("RequestParams")
     * @var integer
     */
    private $RetryIndicator;

    /**
     * @Groups("RequestParams")
     * @var ClientInfo
     */
    private $ClientInfo;

    public function getSpecVersion(): ?string
    {
        return $this->SpecVersion;
    }

    public function setSpecVersion(string $SpecVersion): self
    {
        $this->SpecVersion = $SpecVersion;

        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->CustomerId;
    }

    public function setCustomerId(string $CustomerId): self
    {
        $this->CustomerId = $CustomerId;

        return $this;
    }

    public function getRequestId(): ?string
    {
        return $this->RequestId;
    }

    public function setRequestId(string $RequestId): self
    {
        $this->RequestId = $RequestId;

        return $this;
    }

    public function getRetryIndicator(): ?int
    {
        return $this->RetryIndicator;
    }

    public function setRetryIndicator(int $RetryIndicator): self
    {
        $this->RetryIndicator = $RetryIndicator;

        return $this;
    }

    public function getClientInfo(): ?ClientInfo
    {
        return $this->ClientInfo;
    }

    public function setClientInfo(?ClientInfo $ClientInfo): self
    {
        $this->ClientInfo = $ClientInfo;

        return $this;
    }
}
