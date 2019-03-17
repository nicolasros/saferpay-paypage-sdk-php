<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class Alias
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Id;

    /**
     * @Groups("RequestParams")
     * @var int
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
     * @param string $Id
     * @return Alias
     */
    public function setId(string $Id): self
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
     * @param int $Lifetime
     * @return Alias
     */
    public function setLifetime(int $Lifetime): self
    {
        $this->Lifetime = $Lifetime;

        return $this;
    }
}
