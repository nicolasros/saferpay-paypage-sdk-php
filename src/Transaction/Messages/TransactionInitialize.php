<?php


namespace Worldline\Saferpay\Transaction\Messages;


use Worldline\Saferpay\Common\Fields\Authentication;
use Worldline\Saferpay\Common\Fields\CardForm;
use Worldline\Saferpay\Common\Fields\Order;
use Worldline\Saferpay\Common\Fields\Payer;
use Worldline\Saferpay\Common\Fields\Payment;
use Worldline\Saferpay\Common\Fields\PaymentMeans;
use Worldline\Saferpay\Common\Fields\RequestHeader;
use Worldline\Saferpay\Common\Fields\ReturnUrls;
use Worldline\Saferpay\Common\Fields\RiskFactors;
use Worldline\Saferpay\Common\Fields\Styling;
use Worldline\Saferpay\Common\Fields\Wallet;

/**
 * Class TransactionInitialize
 * @package Worldline\Saferpay\Transaction\Messages
 */
class TransactionInitialize
{
    /**
     * @var RequestHeader|null
     */
    private $RequestHeader;
    /**
     * @var string|null
     */
    private $ConfigSet;
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
     * @var Payer|null
     */
    private $Payer;
    /**
     * @var ReturnUrls|null
     */
    private $ReturnUrls;
    /**
     * @var Styling|null
     */
    private $Styling;
    /**
     * @var Wallet|null
     */
    private $Wallet;
    /**
     * @var array|null
     */
    private $PaymentMethods;
    /**
     * @var Order|null
     */
    private $Order;
    /**
     * @var RiskFactors|null
     */
    private $RiskFactors;
    /**
     * @var CardForm|null
     */
    private $CardForm;

    /**
     * @return RequestHeader|null
     */
    public function getRequestHeader(): ?RequestHeader
    {
        return $this->RequestHeader;
    }

    /**
     * @param RequestHeader|null $RequestHeader
     * @return TransactionInitialize
     */
    public function setRequestHeader(?RequestHeader $RequestHeader): TransactionInitialize
    {
        $this->RequestHeader = $RequestHeader;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConfigSet(): ?string
    {
        return $this->ConfigSet;
    }

    /**
     * @param string|null $ConfigSet
     * @return TransactionInitialize
     */
    public function setConfigSet(?string $ConfigSet): TransactionInitialize
    {
        $this->ConfigSet = $ConfigSet;
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
     * @return TransactionInitialize
     */
    public function setTerminalId(?string $TerminalId): TransactionInitialize
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
     * @return TransactionInitialize
     */
    public function setPayment(?Payment $Payment): TransactionInitialize
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
     * @return TransactionInitialize
     */
    public function setPaymentMeans(?PaymentMeans $PaymentMeans): TransactionInitialize
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
     * @return TransactionInitialize
     */
    public function setAuthentication(?Authentication $Authentication): TransactionInitialize
    {
        $this->Authentication = $Authentication;
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
     * @return TransactionInitialize
     */
    public function setPayer(?Payer $Payer): TransactionInitialize
    {
        $this->Payer = $Payer;
        return $this;
    }

    /**
     * @return ReturnUrls|null
     */
    public function getReturnUrls(): ?ReturnUrls
    {
        return $this->ReturnUrls;
    }

    /**
     * @param ReturnUrls|null $ReturnUrls
     * @return TransactionInitialize
     */
    public function setReturnUrls(?ReturnUrls $ReturnUrls): TransactionInitialize
    {
        $this->ReturnUrls = $ReturnUrls;
        return $this;
    }

    /**
     * @return Styling|null
     */
    public function getStyling(): ?Styling
    {
        return $this->Styling;
    }

    /**
     * @param Styling|null $Styling
     * @return TransactionInitialize
     */
    public function setStyling(?Styling $Styling): TransactionInitialize
    {
        $this->Styling = $Styling;
        return $this;
    }

    /**
     * @return Wallet|null
     */
    public function getWallet(): ?Wallet
    {
        return $this->Wallet;
    }

    /**
     * @param Wallet|null $Wallet
     * @return TransactionInitialize
     */
    public function setWallet(?Wallet $Wallet): TransactionInitialize
    {
        $this->Wallet = $Wallet;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getPaymentMethods(): ?array
    {
        return $this->PaymentMethods;
    }

    /**
     * @param array|null $PaymentMethods
     * @return TransactionInitialize
     */
    public function setPaymentMethods(?array $PaymentMethods): TransactionInitialize
    {
        $this->PaymentMethods = $PaymentMethods;
        return $this;
    }

    /**
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->Order;
    }

    /**
     * @param Order|null $Order
     * @return TransactionInitialize
     */
    public function setOrder(?Order $Order): TransactionInitialize
    {
        $this->Order = $Order;
        return $this;
    }

    /**
     * @return RiskFactors|null
     */
    public function getRiskFactors(): ?RiskFactors
    {
        return $this->RiskFactors;
    }

    /**
     * @param RiskFactors|null $RiskFactors
     * @return TransactionInitialize
     */
    public function setRiskFactors(?RiskFactors $RiskFactors): TransactionInitialize
    {
        $this->RiskFactors = $RiskFactors;
        return $this;
    }

    /**
     * @return CardForm|null
     */
    public function getCardForm(): ?CardForm
    {
        return $this->CardForm;
    }

    /**
     * @param CardForm|null $CardForm
     * @return TransactionInitialize
     */
    public function setCardForm(?CardForm $CardForm): TransactionInitialize
    {
        $this->CardForm = $CardForm;
        return $this;
    }


}