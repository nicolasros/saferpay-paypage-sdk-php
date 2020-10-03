<?php


namespace Worldline\Saferpay\Common\Fields;


class InstallmentPlans
{
    /**
     * @var int|null
     */
    private $MinimumNumberOfInstallments;
    /**
     * @var int|null
     */
    private $MaximumNumberOfInstallments;
    /**
     * @var string|null
     */
    private $InterestRate;
    /**
     * @var Amount|null
     */
    private $InstallmentFee;
    /**
     * @var string|null
     */
    private $AnnualPercentageRate;
    /**
     * @var Amount|null
     */
    private $TotalAmountDue;

    /**
     * @return int|null
     */
    public function getMinimumNumberOfInstallments(): ?int
    {
        return $this->MinimumNumberOfInstallments;
    }

    /**
     * @param int|null $MinimumNumberOfInstallments
     * @return InstallmentPlans
     */
    public function setMinimumNumberOfInstallments(?int $MinimumNumberOfInstallments): InstallmentPlans
    {
        $this->MinimumNumberOfInstallments = $MinimumNumberOfInstallments;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaximumNumberOfInstallments(): ?int
    {
        return $this->MaximumNumberOfInstallments;
    }

    /**
     * @param int|null $MaximumNumberOfInstallments
     * @return InstallmentPlans
     */
    public function setMaximumNumberOfInstallments(?int $MaximumNumberOfInstallments): InstallmentPlans
    {
        $this->MaximumNumberOfInstallments = $MaximumNumberOfInstallments;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInterestRate(): ?string
    {
        return $this->InterestRate;
    }

    /**
     * @param string|null $InterestRate
     * @return InstallmentPlans
     */
    public function setInterestRate(?string $InterestRate): InstallmentPlans
    {
        $this->InterestRate = $InterestRate;
        return $this;
    }

    /**
     * @return Amount|null
     */
    public function getInstallmentFee(): ?Amount
    {
        return $this->InstallmentFee;
    }

    /**
     * @param Amount|null $InstallmentFee
     * @return InstallmentPlans
     */
    public function setInstallmentFee(?Amount $InstallmentFee): InstallmentPlans
    {
        $this->InstallmentFee = $InstallmentFee;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnnualPercentageRate(): ?string
    {
        return $this->AnnualPercentageRate;
    }

    /**
     * @param string|null $AnnualPercentageRate
     * @return CustomPlan
     */
    public function setAnnualPercentageRate(?string $AnnualPercentageRate): CustomPlan
    {
        $this->AnnualPercentageRate = $AnnualPercentageRate;
        return $this;
    }

    /**
     * @return Amount|null
     */
    public function getTotalAmountDue(): ?Amount
    {
        return $this->TotalAmountDue;
    }

    /**
     * @param Amount|null $TotalAmountDue
     * @return CustomPlan
     */
    public function setTotalAmountDue(?Amount $TotalAmountDue): CustomPlan
    {
        $this->TotalAmountDue = $TotalAmountDue;
        return $this;
    }
}