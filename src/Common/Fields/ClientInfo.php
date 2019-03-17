<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class ClientInfo
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $ShopInfo;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $OsInfo;

    public function getShopInfo(): ?string
    {
        return $this->ShopInfo;
    }

    public function setShopInfo(?string $ShopInfo): self
    {
        $this->ShopInfo = $ShopInfo;

        return $this;
    }

    public function getOsInfo(): ?string
    {
        return $this->OsInfo;
    }

    public function setOsInfo(?string $OsInfo): self
    {
        $this->OsInfo = $OsInfo;

        return $this;
    }
}
