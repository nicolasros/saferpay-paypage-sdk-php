<?php


namespace Worldline\Saferpay\Transaction\Messages;


use Worldline\Saferpay\Common\Fields\MastercardIssuerInstallments;
use Worldline\Saferpay\Common\Fields\Payer;
use Worldline\Saferpay\Common\Fields\PaymentMeans;
use Worldline\Saferpay\Common\Fields\RegistrationResult;
use Worldline\Saferpay\Common\Fields\ResponseHeader;
use Worldline\Saferpay\Common\Fields\Transaction;

/**
 * Class TransactionAuthorizeDirectResponse
 * @package Worldline\Saferpay\Transaction\Messages
 */
class TransactionAuthorizeDirectResponse
{
    /**
     * @var ResponseHeader|null
     */
    private $ResponseHeader;
    /**
     * @var Transaction|null
     */
    private $Transaction;
    /**
     * @var PaymentMeans|null
     */
    private $PaymentMeans;
    /**
     * @var Payer|null
     */
    private $Payer;
    /**
     * @var RegistrationResult|null
     */
    private $RegistrationResult;
    /**
     * @var MastercardIssuerInstallments|null
     */
    private $MastercardIssuerInstallments;

    /**
     * @return ResponseHeader|null
     */
    public function getResponseHeader(): ?ResponseHeader
    {
        return $this->ResponseHeader;
    }

    /**
     * @param ResponseHeader|null $ResponseHeader
     * @return TransactionAuthorizeDirectResponse
     */
    public function setResponseHeader(?ResponseHeader $ResponseHeader): TransactionAuthorizeDirectResponse
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
     * @return TransactionAuthorizeDirectResponse
     */
    public function setTransaction(?Transaction $Transaction): TransactionAuthorizeDirectResponse
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
     * @return TransactionAuthorizeDirectResponse
     */
    public function setPaymentMeans(?PaymentMeans $PaymentMeans): TransactionAuthorizeDirectResponse
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
     * @return TransactionAuthorizeDirectResponse
     */
    public function setPayer(?Payer $Payer): TransactionAuthorizeDirectResponse
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
     * @return TransactionAuthorizeDirectResponse
     */
    public function setRegistrationResult(?RegistrationResult $RegistrationResult): TransactionAuthorizeDirectResponse
    {
        $this->RegistrationResult = $RegistrationResult;
        return $this;
    }

    /**
     * @return MastercardIssuerInstallments|null
     */
    public function getMastercardIssuerInstallments(): ?MastercardIssuerInstallments
    {
        return $this->MastercardIssuerInstallments;
    }

    /**
     * @param MastercardIssuerInstallments|null $MastercardIssuerInstallments
     * @return TransactionAuthorizeDirectResponse
     */
    public function setMastercardIssuerInstallments(?MastercardIssuerInstallments $MastercardIssuerInstallments): TransactionAuthorizeDirectResponse
    {
        $this->MastercardIssuerInstallments = $MastercardIssuerInstallments;
        return $this;
    }
}
