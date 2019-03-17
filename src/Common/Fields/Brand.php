<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;


/**
 * Class Brand
 * @package Worldline\Saferpay\Common\Fields
 */
class Brand
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $PaymentMethod;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Name;


    /**
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->PaymentMethod;
    }

    /**
     * @param string $PaymentMethod
     * @return Brand
     */
    public function setPaymentMethod(string $PaymentMethod): self
    {
        $this->PaymentMethod = $PaymentMethod;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return Brand
     */
    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }
}
