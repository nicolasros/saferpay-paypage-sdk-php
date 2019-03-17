<?php

namespace Worldline\Saferpay\Common\Fields;


use Worldline\Saferpay\Common\Fields\RequestHeader;

class ResponseHeader
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $RequestId;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $SpecVersion;

    public function getRequestId(): ?int
    {
        return $this->RequestId;
    }

    public function setRequestId(string $RequestId): self
    {
        $this->RequestId = (int)$RequestId;

        return $this;
    }

    public function getSpecVersion(): ?string
    {
        return $this->SpecVersion;
    }

    public function setSpecVersion(string $SpecVersion): self
    {
        $this->SpecVersion = $SpecVersion;

        return $this;
    }
}