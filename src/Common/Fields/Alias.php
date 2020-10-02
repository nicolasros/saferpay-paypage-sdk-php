<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Alias
 * @package Worldline\Saferpay\Common\Fields
 */
class Alias
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Id;

    /**
     * @Groups("RequestParams")
     * @var null|int
     */
    private $Lifetime;

    /**
     * @Groups("RequestParams")
     * @var string|null
     */
    private $VerificationCode;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }

    /**
     * @param string|null $Id
     * @return Alias
     */
    public function setId(?string $Id): self
    {
        $this->Id = $Id;
        
        return $this;
    }
    
    /**
     * @return int|null
     */
    public function getLifetime(): ?int
    {
        return $this->Lifetime;
    }

    /**
     * @param int|null $Lifetime
     * @return Alias
     */
    public function setLifetime(?int $Lifetime): self
    {
        $this->Lifetime = $Lifetime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVerificationCode(): ?string
    {
        return $this->VerificationCode;
    }

    /**
     * @param string|null $VerificationCode
     * @return Alias
     */
    public function setVerificationCode(?string $VerificationCode): Alias
    {
        $this->VerificationCode = $VerificationCode;
        return $this;
    }

}
