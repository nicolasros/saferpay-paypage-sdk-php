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
     * @var Payee
     */
    private $Payee;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $ReasonForTransfer;

    /**
     * @Groups("RequestParams")
     * @var \DateTime
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
     * @param string $ReasonForTransfer
     * @return Invoice
     */
    public function setReasonForTransfer(string $ReasonForTransfer): self
    {
        $this->ReasonForTransfer = $ReasonForTransfer;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getDueDate(): ?\DateTimeInterface
    {
        // TODO make all getDate function return a string.
        return $this->DueDate;
    }

    /**
     * @param string $DueDate
     * @return Invoice
     */
    public function setDueDate(string $DueDate): self
    {
        $DateDT = \DateTime::createFromFormat("Y-m-d\TH:i:s.u+P", $DueDate);
        $this->DueDate = $DateDT;

        return $this;
    }
}
