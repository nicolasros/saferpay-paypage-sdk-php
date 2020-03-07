<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;


/**
 * Class Invoice
 * @package Worldline\Saferpay\Common\Fields
 */
class Invoice
{
    /**
     * @Groups("RequestParams")
     * @var null|Payee
     */
    private $Payee;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $ReasonForTransfer;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $DueDate;

    /**
     * @return Payee|null
     */
    public function getPayee(): ?Payee
    {
        return $this->Payee;
    }

    /**
     * @param Payee|null $Payee
     * @return Invoice
     */
    public function setPayee(?Payee $Payee): self
    {
        $this->Payee = $Payee;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReasonForTransfer(): ?string
    {
        return $this->ReasonForTransfer;
    }

    /**
     * @param null|string $ReasonForTransfer
     * @return Invoice
     */
    public function setReasonForTransfer(?string $ReasonForTransfer): self
    {
        $this->ReasonForTransfer = $ReasonForTransfer;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return \DateTime::createFromFormat("Y-m-d\TH:i:s.u+P", $this->DueDate);
    }

    /**
     * @param null|string $DueDate
     * @return Invoice
     */
    public function setDueDate(?string $DueDate): self
    {
        $this->DueDate = $DueDate;

        return $this;
    }
}
