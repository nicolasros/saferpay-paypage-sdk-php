<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Payer
 * @package Worldline\Saferpay\Common\Fields
 */
class Payer
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $IpAddress;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $LanguageCode;

    /**
     * @Groups("RequestParams")
     * @var null|DeliveryAddress
     */
    private $DeliveryAddress;

    /**
     * @Groups("RequestParams")
     * @var null|BillingAddress
     */
    private $BillingAddress;

    /**
     * @Groups("RequestParams")
     * @var string|null
     */
    private $Id;

    /**
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->IpAddress;
    }

    /**
     * @param string|null $IpAddress
     * @return $this
     */
    public function setIpAddress(?string $IpAddress): self
    {
        $this->IpAddress = $IpAddress;

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
     * @return $this
     */
    public function setLanguageCode(?string $LanguageCode): self
    {
        $this->LanguageCode = $LanguageCode;

        return $this;
    }

    /**
     * @return DeliveryAddress|null
     */
    public function getDeliveryAddress(): ?DeliveryAddress
    {
        return $this->DeliveryAddress;
    }

    /**
     * @param DeliveryAddress|null $DeliveryAddress
     * @return $this
     */
    public function setDeliveryAddress(?DeliveryAddress $DeliveryAddress): self
    {
        $this->DeliveryAddress = $DeliveryAddress;

        return $this;
    }

    /**
     * @return BillingAddress|null
     */
    public function getBillingAddress(): ?BillingAddress
    {
        return $this->BillingAddress;
    }

    /**
     * @param BillingAddress|null $BillingAddress
     * @return $this
     */
    public function setBillingAddress(?BillingAddress $BillingAddress): self
    {
        $this->BillingAddress = $BillingAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }

    /**
     * @param string|null $Id
     * @return Payer
     */
    public function setId(?string $Id): Payer
    {
        $this->Id = $Id;
        return $this;
    }

}
