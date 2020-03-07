<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Twint
 * @package Worldline\Saferpay\Common\Fields
 */
class Twint
{
    /**
     * @var null|\DateTimeInterface
     */
    private $CertificateExpirationDate;

    /**
     * @return \DateTimeInterface|null
     */
    public function getCertificateExpirationDate(): ?\DateTimeInterface
    {
        return $this->CertificateExpirationDate;
    }

    /**
     * @param null|string $CertificateExpirationDate
     * @return Twint
     */
    public function setCertificateExpirationDate(?string $CertificateExpirationDate): self
    {
        $CertificateExpirationDateDT = \DateTime::createFromFormat("Y-m-d\TH:i:s.u+P", $CertificateExpirationDate);
        $this->CertificateExpirationDate = $CertificateExpirationDateDT;

        return $this;
    }
}
