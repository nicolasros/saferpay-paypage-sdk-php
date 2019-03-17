<?php

namespace Worldline\Saferpay\Common;


class SaferpayEnvironment
{
    private $possibleEnvironments = [
        "TEST" => "https://test.saferpay.com/",
        "PROD" => "https://www.saferpay.com/",
    ];
    protected $environment;

    /**
     * SaferpayEnvironment constructor.
     * @param $environment
     */
    public function __construct($environment)
    {
        if (key_exists(strtoupper($environment), $this->possibleEnvironments)) {
            $this->environment = $this->possibleEnvironments[$environment];
        } else {
            throw new \Exception("Invalid environment. Use TEST or PROD.");
        }
    }

    public function getEnvironment()
    {
        return $this->environment;
    }
}
