<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class Phone
 * @package Worldline\Saferpay\Common\Fields
 */
class Phone
{
    /**
     * @var string|null
     */
    private $Main;
    /**
     * @var string|null
     */
    private $Mobile;
    /**
     * @var string|null
     */
    private $Work;

    /**
     * @return string|null
     */
    public function getMain(): ?string
    {
        return $this->Main;
    }

    /**
     * @param string|null $Main
     * @return Phone
     */
    public function setMain(?string $Main): Phone
    {
        $this->Main = $Main;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->Mobile;
    }

    /**
     * @param string|null $Mobile
     * @return Phone
     */
    public function setMobile(?string $Mobile): Phone
    {
        $this->Mobile = $Mobile;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWork(): ?string
    {
        return $this->Work;
    }

    /**
     * @param string|null $Work
     * @return Phone
     */
    public function setWork(?string $Work): Phone
    {
        $this->Work = $Work;
        return $this;
    }

}