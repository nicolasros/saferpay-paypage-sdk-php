<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Payment
 * @package Worldline\Saferpay\Common\Fields
 */
class Payment
{
    /**
     * @Groups("RequestParams")
     * @var null|Amount
     */
    private $Amount;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $OrderId;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Description;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $PayerNote;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $MandateId;

    /**
     * @Groups("RequestParams")
     * @var null|Options
     */
    private $Options;

    /**
     * @Groups("RequestParams")
     * @var null|Recurring
     */
    private $Recurring;

    /**
     * @Groups("RequestParams")
     * @var null|Installment
     */
    private $Installment;

    /**
     * @return Amount|null
     */
    public function getAmount(): ?Amount
    {
        return $this->Amount;
    }

    /**
     * @param Amount|null $Amount
     * @return $this
     */
    public function setAmount(?Amount $Amount): self
    {
        $this->Amount = $Amount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->OrderId;
    }

    /**
     * @param string|null $OrderId
     * @return $this
     */
    public function setOrderId(?string $OrderId): self
    {
        $this->OrderId = $OrderId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }

    /**
     * @param string|null $Description
     * @return $this
     */
    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPayerNote(): ?string
    {
        return $this->PayerNote;
    }

    /**
     * @param string|null $PayerNote
     * @return $this
     */
    public function setPayerNote(?string $PayerNote): self
    {
        $this->PayerNote = $PayerNote;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMandateId(): ?string
    {
        return $this->MandateId;
    }

    /**
     * @param string|null $MandateId
     * @return $this
     */
    public function setMandateId(?string $MandateId): self
    {
        $this->MandateId = $MandateId;

        return $this;
    }

    /**
     * @return Options|null
     */
    public function getOptions(): ?Options
    {
        return $this->Options;
    }

    /**
     * @param Options|null $Options
     * @return $this
     */
    public function setOptions(?Options $Options): self
    {
        $this->Options = $Options;

        return $this;
    }

    /**
     * @return Recurring|null
     */
    public function getRecurring(): ?Recurring
    {
        return $this->Recurring;
    }

    /**
     * @param Recurring|null $Recurring
     * @return $this
     */
    public function setRecurring(?Recurring $Recurring): self
    {
        $this->Recurring = $Recurring;

        return $this;
    }

    /**
     * @return Installment|null
     */
    public function getInstallment(): ?Installment
    {
        return $this->Installment;
    }

    /**
     * @param Installment|null $Installment
     * @return $this
     */
    public function setInstallment(?Installment $Installment): self
    {
        $this->Installment = $Installment;

        return $this;
    }
}
