<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class Payer
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $IpAddress;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $LanguageCode;

    /**
     * @Groups("RequestParams")
     * @var DeliveryAddress
     */
    private $DeliveryAddress;

    /**
     * @Groups("RequestParams")
     * @var BillingAddress
     */
    private $BillingAddress;

    public function getIpAddress(): ?string
    {
        return $this->IpAddress;
    }

    public function setIpAddress(?string $IpAddress): self
    {
        $this->IpAddress = $IpAddress;

        return $this;
    }

    public function getLanguageCode(): ?string
    {
        return $this->LanguageCode;
    }

    public function setLanguageCode(?string $LanguageCode): self
    {
        $this->LanguageCode = $LanguageCode;

        return $this;
    }

    public function getDeliveryAddress(): ?DeliveryAddress
    {
        return $this->DeliveryAddress;
    }

    public function setDeliveryAddress(?DeliveryAddress $DeliveryAddress): self
    {
        $this->DeliveryAddress = $DeliveryAddress;

        return $this;
    }

    public function getBillingAddress(): ?BillingAddress
    {
        return $this->BillingAddress;
    }

    public function setBillingAddress(?BillingAddress $BillingAddress): self
    {
        $this->BillingAddress = $BillingAddress;

        return $this;
    }
}
