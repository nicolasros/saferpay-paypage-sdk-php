<?php

namespace Worldline\Saferpay\Paypage\Messages;

use Symfony\Component\Serializer\Annotation\Groups;
use Worldline\Saferpay\Common\Fields\BillingAddressForm;
use Worldline\Saferpay\Common\Fields\CardForm;
use Worldline\Saferpay\Common\Fields\DeliveryAddressForm;
use Worldline\Saferpay\Common\Fields\Notification;
use Worldline\Saferpay\Common\Fields\Payer;
use Worldline\Saferpay\Common\Fields\Payment;
use Worldline\Saferpay\Common\Fields\RegisterAlias;
use Worldline\Saferpay\Common\Fields\RequestHeader;
use Worldline\Saferpay\Common\Fields\ReturnUrls;
use Worldline\Saferpay\Common\Fields\Styling;
use Worldline\Saferpay\Common\Messages\SaferPayMessage;

class PaypageInitialisation extends SaferPayMessage
{
    /**
     * @var string
     */
    private $serviceUrl = "api/Payment/v1/PaymentPage/Initialize";

    /**
     * @Groups("RequestParams")
     * @var RequestHeader
     */
    private $RequestHeader;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $ConfigSet;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $TerminalId;

    /**
     * @Groups("RequestParams")
     * @var Payment
     */
    private $Payment;

    /**
     * @Groups("RequestParams")
     * @var array
     */
    private $PaymentMethods;

    /**
     * @Groups("RequestParams")
     * @var array
     */
    private $Wallets;

    /**
     * @Groups("RequestParams")
     * @var Payer
     */
    private $Payer;

    /**
     * @Groups("RequestParams")
     * @var RegisterAlias
     */
    private $RegisterAlias;

    /**
     * @Groups("RequestParams")
     * @var ReturnUrls
     */
    private $ReturnUrls;

    /**
     * @Groups("RequestParams")
     * @var Notification
     */
    private $Notification;

    /**
     * @Groups("RequestParams")
     * @var Styling
     */
    private $Styling;

    /**
     * @Groups("RequestParams")
     * @var BillingAddressForm
     */
    private $BillingAddressForm;

    /**
     * @Groups("RequestParams")
     * @var DeliveryAddressForm
     */
    private $DeliveryAddressForm;

    /**
     * @Groups("RequestParams")
     * @var CardForm
     */
    private $CardForm;

    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    public function getRequestHeader(): ?RequestHeader
    {
        return $this->RequestHeader;
    }

    public function setRequestHeader(RequestHeader $RequestHeader): self
    {
        $this->RequestHeader = $RequestHeader;

        return $this;
    }

    public function getConfigSet(): ?string
    {
        return $this->ConfigSet;
    }

    public function setConfigSet(?string $ConfigSet): self
    {
        $this->ConfigSet = $ConfigSet;

        return $this;
    }

    public function getTerminalId(): ?string
    {
        return $this->TerminalId;
    }

    public function setTerminalId(string $TerminalId): self
    {
        $this->TerminalId = $TerminalId;

        return $this;
    }

    public function getPayment(): ?Payment
    {
        return $this->Payment;
    }

    public function setPayment(Payment $Payment): self
    {
        $this->Payment = $Payment;

        return $this;
    }

    public function getPaymentMethods(): ?array
    {
        return $this->PaymentMethods;
    }

    public function setPaymentMethods(?array $PaymentMethods): self
    {
        $this->PaymentMethods = $PaymentMethods;

        return $this;
    }

    public function getWallets(): ?array
    {
        return $this->Wallets;
    }

    public function setWallets(?array $Wallets): self
    {
        $this->Wallets = $Wallets;

        return $this;
    }

    public function getPayer(): ?Payer
    {
        return $this->Payer;
    }

    public function setPayer(?Payer $Payer): self
    {
        $this->Payer = $Payer;

        return $this;
    }

    public function getRegisterAlias(): ?RegisterAlias
    {
        return $this->RegisterAlias;
    }

    public function setRegisterAlias(?RegisterAlias $RegisterAlias): self
    {
        $this->RegisterAlias = $RegisterAlias;

        return $this;
    }

    public function getReturnUrls(): ?ReturnUrls
    {
        return $this->ReturnUrls;
    }

    public function setReturnUrls(ReturnUrls $ReturnUrls): self
    {
        $this->ReturnUrls = $ReturnUrls;

        return $this;
    }

    public function getNotification(): ?Notification
    {
        return $this->Notification;
    }

    public function setNotification(?Notification $Notification): self
    {
        $this->Notification = $Notification;

        return $this;
    }

    public function getStyling(): ?Styling
    {
        return $this->Styling;
    }

    public function setStyling(?Styling $Styling): self
    {
        $this->Styling = $Styling;

        return $this;
    }

    public function getBillingAddressForm(): ?BillingAddressForm
    {
        return $this->BillingAddressForm;
    }

    public function setBillingAddressForm(?BillingAddressForm $BillingAddressForm): self
    {
        $this->BillingAddressForm = $BillingAddressForm;

        return $this;
    }

    public function getDeliveryAddressForm(): ?DeliveryAddressForm
    {
        return $this->DeliveryAddressForm;
    }

    public function setDeliveryAddressForm(?DeliveryAddressForm $DeliveryAddressForm): self
    {
        $this->DeliveryAddressForm = $DeliveryAddressForm;

        return $this;
    }

    public function getCardForm(): ?CardForm
    {
        return $this->CardForm;
    }

    public function setCardForm(?CardForm $CardForm): self
    {
        $this->CardForm = $CardForm;

        return $this;
    }
}
