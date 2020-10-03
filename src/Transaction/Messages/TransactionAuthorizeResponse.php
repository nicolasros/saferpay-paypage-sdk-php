<?php


namespace Worldline\Saferpay\Transaction\Messages;


use Worldline\Saferpay\Common\Fields\Dcc;
use Worldline\Saferpay\Common\Fields\FraudPrevention;
use Worldline\Saferpay\Common\Fields\Liability;
use Worldline\Saferpay\Common\Fields\MastercardIssuerInstallments;
use Worldline\Saferpay\Common\Fields\Payer;
use Worldline\Saferpay\Common\Fields\PaymentMeans;
use Worldline\Saferpay\Common\Fields\RegistrationResult;
use Worldline\Saferpay\Common\Fields\ResponseHeader;
use Worldline\Saferpay\Common\Fields\Transaction;

/**
 * Class TransactionAuthorizeResponse
 * @package Worldline\Saferpay\Transaction\Messages
 */
class TransactionAuthorizeResponse
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
     * @var Liability|null
     */
    private $Liability;
    /**
     * @var Dcc|null
     */
    private $Dcc;
    /**
     * @var FraudPrevention|null
     */private $FraudPrevention;
    /**
     * @var string|null
     */private $Result;

    /**
     * @return ResponseHeader|null
     */
    public function getResponseHeader(): ?ResponseHeader
    {
        return $this->ResponseHeader;
    }

    /**
     * @param ResponseHeader|null $ResponseHeader
     * @return TransactionAuthorizeResponse
     */
    public function setResponseHeader(?ResponseHeader $ResponseHeader): TransactionAuthorizeResponse
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
     * @return TransactionAuthorizeResponse
     */
    public function setTransaction(?Transaction $Transaction): TransactionAuthorizeResponse
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
     * @return TransactionAuthorizeResponse
     */
    public function setPaymentMeans(?PaymentMeans $PaymentMeans): TransactionAuthorizeResponse
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
     * @return TransactionAuthorizeResponse
     */
    public function setPayer(?Payer $Payer): TransactionAuthorizeResponse
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
     * @return TransactionAuthorizeResponse
     */
    public function setRegistrationResult(?RegistrationResult $RegistrationResult): TransactionAuthorizeResponse
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
     * @return TransactionAuthorizeResponse
     */
    public function setMastercardIssuerInstallments(?MastercardIssuerInstallments $MastercardIssuerInstallments): TransactionAuthorizeResponse
    {
        $this->MastercardIssuerInstallments = $MastercardIssuerInstallments;
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
     * @return TransactionAuthorizeResponse
     */
    public function setLiability(?Liability $Liability): TransactionAuthorizeResponse
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
     * @return TransactionAuthorizeResponse
     */
    public function setDcc(?Dcc $Dcc): TransactionAuthorizeResponse
    {
        $this->Dcc = $Dcc;
        return $this;
    }

    /**
     * @return FraudPrevention|null
     */
    public function getFraudPrevention(): ?FraudPrevention
    {
        return $this->FraudPrevention;
    }

    /**
     * @param FraudPrevention|null $FraudPrevention
     * @return TransactionAuthorizeResponse
     */
    public function setFraudPrevention(?FraudPrevention $FraudPrevention): TransactionAuthorizeResponse
    {
        $this->FraudPrevention = $FraudPrevention;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->Result;
    }

    /**
     * @param string|null $Result
     * @return TransactionAuthorizeResponse
     */
    public function setResult(?string $Result): TransactionAuthorizeResponse
    {
        $this->Result = $Result;
        return $this;
    }

}