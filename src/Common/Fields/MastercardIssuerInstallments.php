<?php


namespace Worldline\Saferpay\Common\Fields;


/**
 * Class MastercardIssuerInstallments
 * @package Worldline\Saferpay\Common\Fields
 */
class MastercardIssuerInstallments
{
    /**
     * @var InstallmentPlans|null
     */
    private $InstallmentPlans;
    /**
     * @var CustomPlan|null
     */
    private $CustomPlan;
    /**
     * @var string|null
     */
    private $ReceiptFreeText;

    /**
     * @return InstallmentPlans|null
     */
    public function getInstallmentPlans(): ?InstallmentPlans
    {
        return $this->InstallmentPlans;
    }

    /**
     * @param InstallmentPlans|null $InstallmentPlans
     * @return MastercardIssuerInstallments
     */
    public function setInstallmentPlans(?InstallmentPlans $InstallmentPlans): MastercardIssuerInstallments
    {
        $this->InstallmentPlans = $InstallmentPlans;
        return $this;
    }

    /**
     * @return CustomPlan|null
     */
    public function getCustomPlan(): ?CustomPlan
    {
        return $this->CustomPlan;
    }

    /**
     * @param CustomPlan|null $CustomPlan
     * @return MastercardIssuerInstallments
     */
    public function setCustomPlan(?CustomPlan $CustomPlan): MastercardIssuerInstallments
    {
        $this->CustomPlan = $CustomPlan;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReceiptFreeText(): ?string
    {
        return $this->ReceiptFreeText;
    }

    /**
     * @param string|null $ReceiptFreeText
     * @return MastercardIssuerInstallments
     */
    public function setReceiptFreeText(?string $ReceiptFreeText): MastercardIssuerInstallments
    {
        $this->ReceiptFreeText = $ReceiptFreeText;
        return $this;
    }

}