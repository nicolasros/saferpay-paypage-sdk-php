<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Liability
 * @package Worldline\Saferpay\Common\Fields
 */
class Liability
{
    /**
     * @Groups("RequestParams")
     * @var bool
     */
    private $LiabilityShift;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $LiabilityEntity;

    /**
     * @Groups("RequestParams")
     * @var ThreeDs
     */
    private $ThreeDs;

    /**
     * @Groups("RequestParams")
     * @var FraudFree
     */
    private $FraudFree;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return bool|null
     */
    public function getLiabilityShift(): ?bool
    {
        return $this->LiabilityShift;
    }

    /**
     * @param bool $LiabilityShift
     * @return Liability
     */
    public function setLiabilityShift(bool $LiabilityShift): self
    {
        $this->LiabilityShift = $LiabilityShift;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLiabilityEntity(): ?string
    {
        return $this->LiabilityEntity;
    }

    /**
     * @param string $LiabilityEntity
     * @return Liability
     */
    public function setLiabilityEntity(string $LiabilityEntity): self
    {
        $this->LiabilityEntity = $LiabilityEntity;

        return $this;
    }

    /**
     * @return ThreeDs|null
     */
    public function getThreeDs(): ?ThreeDs
    {
        return $this->ThreeDs;
    }

    /**
     * @param ThreeDs|null $ThreeDs
     * @return Liability
     */
    public function setThreeDs(?ThreeDs $ThreeDs): self
    {
        $this->ThreeDs = $ThreeDs;

        return $this;
    }

    /**
     * @return FraudFree|null
     */
    public function getFraudFree(): ?FraudFree
    {
        return $this->FraudFree;
    }

    /**
     * @param FraudFree|null $FraudFree
     * @return Liability
     */
    public function setFraudFree(?FraudFree $FraudFree): self
    {
        $this->FraudFree = $FraudFree;

        return $this;
    }
}
