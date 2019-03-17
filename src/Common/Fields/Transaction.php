<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Transaction
 * @package Worldline\Saferpay\Common\Fields
 */
class Transaction
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Type;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Status;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Id;

    /**
     * @Groups("RequestParams")
     * @var \DateTimeInterface
     */
    private $Date;

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
    private $AcquirerName;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $AcquirerReference;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $SixTransactionReference;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $ApprovalCode;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return Transaction
     */
    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return Transaction
     */
    public function setStatus(string $Status): self
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * @return string
     */
    public  function getId(): string
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return Transaction
     */
    public function setId(string $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     * @return Transaction
     */
    public function setDate(string $Date): self
    {
        $DateDT = \DateTime::createFromFormat("Y-m-d\TH:i:s.u+P", $Date);
        $this->Date = $DateDT;

        return $this;
    }

    /**
     * @return Amount|null
     */
    public function getAmount(): ?Amount
    {
        return $this->Amount;
    }

    /**
     * @param Amount|null $Amount
     * @return Transaction
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
     * @param string $OrderId
     * @return Transaction
     */
    public function setOrderId(string $OrderId): self
    {
        $this->OrderId = $OrderId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerName(): ?string
    {
        return $this->AcquirerName;
    }

    /**
     * @param string $AcquirerName
     * @return Transaction
     */
    public function setAcquirerName(string $AcquirerName): self
    {
        $this->AcquirerName = $AcquirerName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcquirerReference(): ?string
    {
        return $this->AcquirerReference;
    }

    /**
     * @param string $AcquirerReference
     * @return Transaction
     */
    public function setAcquirerReference(string $AcquirerReference): self
    {
        $this->AcquirerReference = $AcquirerReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSixTransactionReference(): ?string
    {
        return $this->SixTransactionReference;
    }

    /**
     * @param string $SixTransactionReference
     * @return Transaction
     */
    public function setSixTransactionReference(string $SixTransactionReference): self
    {
        $this->SixTransactionReference = $SixTransactionReference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getApprovalCode(): ?string
    {
        return $this->ApprovalCode;
    }

    /**
     * @param string $ApprovalCode
     * @return Transaction
     */
    public function setApprovalCode(string $ApprovalCode): self
    {
        $this->ApprovalCode = $ApprovalCode;

        return $this;
    }
}
