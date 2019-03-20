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
     * @var string
     */
    private $MerchantEmail;

    /**
     * @Groups("RequestParams")
     * @var string
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
     * @param string $MerchantEmail
     * @return PendingNotification
     */
    public function setMerchantEmail(string $MerchantEmail): self
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
     * @param string $NotifyUrl
     * @return PendingNotification
     */
    public function setNotifyUrl(string $NotifyUrl): self
    {
        $this->NotifyUrl = $NotifyUrl;

        return $this;
    }
}
