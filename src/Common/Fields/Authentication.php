<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class Authentication
 * @package Worldline\Saferpay\Common\Fields
 */
class Authentication
{
    /**
     * @var string|null
     */
    private $Exemption;
    /**
     * @var string|null
     */
    private $ThreeDsChallenge;

    /**
     * @return string|null
     */
    public function getExemption(): ?string
    {
        return $this->Exemption;
    }

    /**
     * @param string|null $Exemption
     * @return Authentication
     */
    public function setExemption(?string $Exemption): self
    {
        $this->Exemption = $Exemption;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThreeDsChallenge(): ?string
    {
        return $this->ThreeDsChallenge;
    }

    /**
     * @param string|null $ThreeDsChallenge
     * @return Authentication
     */
    public function setThreeDsChallenge(?string $ThreeDsChallenge): self
    {
        $this->ThreeDsChallenge = $ThreeDsChallenge;
        return $this;
    }


}