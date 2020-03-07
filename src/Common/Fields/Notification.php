<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Notification
 * @package Worldline\Saferpay\Common\Fields
 */
class Notification
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $MerchantEmail;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $PayerEmail;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $NotifyUrl;

    /**
     * @return string|null
     */
    public function getMerchantEmail(): ?string
    {
        return $this->MerchantEmail;
    }

    /**
     * @param string|null $MerchantEmail
     * @return $this
     */
    public function setMerchantEmail(?string $MerchantEmail): self
    {
        $this->MerchantEmail = $MerchantEmail;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPayerEmail(): ?string
    {
        return $this->PayerEmail;
    }

    /**
     * @param string|null $PayerEmail
     * @return $this
     */
    public function setPayerEmail(?string $PayerEmail): self
    {
        $this->PayerEmail = $PayerEmail;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotifyUrl(): ?string
    {
        return $this->NotifyUrl;
    }

    /**
     * @param string|null $NotifyUrl
     * @return $this
     */
    public function setNotifyUrl(?string $NotifyUrl): self
    {
        $this->NotifyUrl = $NotifyUrl;

        return $this;
    }
}
