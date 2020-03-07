<?php

namespace Worldline\Saferpay\Transaction\Messages;

use Symfony\Component\Serializer\Annotation\Groups;
use Worldline\Saferpay\Common\Fields\Invoice;
use Worldline\Saferpay\Common\Fields\ResponseHeader;

/**
 * Class TransactionCaptureResponse
 * @package Worldline\Saferpay\Transaction\Messages
 */
class TransactionCaptureResponse
{
    /**
     * @var null|ResponseHeader
     */
    private $ResponseHeader;

    /**
     * @var null|string
     */
    private $CaptureId;

    /**
     * @var null|string
     */
    private $Status;

    /**
     * @var null|string
     */
    private $Date;

    /**
     * @var null|Invoice
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
     * @param null|string $CaptureId
     * @return TransactionCaptureResponse
     */
    public function setCaptureId(?string $CaptureId): self
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
     * @param null|string $Status
     * @return TransactionCaptureResponse
     */
    public function setStatus(?string $Status): self
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return \DateTime::createFromFormat("Y-m-d\TH:i:s.u+P", $this->Date);
    }

    /**
     * @param null|string $Date
     * @return TransactionCaptureResponse
     */
    public function setDate(?string $Date): self
    {
        $this->Date = $Date;

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
