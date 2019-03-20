<?php

namespace Worldline\Saferpay\Paypage\Messages;

use Symfony\Component\Serializer\Annotation\Groups;
use Worldline\Saferpay\Common\Fields\Invoice;
use Worldline\Saferpay\Common\Fields\ResponseHeader;

/**
 * Class TransactionCaptureResponse
 * @package Worldline\Saferpay\Paypage\Messages
 */
class TransactionCaptureResponse
{
    /**
     * @var ResponseHeader
     */
    private $ResponseHeader;

    /**
     * @var string
     */
    private $CaptureId;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var \DateTime
     */
    private $Date;

    /**
     * @var Invoice
     */
    private $Invoice;

    /**
     * @return ResponseHeader|null
     */
    public function getResponseHeader(): ?ResponseHeader
    {
        return $this->ResponseHeader;
    }

    /**
     * @param ResponseHeader|null $ResponseHeader
     * @return TransactionCaptureResponse
     */
    public function setResponseHeader(?ResponseHeader $ResponseHeader): self
    {
        $this->ResponseHeader = $ResponseHeader;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaptureId(): ?string
    {
        return $this->CaptureId;
    }

    /**
     * @param string $CaptureId
     * @return TransactionCaptureResponse
     */
    public function setCaptureId(string $CaptureId): self
    {
        $this->CaptureId = $CaptureId;

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
     * @return TransactionCaptureResponse
     */
    public function setStatus(string $Status): self
    {
        $this->Status = $Status;

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
     * @return TransactionCaptureResponse
     */
    public function setDate(string $Date): self
    {
        $DateDT = \DateTime::createFromFormat("Y-m-d\TH:i:s.u+P", $Date);
        $this->Date = $DateDT;

        return $this;
    }

    /**
     * @return Invoice|null
     */
    public function getInvoice(): ?Invoice
    {
        return $this->Invoice;
    }

    /**
     * @param Invoice|null $Invoice
     * @return TransactionCaptureResponse
     */
    public function setInvoice(?Invoice $Invoice): self
    {
        $this->Invoice = $Invoice;

        return $this;
    }
}
