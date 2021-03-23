<?php


namespace Worldline\Saferpay\SecureCardData\Messages;


use Worldline\Saferpay\Common\Fields\CardForm;
use Worldline\Saferpay\Common\Fields\Check;
use Worldline\Saferpay\Common\Fields\PaymentMeans;
use Worldline\Saferpay\Common\Fields\RegisterAlias;
use Worldline\Saferpay\Common\Fields\RequestHeader;
use Worldline\Saferpay\Common\Fields\ReturnUrls;
use Worldline\Saferpay\Common\Fields\Styling;
use Worldline\Saferpay\Common\Messages\SaferPayMessage;

/**
 * Class AliasInsert
 * @package Worldline\Saferpay\SecureCardData\Messages
 */
class AliasInsert extends SaferPayMessage
{
    /**
     * @var string
     */
    private $serviceUrl = "api/Payment/v1/Alias/Insert";
    /**
     * @var RequestHeader|null
     */
    private $RequestHeader;
    /**
     * @var RegisterAlias|null
     */
    private $RegisterAlias;
    /**
     * @var string|null
     */
    private $Type;
    /**
     * @var ReturnUrls|null
     */
    private $ReturnUrls;
    /**
     * @var Styling|null
     */
    private $Styling;
    /**
     * @var string|null
     */
    private $LanguageCode;
    /**
     * @var Check|null
     */
    private $Check;
    /**
     * @var array|null
     */
    private $PaymentMethods;
    /**
     * @var CardForm|null
     */
    private $CardForm;
    /**
     * @var PaymentMeans|null
     */
    private $PaymentMeans;

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
     * @return AliasInsert
     */
    public function setRequestHeader(?RequestHeader $RequestHeader): AliasInsert
    {
        $this->RequestHeader = $RequestHeader;
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
     * @return AliasInsert
     */
    public function setRegisterAlias(?RegisterAlias $RegisterAlias): AliasInsert
    {
        $this->RegisterAlias = $RegisterAlias;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * @param string|null $Type
     * @return AliasInsert
     */
    public function setType(?string $Type): AliasInsert
    {
        $this->Type = $Type;
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
     * @return AliasInsert
     */
    public function setReturnUrls(?ReturnUrls $ReturnUrls): AliasInsert
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
     * @return AliasInsert
     */
    public function setStyling(?Styling $Styling): AliasInsert
    {
        $this->Styling = $Styling;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->LanguageCode;
    }

    /**
     * @param string|null $LanguageCode
     * @return AliasInsert
     */
    public function setLanguageCode(?string $LanguageCode): AliasInsert
    {
        $this->LanguageCode = $LanguageCode;
        return $this;
    }

    /**
     * @return Check|null
     */
    public function getCheck(): ?Check
    {
        return $this->Check;
    }

    /**
     * @param Check|null $Check
     * @return AliasInsert
     */
    public function setCheck(?Check $Check): AliasInsert
    {
        $this->Check = $Check;
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
     * @return AliasInsert
     */
    public function setPaymentMethods(?array $PaymentMethods): AliasInsert
    {
        $this->PaymentMethods = $PaymentMethods;
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
     * @return AliasInsert
     */
    public function setCardForm(?CardForm $CardForm): AliasInsert
    {
        $this->CardForm = $CardForm;
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
     * @return AliasInsert
     */
    public function setPaymentMeans(?PaymentMeans $PaymentMeans): AliasInsert
    {
        $this->PaymentMeans = $PaymentMeans;
        return $this;
    }

}
