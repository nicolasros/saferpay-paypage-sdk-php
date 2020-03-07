<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class DeliveryAddressForm
 * @package Worldline\Saferpay\Common\Fields
 */
class DeliveryAddressForm
{
    /**
     * @Groups("RequestParams")
     * @var null|boolean
     */
    private $Display;

    /**
     * @Groups("RequestParams")
     * @var null|array
     */
    private $MandatoryFields = [];

    /**
     * @return bool|null
     */
    public function getDisplay(): ?bool
    {
        return $this->Display;
    }

    /**
     * @param bool $Display
     * @return $this
     */
    public function setDisplay(bool $Display): self
    {
        $this->Display = $Display;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getMandatoryFields(): ?array
    {
        return $this->MandatoryFields;
    }

    /**
     * @param array|null $MandatoryFields
     * @return $this
     */
    public function setMandatoryFields(?array $MandatoryFields): self
    {
        $this->MandatoryFields = $MandatoryFields;

        return $this;
    }
}
