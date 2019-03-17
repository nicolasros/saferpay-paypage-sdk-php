<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class Styling
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $CssUrl;

    /**
     * @Groups("RequestParams")
     * @var boolean
     */
    private $ContentSecurityEnabled;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Theme;

    public function getCssUrl(): ?string
    {
        return $this->CssUrl;
    }

    public function setCssUrl(?string $CssUrl): self
    {
        $this->CssUrl = $CssUrl;

        return $this;
    }

    public function getContentSecurityEnabled(): ?bool
    {
        return $this->ContentSecurityEnabled;
    }

    public function setContentSecurityEnabled(?bool $ContentSecurityEnabled): self
    {
        $this->ContentSecurityEnabled = $ContentSecurityEnabled;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->Theme;
    }

    public function setTheme(?string $Theme): self
    {
        $this->Theme = $Theme;

        return $this;
    }
}
