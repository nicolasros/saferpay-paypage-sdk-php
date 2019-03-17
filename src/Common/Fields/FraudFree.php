<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class FraudFree
 * @package Worldline\Saferpay\Common\Fields
 */
class FraudFree
{
    /**
     * @Groups("RequestParams")
     * @var bool
     */
    private $LiabilityShift;

    /**
     * @Groups("RequestParams")
     * @var float
     */
    private $Score;

    /**
     * @Groups("RequestParams")
     * @var array
     */
    private $Investigationpoints;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $ErrorMessage;

    /**
     * @return bool|null
     */
    public function getLiabilityShift(): ?bool
    {
        return $this->LiabilityShift;
    }

    /**
     * @param bool $LiabilityShift
     * @return FraudFree
     */
    public function setLiabilityShift(bool $LiabilityShift): self
    {
        $this->LiabilityShift = $LiabilityShift;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getScore(): ?float
    {
        return $this->Score;
    }

    /**
     * @param float $Score
     * @return FraudFree
     */
    public function setScore(float $Score): self
    {
        $this->Score = $Score;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getInvestigationpoints(): ?array
    {
        return $this->Investigationpoints;
    }

    /**
     * @param array $Investigationpoints
     * @return FraudFree
     */
    public function setInvestigationpoints(array $Investigationpoints): self
    {
        $this->Investigationpoints = $Investigationpoints;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return FraudFree
     */
    public function setErrorMessage(string $ErrorMessage): self
    {
        $this->ErrorMessage = $ErrorMessage;

        return $this;
    }
}
