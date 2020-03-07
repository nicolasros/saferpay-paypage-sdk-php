<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class DirectDebit
 * @package Worldline\Saferpay\Common\Fields
 */
class DirectDebit
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $MadateId;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $CreditorId;


    /**
     * @return string|null
     */
    public function getMadateId(): ?string
    {
        return $this->MadateId;
    }

    /**
     * @param null|string $MadateId
     * @return DirectDebit
     */
    public function setMadateId(?string $MadateId): self
    {
        $this->MadateId = $MadateId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreditorId(): ?string
    {
        return $this->CreditorId;
    }

    /**
     * @param null|string $CreditorId
     * @return DirectDebit
     */
    public function setCreditorId(?string $CreditorId): self
    {
        $this->CreditorId = $CreditorId;

        return $this;
    }
}
