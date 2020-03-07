<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Error
 * @package Worldline\Saferpay\Common\Fields
 */
class Error
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $ErrorName;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $ErrorMessage;

    /**
     * @return string|null
     */
    public function getErrorName(): ?string
    {
        return $this->ErrorName;
    }

    /**
     * @param null|string $ErrorName
     * @return Error
     */
    public function setErrorName(?string $ErrorName): self
    {
        $this->ErrorName = $ErrorName;

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
     * @param null|string $ErrorMessage
     * @return Error
     */
    public function setErrorMessage(?string $ErrorMessage): self
    {
        $this->ErrorMessage = $ErrorMessage;

        return $this;
    }

}
