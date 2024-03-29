<?php

namespace Worldline\Saferpay\Common;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Serializer;
use Worldline\Saferpay\Paypage\Messages\ErrorMessage;
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
    public function __construct(SaferpayEnvironment $environment, string $customerId = null, string $terminalId = null, string $apiUser = null, string $apiPassword = null)
    {
        if ($customerId == null) {
            $customerId = $_SERVER['SAFERPAY_CUSTOMER_ID'];
        }
        if ($terminalId == null) {
            $terminalId = $_SERVER['SAFERPAY_TERMINAL'];
        }
        if ($apiUser == null) {
            $apiUser = $_SERVER['SAFERPAY_USERNAME'];
        }
        if ($apiPassword == null) {
            $apiPassword = $_SERVER['SAFERPAY_PASSWORD'];
        }
        $this->environment = $environment;
        $this->customerId = $customerId;
        $this->terminalId = $terminalId;
        $this->apiUser = $apiUser;
        $this->apiPassword = $apiPassword;
        $encoders = [new JsonEncoder()];
        //$normalizers = [new ObjectNormalizer()];
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
        $normalizers = [new ArrayDenormalizer(), new ObjectNormalizer(null, null, null, $extractor)];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    /**
     * @param bool $prettyPrint
     * @return string
     */
    public function getLastRequestAsJson($prettyPrint = false): string
    {
        if ($prettyPrint) {
            return json_encode(json_decode($this->lastRequestAsJSON,true),JSON_PRETTY_PRINT);
        } else {
            return $this->lastRequestAsJSON;
        }
    }

    /**
     * @param bool $prettyPrint
     * @return string
     */
    public function getLastResponseAsJson($prettyPrint = false): string
    {
        if ($prettyPrint) {
            return json_encode(json_decode($this->lastResponseAsJSON,true),JSON_PRETTY_PRINT);
        } else {
            return $this->lastResponseAsJSON;
        }
    }

    public function send(SaferPayMessage &$request)
    {
        $className = get_class($request)."Response";
        if ($className == "Worldline\Saferpay\Paypage\Messages\PaypageInitialisationResponse" AND $request->getTerminalId() == null) {
            $request->setTerminalId($this->terminalId);
        }
        if ($request->getRequestHeader()->getCustomerId() == null) {
            $request->getRequestHeader()->setCustomerId($this->customerId);
        }
        $json = $this->serializer->serialize($request, 'json', ['groups' => 'RequestParams','ignored_attributes' => ['serviceUrl'], 'skip_null_values' => true]);
        //$json = $this->serializer->serialize($request, 'json', ['groups' => 'RequestParams']);
        $url = $this->environment->getEnvironment() . $request->getServiceUrl();
        $response = $this->do_curl($this->apiUser, $this->apiPassword, $url, $json, $className);

        return $response;
    }

    public function do_curl($username,$password,$url, $payload, $responseClass)
    {
        $this->lastRequestAsJSON = $payload;
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
        $this->lastResponseAsJSON = curl_multi_getcontent($curl);
        if($status != 200) {
            $resp = json_decode(curl_multi_getcontent($curl), true);
            $resp['StatusCode'] = $status;
            $resp['error'] = curl_errno($curl);
            $resp = json_encode($resp);
            //$obj = $resp;
            $obj = $this->serializer->deserialize($resp, ErrorMessage::class, 'json');
        } else {
            $resp = json_decode($jsonResponse, true);
            $resp['StatusCode'] = $status;
            $resp['error'] = "" . curl_errno($curl);
            $resp = json_encode($resp);
            //$obj = $resp;
            $obj = $this->serializer->deserialize($resp, $responseClass, 'json');
        }
        curl_close($curl);

        return $obj;
    }
}