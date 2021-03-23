<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class Check
 * @package Worldline\Saferpay\Common\Fields
 */
class Check
{
    /**
     * @var null|string
     */
    private $Type;
    /**
     * @var null|string
     */
    private $TerminalId;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * @param string|null $Type
     * @return Check
     */
    public function setType(?string $Type): Check
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTerminalId(): ?string
    {
        return $this->TerminalId;
    }

    /**
     * @param string|null $TerminalId
     * @return Check
     */
    public function setTerminalId(?string $TerminalId): Check
    {
        $this->TerminalId = $TerminalId;
        return $this;
    }


}