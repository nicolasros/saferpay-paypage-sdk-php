<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 27/02/2019
 * Time: 12:34
 */

namespace Worldline\Saferpay\Common\Fields;

use Symfony\Component\Serializer\Annotation\Groups;

class ReturnUrls
{
    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Success;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Fail;

    /**
     * @Groups("RequestParams")
     * @var string
     */
    private $Abort;

    public function getSuccess(): ?string
    {
        return $this->Success;
    }

    public function setSuccess(string $Success): self
    {
        $this->Success = $Success;

        return $this;
    }

    public function getFail(): ?string
    {
        return $this->Fail;
    }

    public function setFail(string $Fail): self
    {
        $this->Fail = $Fail;

        return $this;
    }

    public function getAbort(): ?string
    {
        return $this->Abort;
    }

    public function setAbort(?string $Abort): self
    {
        $this->Abort = $Abort;

        return $this;
    }
}
