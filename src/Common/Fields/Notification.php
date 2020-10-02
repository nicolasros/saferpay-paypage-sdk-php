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
     * @var null|array
     */
    private $MerchantEmails;

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
     * @return array|null
     */
    public function getMerchantEmails(): ?array
    {
        return $this->MerchantEmails;
    }

    /**
     * @param array|null $MerchantEmails
     * @return $this
     */
    public function setMerchantEmails(?array $MerchantEmails): self
    {
        $this->MerchantEmails = $MerchantEmails;

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
