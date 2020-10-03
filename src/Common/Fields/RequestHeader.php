<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class RequestHeader
 * @package Worldline\Saferpay\Common\Fields
 */
class RequestHeader
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $SpecVersion;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $CustomerId;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $RequestId;

    /**
     * @Groups("RequestParams")
     * @var null|integer
     */
    private $RetryIndicator;

    /**
     * @Groups("RequestParams")
     * @var null|ClientInfo
     */
    private $ClientInfo;

    /**
     * RequestHeader constructor.
     */
    public function __construct()
    {
        $microtime = explode(' ', microtime());
        $microtime[0] = $microtime[0] * 1000000;
        $this->setRequestId($microtime[1].$microtime[0]);
    }

    /**
     * @return string|null
     */
    public function getSpecVersion(): ?string
    {
        return $this->SpecVersion;
    }

    /**
     * @param string|null $SpecVersion
     * @return $this
     */
    public function setSpecVersion(?string $SpecVersion): self
    {
        $this->SpecVersion = $SpecVersion;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->CustomerId;
    }

    /**
     * @param string|null $CustomerId
     * @return $this
     */
    public function setCustomerId(?string $CustomerId): self
    {
        $this->CustomerId = $CustomerId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequestId(): ?string
    {
        return $this->RequestId;
    }

    /**
     * @param string|null $RequestId
     * @return $this
     */
    public function setRequestId(?string $RequestId): self
    {
        $this->RequestId = $RequestId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRetryIndicator(): ?int
    {
        return $this->RetryIndicator;
    }

    /**
     * @param int|null $RetryIndicator
     * @return $this
     */
    public function setRetryIndicator(?int $RetryIndicator): self
    {
        $this->RetryIndicator = $RetryIndicator;

        return $this;
    }

    /**
     * @return ClientInfo|null
     */
    public function getClientInfo(): ?ClientInfo
    {
        return $this->ClientInfo;
    }

    /**
     * @param ClientInfo|null $ClientInfo
     * @return $this
     */
    public function setClientInfo(?ClientInfo $ClientInfo): self
    {
        $this->ClientInfo = $ClientInfo;

        return $this;
    }
}
