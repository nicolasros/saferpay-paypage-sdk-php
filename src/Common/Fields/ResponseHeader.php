<?php

namespace Worldline\Saferpay\Common\Fields;


use Worldline\Saferpay\Common\Fields\RequestHeader;

/**
 * Class ResponseHeader
 * @package Worldline\Saferpay\Common\Fields
 */
class ResponseHeader
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $RequestId;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $SpecVersion;

    /**
     * @return int|null
     */
    public function getRequestId(): ?int
    {
        return $this->RequestId;
    }

    /**
     * @param string|null $RequestId
     * @return $this
     */
    public function setRequestId(?string $RequestId): self
    {
        $this->RequestId = (int)$RequestId;

        return $this;
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
}