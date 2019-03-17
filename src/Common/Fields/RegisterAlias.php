<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class RegisterAlias
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $IdGenerator;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Id;

    /**
     * @Groups("RequestParams")
     * @var integer
     */
    private $Lifetime;

    public function getIdGenerator(): ?string
    {
        return $this->IdGenerator;
    }

    public function setIdGenerator(string $IdGenerator): self
    {
        $this->IdGenerator = $IdGenerator;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->Id;
    }

    public function setId(?string $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getLifetime(): ?int
    {
        return $this->Lifetime;
    }

    public function setLifetime(?int $Lifetime): self
    {
        $this->Lifetime = $Lifetime;

        return $this;
    }
}