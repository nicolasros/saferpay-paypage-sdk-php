<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ClientInfo
 * @package Worldline\Saferpay\Common\Fields
 */
class ClientInfo
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $ShopInfo;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $OsInfo;

    /**
     * @return string|null
     */
    public function getShopInfo(): ?string
    {
        return $this->ShopInfo;
    }

    /**
     * @param string|null $ShopInfo
     * @return $this
     */
    public function setShopInfo(?string $ShopInfo): self
    {
        $this->ShopInfo = $ShopInfo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOsInfo(): ?string
    {
        return $this->OsInfo;
    }

    /**
     * @param string|null $OsInfo
     * @return $this
     */
    public function setOsInfo(?string $OsInfo): self
    {
        $this->OsInfo = $OsInfo;

        return $this;
    }
}
