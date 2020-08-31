<?php

namespace Worldline\Saferpay\Paypage\Messages;

use Symfony\Component\Serializer\Annotation\Groups;
use Worldline\Saferpay\Common\Fields\Authentication;
use Worldline\Saferpay\Common\Fields\BillingAddressForm;
use Worldline\Saferpay\Common\Fields\CardForm;
use Worldline\Saferpay\Common\Fields\DeliveryAddressForm;
use Worldline\Saferpay\Common\Fields\Notification;
use Worldline\Saferpay\Common\Fields\Payer;
use Worldline\Saferpay\Common\Fields\Payment;
use Worldline\Saferpay\Common\Fields\PaymentMethodsOptions;
use Worldline\Saferpay\Common\Fields\RegisterAlias;
use Worldline\Saferpay\Common\Fields\RequestHeader;
use Worldline\Saferpay\Common\Fields\ReturnUrls;
use Worldline\Saferpay\Common\Fields\Styling;
use Worldline\Saferpay\Common\Messages\SaferPayMessage;

/**
 * Class PaypageInitialisation
 * @package Worldline\Saferpay\Paypage\Messages
 */
class PaypageInitialisation extends SaferPayMessage
{
    /**
     * @var null|string
     */
    private $serviceUrl = "api/Payment/v1/PaymentPage/Initialize";

    /**
     * @Groups("RequestParams")
     * @var null|RequestHeader
     */
    private $RequestHeader;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $ConfigSet;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $TerminalId;

    /**
     * @Groups("RequestParams")
     * @var null|Payment
     */
    private $Payment;

    /**
     * @Groups("RequestParams")
     * @var null|array
     */
    private $PaymentMethods;

    /**
     * @var PaymentMethodsOptions|null
     */
    private $PaymentMethodOptions;

    /**
     * @var Authentication|null
     */
    private $Authentication;

    /**
     * @Groups("RequestParams")
     * @var null|array
     */
    private $Wallets;

    /**
     * @Groups("RequestParams")
     * @var null|Payer
     */
    private $Payer;

    /**
     * @Groups("RequestParams")
     * @var null|RegisterAlias
     */
    private $RegisterAlias;

    /**
     * @Groups("RequestParams")
     * @var null|ReturnUrls
     */
    private $ReturnUrls;

    /**
     * @Groups("RequestParams")
     * @var null|Notification
     */
    private $Notification;

    /**
     * @Groups("RequestParams")
     * @var null|Styling
     */
    private $Styling;

    /**
     * @Groups("RequestParams")
     * @var null|BillingAddressForm
     */
    private $BillingAddressForm;

    /**
     * @Groups("RequestParams")
     * @var null|DeliveryAddressForm
     */
    private $DeliveryAddressForm;

    /**
     * @Groups("RequestParams")
     * @var null|CardForm
     */
    private $CardForm;

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
     * @return $this
     */
    public function setRequestHeader(?RequestHeader $RequestHeader): self
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
     * @return $this
     */
    public function setConfigSet(?string $ConfigSet): self
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
     * @return $this
     */
    public function setTerminalId(?string $TerminalId): self
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
     * @return $this
     */
    public function setPayment(?Payment $Payment): self
    {
        $this->Payment = $Payment;

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
     * @return $this
     */
    public function setPaymentMethods(?array $PaymentMethods): self
    {
        $this->PaymentMethods = $PaymentMethods;

        return $this;
    }

    /**
     * @return PaymentMethodsOptions|null
     */
    public function getPaymentMethodOptions(): ?PaymentMethodsOptions
    {
        return $this->PaymentMethodOptions;
    }

    /**
     * @param PaymentMethodsOptions|null $PaymentMethodOptions
     * @return PaypageInitialisation
     */
    public function setPaymentMethodOptions(?PaymentMethodsOptions $PaymentMethodOptions): self
    {
        $this->PaymentMethodOptions = $PaymentMethodOptions;
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
     * @return PaypageInitialisation
     */
    public function setAuthentication(?Authentication $Authentication): self
    {
        $this->Authentication = $Authentication;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getWallets(): ?array
    {
        return $this->Wallets;
    }

    /**
     * @param array|null $Wallets
     * @return $this
     */
    public function setWallets(?array $Wallets): self
    {
        $this->Wallets = $Wallets;

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
     * @return $this
     */
    public function setPayer(?Payer $Payer): self
    {
        $this->Payer = $Payer;

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
     * @return $this
     */
    public function setRegisterAlias(?RegisterAlias $RegisterAlias): self
    {
        $this->RegisterAlias = $RegisterAlias;

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
     * @return $this
     */
    public function setReturnUrls(?ReturnUrls $ReturnUrls): self
    {
        $this->ReturnUrls = $ReturnUrls;

        return $this;
    }

    /**
     * @return Notification|null
     */
    public function getNotification(): ?Notification
    {
        return $this->Notification;
    }

    /**
     * @param Notification|null $Notification
     * @return $this
     */
    public function setNotification(?Notification $Notification): self
    {
        $this->Notification = $Notification;

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
     * @return $this
     */
    public function setStyling(?Styling $Styling): self
    {
        $this->Styling = $Styling;

        return $this;
    }

    /**
     * @return BillingAddressForm|null
     */
    public function getBillingAddressForm(): ?BillingAddressForm
    {
        return $this->BillingAddressForm;
    }

    /**
     * @param BillingAddressForm|null $BillingAddressForm
     * @return $this
     */
    public function setBillingAddressForm(?BillingAddressForm $BillingAddressForm): self
    {
        $this->BillingAddressForm = $BillingAddressForm;

        return $this;
    }

    /**
     * @return DeliveryAddressForm|null
     */
    public function getDeliveryAddressForm(): ?DeliveryAddressForm
    {
        return $this->DeliveryAddressForm;
    }

    /**
     * @param DeliveryAddressForm|null $DeliveryAddressForm
     * @return $this
     */
    public function setDeliveryAddressForm(?DeliveryAddressForm $DeliveryAddressForm): self
    {
        $this->DeliveryAddressForm = $DeliveryAddressForm;

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
     * @return $this
     */
    public function setCardForm(?CardForm $CardForm): self
    {
        $this->CardForm = $CardForm;

        return $this;
    }
}
