<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class BillingAddressForm
{
    /**
     * @Groups("RequestParams")
     * @var boolean
     */
    private $Display;

    /**
     * @Groups("RequestParams")
     * @var array
     */
    private $MandatoryFields = [];

    public function getDisplay(): ?bool
    {
        return $this->Display;
    }

    public function setDisplay(bool $Display): self
    {
        $this->Display = $Display;

        return $this;
    }

    public function getMandatoryFields(): ?array
    {
        return $this->MandatoryFields;
    }

    public function setMandatoryFields(?array $MandatoryFields): self
    {
        $this->MandatoryFields = $MandatoryFields;

        return $this;
    }
}
