<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class CardForm
 * @package Worldline\Saferpay\Common\Fields
 */
class CardForm
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $HolderName;
    /**
     * @var string|null
     */
    private $VerificationCode;

    /**
     * @return string|null
     */
    public function getHolderName(): ?string
    {
        return $this->HolderName;
    }

    /**
     * @param string|null $HolderName
     * @return $this
     */
    public function setHolderName(?string $HolderName): self
    {
        $this->HolderName = $HolderName;

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
     * @return CardForm
     */
    public function setVerificationCode(?string $VerificationCode): CardForm
    {
        $this->VerificationCode = $VerificationCode;
        return $this;
    }

}
