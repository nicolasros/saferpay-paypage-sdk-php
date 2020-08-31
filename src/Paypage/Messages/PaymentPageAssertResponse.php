<?php

namespace Worldline\Saferpay\Paypage\Messages;

use Worldline\Saferpay\Common\Fields\Dcc;
use Worldline\Saferpay\Common\Fields\Liability;
use Worldline\Saferpay\Common\Fields\Payer;
use Worldline\Saferpay\Common\Fields\PaymentMeans;
use Worldline\Saferpay\Common\Fields\RegistrationResult;
use Worldline\Saferpay\Common\Fields\ResponseHeader;
use Worldline\Saferpay\Common\Fields\Transaction;

/**
 * Class PaymentPageAssertResponse
 * @package Worldline\Saferpay\Paypage\Messages
 */
class PaymentPageAssertResponse
{
    /**
     * @Groups("RequestParams")
     * @var null|ResponseHeader
     */
    private $ResponseHeader;

    /**
     * @Groups("RequestParams")
     * @var null|Transaction
     */
    private $Transaction;

    /**
     * @Groups("RequestParams")
     * @var null|PaymentMeans
     */
    private $PaymentMeans;

    /**
     * @Groups("RequestParams")
     * @var null|Payer
     */
    private $Payer;

    /**
     * @Groups("RequestParams")
     * @var null|RegistrationResult
     */
    private $RegistrationResult;

    /**
     * @Groups("RequestParams")
     * @var null|Liability
     */
    private $Liability;

    /**
     * @Groups("RequestParams")
     * @var null|Dcc
     */
    private $Dcc;

    /**
     * @var integer|null
     */
    private $StatusCode;

    /**
     * @var string|null
     */
    private $Error;

    /**
     * @return ResponseHeader|null
     */
    public function getResponseHeader(): ?ResponseHeader
    {
        return $this->ResponseHeader;
    }

    /**
     * @param ResponseHeader|null $ResponseHeader
     * @return PaymentPageAssertResponse
     */
    public function setResponseHeader(?ResponseHeader $ResponseHeader): self
    {
        $this->ResponseHeader = $ResponseHeader;

        return $this;
    }

    /**
     * @return Transaction|null
     */
    public function getTransaction(): ?Transaction
    {
        return $this->Transaction;
    }

    /**
     * @param Transaction|null $Transaction
     * @return PaymentPageAssertResponse
     */
    public function setTransaction(?Transaction $Transaction): self
    {
        $this->Transaction = $Transaction;

        return $this;
    }

    /**
     * @return PaymentMeans|null
     */
    public function getPaymentMeans(): ?PaymentMeans
    {
        return $this->PaymentMeans;
    }

    /**
     * @param PaymentMeans|null $PaymentMeans
     * @return PaymentPageAssertResponse
     */
    public function setPaymentMeans(?PaymentMeans $PaymentMeans): self
    {
        $this->PaymentMeans = $PaymentMeans;

        return $this;
    }

    /**
     * @return Payer|null
     */
    public function getPayer(): ?Payer
    {
        return $this->Payer;
    }

    /**
     * @param Payer|null $Payer
     * @return PaymentPageAssertResponse
     */
    public function setPayer(?Payer $Payer): self
    {
        $this->Payer = $Payer;

        return $this;
    }

    /**
     * @return RegistrationResult|null
     */
    public function getRegistrationResult(): ?RegistrationResult
    {
        return $this->RegistrationResult;
    }

    /**
     * @param RegistrationResult|null $RegistrationResult
     * @return PaymentPageAssertResponse
     */
    public function setRegistrationResult(?RegistrationResult $RegistrationResult): self
    {
        $this->RegistrationResult = $RegistrationResult;

        return $this;
    }

    /**
     * @return Liability|null
     */
    public function getLiability(): ?Liability
    {
        return $this->Liability;
    }

    /**
     * @param Liability|null $Liability
     * @return PaymentPageAssertResponse
     */
    public function setLiability(?Liability $Liability): self
    {
        $this->Liability = $Liability;

        return $this;
    }

    /**
     * @return Dcc|null
     */
    public function getDcc(): ?Dcc
    {
        return $this->Dcc;
    }

    /**
     * @param Dcc|null $Dcc
     * @return PaymentPageAssertResponse
     */
    public function setDcc(?Dcc $Dcc): self
    {
        $this->Dcc = $Dcc;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getStatusCode(): ?int
    {
        return $this->StatusCode;
    }

    /**
     * @param int|null $StatusCode
     * @return PaymentPageAssertResponse
     */
    public function setStatusCode(?int $StatusCode): PaymentPageAssertResponse
    {
        $this->StatusCode = $StatusCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->Error;
    }

    /**
     * @param string|null $Error
     * @return PaymentPageAssertResponse
     */
    public function setError(?string $Error): PaymentPageAssertResponse
    {
        $this->Error = $Error;
        return $this;
    }

}
