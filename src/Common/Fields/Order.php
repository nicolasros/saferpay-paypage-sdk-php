<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class Order
 * @package Worldline\Saferpay\Common\Fields
 */
class Order
{
    /**
     * @var array|null
     */
    private $Items;

    /**
     * @return array|null
     */
    public function getItems(): ?array
    {
        return $this->Items;
    }

    /**
     * @param array|null $Items
     * @return Order
     */
    public function setItems(?array $Items): Order
    {
        $this->Items = $Items;
        return $this;
    }


}