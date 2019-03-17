<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class RegistrationResult
 * @package Worldline\Saferpay\Common\Fields
 */
class RegistrationResult
{
    /**
     * @var bool
     */
    private $Success;

    /**
     * @var Alias
     */
    private $Alias;

    /**
     * @var Error
     */
    private $Error;

    /**
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->Success;
    }

    /**
     * @param bool $Success
     * @return RegistrationResult
     */
    public function setSuccess(bool $Success): self
    {
        $this->Success = $Success;

        return $this;
    }

    /**
     * @return Alias|null
     */
    public function getAlias(): ?Alias
    {
        return $this->Alias;
    }

    /**
     * @param Alias|null $Alias
     * @return RegistrationResult
     */
    public function setAlias(?Alias $Alias): self
    {
        $this->Alias = $Alias;

        return $this;
    }

    /**
     * @return Error|null
     */
    public function getError(): ?Error
    {
        return $this->Error;
    }

    /**
     * @param Error|null $Error
     * @return RegistrationResult
     */
    public function setError(?Error $Error): self
    {
        $this->Error = $Error;

        return $this;
    }
}
