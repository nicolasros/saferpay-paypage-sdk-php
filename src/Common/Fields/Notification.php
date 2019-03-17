<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class Notification
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
    private $PayerEmail;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $NotifyUrl;

    public function getMerchantEmail(): ?string
    {
        return $this->MerchantEmail;
    }

    public function setMerchantEmail(?string $MerchantEmail): self
    {
        $this->MerchantEmail = $MerchantEmail;

        return $this;
    }

    public function getPayerEmail(): ?string
    {
        return $this->PayerEmail;
    }

    public function setPayerEmail(?string $PayerEmail): self
    {
        $this->PayerEmail = $PayerEmail;

        return $this;
    }

    public function getNotifyUrl(): ?string
    {
        return $this->NotifyUrl;
    }

    public function setNotifyUrl(?string $NotifyUrl): self
    {
        $this->NotifyUrl = $NotifyUrl;

        return $this;
    }
}
