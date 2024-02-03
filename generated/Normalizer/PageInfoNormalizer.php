<?php

namespace Jungle\Library\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jungle\Library\Generated\Runtime\Normalizer\CheckArray;
use Jungle\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PageInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Jungle\\Library\\Generated\\Model\\PageInfo';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Jungle\\Library\\Generated\\Model\\PageInfo';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jungle\Library\Generated\Model\PageInfo();
        if (\array_key_exists('limit', $data) && \is_int($data['limit'])) {
            $data['limit'] = (double) $data['limit'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hasMore', $data)) {
            $object->setHasMore($data['hasMore']);
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (\array_key_exists('nextCursor', $data)) {
            $object->setNextCursor($data['nextCursor']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['hasMore'] = $object->getHasMore();
        $data['limit'] = $object->getLimit();
        if ($object->isInitialized('nextCursor') && null !== $object->getNextCursor()) {
            $data['nextCursor'] = $object->getNextCursor();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Jungle\\Library\\Generated\\Model\\PageInfo' => false);
    }
}