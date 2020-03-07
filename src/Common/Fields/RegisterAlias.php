<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class RegisterAlias
 * @package Worldline\Saferpay\Common\Fields
 */
class RegisterAlias
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $IdGenerator;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Id;

    /**
     * @Groups("RequestParams")
     * @var null|integer
     */
    private $Lifetime;

    /**
     * @return string|null
     */
    public function getIdGenerator(): ?string
    {
        return $this->IdGenerator;
    }

    /**
     * @param string|null $IdGenerator
     * @return $this
     */
    public function setIdGenerator(?string $IdGenerator): self
    {
        $this->IdGenerator = $IdGenerator;

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
     * @return $this
     */
    public function setId(?string $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getLifetime(): ?int
    {
        return $this->Lifetime;
    }

    /**
     * @param int|null $Lifetime
     * @return $this
     */
    public function setLifetime(?int $Lifetime): self
    {
        $this->Lifetime = $Lifetime;

        return $this;
    }
}