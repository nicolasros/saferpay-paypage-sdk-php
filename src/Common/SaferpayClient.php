<?php

namespace Worldline\Saferpay\Common;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Serializer;
use Worldline\Saferpay\Common\Messages\SaferPayMessage;
use Worldline\Saferpay\Paypage\Messages\PaypageInitialisation;
use Worldline\Saferpay\Paypage\Messages\PaypageInitialisationResponse;

class SaferpayClient
{
    /**
     * @var SaferpayEnvironment
     */
    private $environment;
    /**
     * @var string
     */
    private $customerId;
    /**
     * @var string
     */
    private $terminalId;
    /**
     * @var string
     */
    private $apiUser;
    /**
     * @var string
     */
    private $apiPassword;
    /**
     * @var string
     */
    private $lastRequestAsJSON;
    /**
     * @var string
     */
    private $lastResponseAsJSON;
    /**
     * @var Serializer
     */
    private $serializer;
    /**
     * @var ClassMetadataFactory
     */
    private $classMetadataFactory;

    /**
     * SaferpayClient constructor.
     * @param $environment
     * @param $customerId
     * @param $terminalId
     * @param $apiUser
     * @param $apiPassword
     */
    public function __construct(SaferpayEnvironment $environment, string $customerId, string $terminalId, string $apiUser, string $apiPassword)
    {
        $this->environment = $environment;
        $this->customerId = $customerId;
        $this->terminalId = $terminalId;
        $this->apiUser = $apiUser;
        $this->apiPassword = $apiPassword;
        $encoders = [new JsonEncoder()];
        $excludeNullNormalizer = new ExcludeNullNormalizer(null, null, null, new ReflectionExtractor() );
        $excludeNullNormalizer->setIgnoredAttributes(['serviceUrl']);
        $normalizers = [$excludeNullNormalizer];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    /**
     * @return string
     */
    public function getLastRequestAsJSON(): string
    {
        return $this->lastRequestAsJSON;
    }

    /**
     * @return string
     */
    public function getLastResponseAsJSON(): string
    {
        return $this->lastResponseAsJSON;
    }

    public function send(SaferPayMessage &$request)
    {
        $className = get_class($request)."Response";
        if ($className == "Worldline\Saferpay\Paypage\Messages\PaypageInitialisationResponse") {
            $request->setTerminalId($this->terminalId);
        }
        $request->getRequestHeader()->setCustomerId($this->customerId);
        $json = $this->serializer->serialize($request, 'json', ['groups' => 'RequestParams']);
        $url = $this->environment->getEnvironment() . $request->getServiceUrl();
        $response = $this->do_curl($this->apiUser, $this->apiPassword, $url, $json, $className);
        
        return $response;
    }

    public function do_curl($username,$password,$url, $payload, $responseClass)
    {
        $this->lastRequestAsJSON = $payload;
        $responseObject = new $responseClass;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,array("Content-type: application/json","Accept: application/json; charset=utf-8"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
        $jsonResponse = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if($status != 200) {
            $this->lastResponseAsJSON = curl_multi_getcontent($curl);
            $resp = json_decode(curl_multi_getcontent($curl), true);
            $resp['StatusCode'] = $status;
            $resp['error'] = curl_errno($curl);
        } else {
            $resp = json_decode($jsonResponse, true);
            $resp['StatusCode'] = $status;
            $resp['error'] = "" . curl_errno($curl);
        }
        $resp = json_encode($resp);
        curl_close($curl);
        $obj = $this->serializer->deserialize($resp, get_class($responseObject), 'json');

        return $obj;
    }
}