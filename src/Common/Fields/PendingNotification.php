<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class PendingNotification
 * @package Worldline\Saferpay\Common\Fields
 */
class PendingNotification
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
    private $NotifyUrl;

    /**
     * @return string|null
     */
    public function getMerchantEmail(): ?string
    {
        return $this->MerchantEmail;
    }

    /**
     * @param null|string $MerchantEmail
     * @return PendingNotification
     */
    public function setMerchantEmail(?string $MerchantEmail): self
    {
        $this->MerchantEmail = $MerchantEmail;

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
     * @param null|string $NotifyUrl
     * @return PendingNotification
     */
    public function setNotifyUrl(?string $NotifyUrl): self
    {
        $this->NotifyUrl = $NotifyUrl;

        return $this;
    }
}
