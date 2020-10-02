<?php

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Styling
 * @package Worldline\Saferpay\Common\Fields
 */
class Styling
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     * Depricated!
     */
    private $CssUrl;

    /**
     * @Groups("RequestParams")
     * @var null|boolean
     */
    private $ContentSecurityEnabled;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Theme;

    /**
     * @return string|null
     */
    public function getCssUrl(): ?string
    {
        return $this->CssUrl;
    }

    /**
     * @param string|null $CssUrl
     * @return $this
     */
    public function setCssUrl(?string $CssUrl): self
    {
        $this->CssUrl = $CssUrl;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getContentSecurityEnabled(): ?bool
    {
        return $this->ContentSecurityEnabled;
    }

    /**
     * @param bool|null $ContentSecurityEnabled
     * @return $this
     */
    public function setContentSecurityEnabled(?bool $ContentSecurityEnabled): self
    {
        $this->ContentSecurityEnabled = $ContentSecurityEnabled;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTheme(): ?string
    {
        return $this->Theme;
    }

    /**
     * @param string|null $Theme
     * @return $this
     */
    public function setTheme(?string $Theme): self
    {
        $this->Theme = $Theme;

        return $this;
    }
}
