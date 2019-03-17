<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class Payment
{
    /**
     * @Groups("RequestParams")
     * @var Amount
     */
    private $Amount;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $OrderId;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Description;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $PayerNote;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $MandateId;

    /**
     * @Groups("RequestParams")
     * @var Options
     */
    private $Options;

    /**
     * @Groups("RequestParams")
     * @var Recurring
     */
    private $Recurring;

    /**
     * @Groups("RequestParams")
     * @var Installment
     */
    private $Installment;

    public function getAmount(): ?Amount
    {
        return $this->Amount;
    }

    public function setAmount(Amount $Amount): self
    {
        $this->Amount = $Amount;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->OrderId;
    }

    public function setOrderId(?string $OrderId): self
    {
        $this->OrderId = $OrderId;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPayerNote(): ?string
    {
        return $this->PayerNote;
    }

    public function setPayerNote(?string $PayerNote): self
    {
        $this->PayerNote = $PayerNote;

        return $this;
    }

    public function getMandateId(): ?string
    {
        return $this->MandateId;
    }

    public function setMandateId(?string $MandateId): self
    {
        $this->MandateId = $MandateId;

        return $this;
    }

    public function getOptions(): ?Options
    {
        return $this->Options;
    }

    public function setOptions(?Options $Options): self
    {
        $this->Options = $Options;

        return $this;
    }

    public function getRecurring(): ?Recurring
    {
        return $this->Recurring;
    }

    public function setRecurring(?Recurring $Recurring): self
    {
        $this->Recurring = $Recurring;

        return $this;
    }

    public function getInstallment(): ?Installment
    {
        return $this->Installment;
    }

    public function setInstallment(?Installment $Installment): self
    {
        $this->Installment = $Installment;

        return $this;
    }
}
