<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 27/02/2019
 * Time: 12:34
 */

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ReturnUrls
 * @package Worldline\Saferpay\Common\Fields
 */
class ReturnUrls
{
    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Success;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Fail;

    /**
     * @Groups("RequestParams")
     * @var null|string
     */
    private $Abort;

    /**
     * @return string|null
     */
    public function getSuccess(): ?string
    {
        return $this->Success;
    }

    /**
     * @param string|null $Success
     * @return $this
     */
    public function setSuccess(?string $Success): self
    {
        $this->Success = $Success;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFail(): ?string
    {
        return $this->Fail;
    }

    /**
     * @param string|null $Fail
     * @return $this
     */
    public function setFail(?string $Fail): self
    {
        $this->Fail = $Fail;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAbort(): ?string
    {
        return $this->Abort;
    }

    /**
     * @param string|null $Abort
     * @return $this
     */
    public function setAbort(?string $Abort): self
    {
        $this->Abort = $Abort;

        return $this;
    }
}
