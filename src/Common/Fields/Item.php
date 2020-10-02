<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class Item
 * @package Worldline\Saferpay\Common\Fields
 */
class Item
{
    /**
     * @var string|null
     */
    private $Type;
    /**
     * @var string|null
     */
    private $Id;
    /**
     * @var string|null
     */
    private $VariantId;
    /**
     * @var string|null
     */
    private $Name;
    /**
     * @var string|null
     */
    private $CategoryName;
    /**
     * @var string|null
     */
    private $Description;
    /**
     * @var int|null
     */
    private $Quantity;
    /**
     * @var string|null
     */
    private $UnitPrice;
    /**
     * @var bool|null
     */
    private $IsPreOrder;
    /**
     * @var string|null
     */
    private $TaxRate;
    /**
     * @var string|null
     */
    private $TaxAmount;
    /**
     * @var string|null
     */
    private $DiscountAmount;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * @param string|null $Type
     * @return Item
     */
    public function setType(?string $Type): Item
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }

    /**
     * @param string|null $Id
     * @return Item
     */
    public function setId(?string $Id): Item
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVariantId(): ?string
    {
        return $this->VariantId;
    }

    /**
     * @param string|null $VariantId
     * @return Item
     */
    public function setVariantId(?string $VariantId): Item
    {
        $this->VariantId = $VariantId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * @param string|null $Name
     * @return Item
     */
    public function setName(?string $Name): Item
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategoryName(): ?string
    {
        return $this->CategoryName;
    }

    /**
     * @param string|null $CategoryName
     * @return Item
     */
    public function setCategoryName(?string $CategoryName): Item
    {
        $this->CategoryName = $CategoryName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }

    /**
     * @param string|null $Description
     * @return Item
     */
    public function setDescription(?string $Description): Item
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }

    /**
     * @param int|null $Quantity
     * @return Item
     */
    public function setQuantity(?int $Quantity): Item
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUnitPrice(): ?string
    {
        return $this->UnitPrice;
    }

    /**
     * @param string|null $UnitPrice
     * @return Item
     */
    public function setUnitPrice(?string $UnitPrice): Item
    {
        $this->UnitPrice = $UnitPrice;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsPreOrder(): ?bool
    {
        return $this->IsPreOrder;
    }

    /**
     * @param bool|null $IsPreOrder
     * @return Item
     */
    public function setIsPreOrder(?bool $IsPreOrder): Item
    {
        $this->IsPreOrder = $IsPreOrder;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTaxRate(): ?string
    {
        return $this->TaxRate;
    }

    /**
     * @param string|null $TaxRate
     * @return Item
     */
    public function setTaxRate(?string $TaxRate): Item
    {
        $this->TaxRate = $TaxRate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTaxAmount(): ?string
    {
        return $this->TaxAmount;
    }

    /**
     * @param string|null $TaxAmount
     * @return Item
     */
    public function setTaxAmount(?string $TaxAmount): Item
    {
        $this->TaxAmount = $TaxAmount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDiscountAmount(): ?string
    {
        return $this->DiscountAmount;
    }

    /**
     * @param string|null $DiscountAmount
     * @return Item
     */
    public function setDiscountAmount(?string $DiscountAmount): Item
    {
        $this->DiscountAmount = $DiscountAmount;
        return $this;
    }

}