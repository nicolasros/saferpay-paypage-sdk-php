<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class Alias
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Id;

    /**
     * @Groups("RequestParams")
     * @var null|int
     */
    private $Lifetime;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }

    /**
     * @param string|null $Id
     * @return Alias
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
     * @return Alias
     */
    public function setLifetime(?int $Lifetime): self
    {
        $this->Lifetime = $Lifetime;

        return $this;
    }
}
