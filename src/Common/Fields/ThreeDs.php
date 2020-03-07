<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ThreeDs
 * @package Worldline\Saferpay\Common\Fields
 */
class ThreeDs
{
    /**
     * @Groups("RequestParams")
     * @var null|bool
     */
    private $Authenticated;

    /**
     * @Groups("RequestParams")
     * @var null|bool
     */
    private $LiabilityShift;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Xid;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $VerificationValue;

    /**
     * @Groups("RequestParams")
     * @return bool|null
     */
    public function getAuthenticated(): ?bool
    {
        return $this->Authenticated;
    }

    /**
     * @param bool $Authenticated
     * @return ThreeDs
     */
    public function setAuthenticated(?bool $Authenticated): self
    {
        $this->Authenticated = $Authenticated;

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
     * @param null|bool $LiabilityShift
     * @return ThreeDs
     */
    public function setLiabilityShift(?bool $LiabilityShift): self
    {
        $this->LiabilityShift = $LiabilityShift;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getXid(): ?string
    {
        return $this->Xid;
    }

    /**
     * @param null|string $Xid
     * @return ThreeDs
     */
    public function setXid(?string $Xid): self
    {
        $this->Xid = $Xid;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVerificationValue(): ?string
    {
        return $this->VerificationValue;
    }

    /**
     * @param null|string $VerificationValue
     * @return ThreeDs
     */
    public function setVerificationValue(?string $VerificationValue): self
    {
        $this->VerificationValue = $VerificationValue;

        return $this;
    }
}
