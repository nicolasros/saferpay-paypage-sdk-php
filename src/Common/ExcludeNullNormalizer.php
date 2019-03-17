<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 26/02/2019
 * Time: 14:29
 */

namespace Worldline\Saferpay\Common;


use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ExcludeNullNormalizer extends ObjectNormalizer
{
    public function normalize($object, $format = null, array $context = [])
    {
        $data = parent::normalize($object, $format, $context);
        
        return array_filter($data, function ($value) {
            return null !== $value;
        }, ARRAY_FILTER_USE_BOTH);
    }
}