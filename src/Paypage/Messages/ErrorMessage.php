<?php

namespace Worldline\Saferpay\Paypage\Messages;

use Worldline\Saferpay\Common\Fields\ResponseHeader;

/**
 * Class ErrorMessage
 * @package Worldline\Saferpay\Paypage\Messages
 */
class ErrorMessage
{
    /**
     * @var ResponseHeader
     */
    private $ResponseHeader;

    /**
     * @var string
     */
    private $Behavior;

    /**
     * @var string
     */
    private $ErrorName;

    /**
     * @var string
     */
    private $ErrorMessage;

    /**
     * @var string
     */
    private $TransactionId;

    /**
     * @var array
     */
    private $ErrorDetail;

    /**
     * @var string
     */
    private $ProcessorName;

    /**
     * @var string
     */
    private $ProcessorResult;

    /**
     * @var string
     */
    private $ProcessorMessage;

    private $StatusCode;

    private $error;

    /**
     * @return RequestHeader|null
     */
    public function getResponseHeader(): ?RequestHeader
    {
        return $this->ResponseHeader;
    }

    /**
     * @param RequestHeader|null $ResponseHeader
     * @return ErrorMessage
     */
    public function setResponseHeader(?RequestHeader $ResponseHeader): self
    {
        $this->ResponseHeader = $ResponseHeader;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBehavior(): ?string
    {
        return $this->Behavior;
    }

    /**
     * @param string $Behavior
     * @return ErrorMessage
     */
    public function setBehavior(string $Behavior): self
    {
        $this->Behavior = $Behavior;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorName(): ?string
    {
        return $this->ErrorName;
    }

    /**
     * @param string $ErrorName
     * @return ErrorMessage
     */
    public function setErrorName(string $ErrorName): self
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
     * @param string $ErrorMessage
     * @return ErrorMessage
     */
    public function setErrorMessage(string $ErrorMessage): self
    {
        $this->ErrorMessage = $ErrorMessage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->TransactionId;
    }

    /**
     * @param string $TransactionId
     * @return ErrorMessage
     */
    public function setTransactionId(string $TransactionId): self
    {
        $this->TransactionId = $TransactionId;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getErrorDetail(): ?array
    {
        return $this->ErrorDetail;
    }

    /**
     * @param array $ErrorDetail
     * @return ErrorMessage
     */
    public function setErrorDetail(array $ErrorDetail): self
    {
        $this->ErrorDetail = $ErrorDetail;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProcessorName(): ?string
    {
        return $this->ProcessorName;
    }

    /**
     * @param string $ProcessorName
     * @return ErrorMessage
     */
    public function setProcessorName(string $ProcessorName): self
    {
        $this->ProcessorName = $ProcessorName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProcessorResult(): ?string
    {
        return $this->ProcessorResult;
    }

    /**
     * @param string $ProcessorResult
     * @return ErrorMessage
     */
    public function setProcessorResult(string $ProcessorResult): self
    {
        $this->ProcessorResult = $ProcessorResult;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProcessorMessage(): ?string
    {
        return $this->ProcessorMessage;
    }

    /**
     * @param string $ProcessorMessage
     * @return ErrorMessage
     */
    public function setProcessorMessage(string $ProcessorMessage): self
    {
        $this->ProcessorMessage = $ProcessorMessage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @param mixed $StatusCode
     * @return ErrorMessage
     */
    public function setStatusCode($StatusCode): self
    {
        $this->StatusCode = $StatusCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     * @return ErrorMessage
     */
    public function setError($error): self
    {
        $this->error = $error;
        return $this;
    }


}
