<?php


namespace Worldline\Saferpay\Transaction\Messages;


use Worldline\Saferpay\Common\Fields\Authentication;
use Worldline\Saferpay\Common\Fields\Payer;
use Worldline\Saferpay\Common\Fields\Payment;
use Worldline\Saferpay\Common\Fields\PaymentMeans;
use Worldline\Saferpay\Common\Fields\RegisterAlias;
use Worldline\Saferpay\Common\Fields\RequestHeader;
use Worldline\Saferpay\Common\Messages\SaferPayMessage;

/**
 * Class TransactionAuthorizeDirect
 * @package Worldline\Saferpay\Transaction\Messages
 */
class TransactionAuthorizeDirect extends SaferPayMessage
{
    /**
     * @var string
     */
    private $serviceUrl = "api/Payment/v1/Transaction/AuthorizeDirect";
    /**
     * @var RequestHeader|null
     */
    private $RequestHeader;
    /**
     * @var string|null
     */
    private $TerminalId;
    /**
     * @var Payment|null
     */
    private $Payment;
    /**
     * @var PaymentMeans|null
     */
    private $PaymentMeans;
    /**
     * @var Authentication|null
     */
    private $Authentication;
    /**
     * @var RegisterAlias|null
     */
    private $RegisterAlias;
    /**
     * @var Payer|null
     */
    private $Payer;

    /**
     * @return string
     */
    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    /**
     * @return RequestHeader|null
     */
    public function getRequestHeader(): ?RequestHeader
    {
        return $this->RequestHeader;
    }

    /**
     * @param RequestHeader|null $RequestHeader
     * @return TransactionAuthorizeDirect
     */
    public function setRequestHeader(?RequestHeader $RequestHeader): TransactionAuthorizeDirect
    {
        $this->RequestHeader = $RequestHeader;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTerminalId(): ?string
    {
        return $this->TerminalId;
    }

    /**
     * @param string|null $TerminalId
     * @return TransactionAuthorizeDirect
     */
    public function setTerminalId(?string $TerminalId): TransactionAuthorizeDirect
    {
        $this->TerminalId = $TerminalId;
        return $this;
    }

    /**
     * @return Payment|null
     */
    public function getPayment(): ?Payment
    {
        return $this->Payment;
    }

    /**
     * @param Payment|null $Payment
     * @return TransactionAuthorizeDirect
     */
    public function setPayment(?Payment $Payment): TransactionAuthorizeDirect
    {
        $this->Payment = $Payment;
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
     * @return TransactionAuthorizeDirect
     */
    public function setPaymentMeans(?PaymentMeans $PaymentMeans): TransactionAuthorizeDirect
    {
        $this->PaymentMeans = $PaymentMeans;
        return $this;
    }

    /**
     * @return Authentication|null
     */
    public function getAuthentication(): ?Authentication
    {
        return $this->Authentication;
    }

    /**
     * @param Authentication|null $Authentication
     * @return TransactionAuthorizeDirect
     */
    public function setAuthentication(?Authentication $Authentication): TransactionAuthorizeDirect
    {
        $this->Authentication = $Authentication;
        return $this;
    }

    /**
     * @return RegisterAlias|null
     */
    public function getRegisterAlias(): ?RegisterAlias
    {
        return $this->RegisterAlias;
    }

    /**
     * @param RegisterAlias|null $RegisterAlias
     * @return TransactionAuthorizeDirect
     */
    public function setRegisterAlias(?RegisterAlias $RegisterAlias): TransactionAuthorizeDirect
    {
        $this->RegisterAlias = $RegisterAlias;
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
     * @return TransactionAuthorizeDirect
     */
    public function setPayer(?Payer $Payer): TransactionAuthorizeDirect
    {
        $this->Payer = $Payer;
        return $this;
    }

}
