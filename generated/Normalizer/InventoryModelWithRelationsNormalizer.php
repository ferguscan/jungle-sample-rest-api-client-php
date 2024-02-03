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
class InventoryModelWithRelationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Jungle\\Library\\Generated\\Model\\InventoryModelWithRelations';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Jungle\\Library\\Generated\\Model\\InventoryModelWithRelations';
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
        $object = new \Jungle\Library\Generated\Model\InventoryModelWithRelations();
        if (\array_key_exists('available', $data) && \is_int($data['available'])) {
            $data['available'] = (double) $data['available'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('available', $data)) {
            $object->setAvailable($data['available']);
        }
        if (\array_key_exists('locationId', $data)) {
            $object->setLocationId($data['locationId']);
        }
        if (\array_key_exists('sku', $data)) {
            $object->setSku($data['sku']);
        }
        if (\array_key_exists('product', $data)) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], 'Jungle\\Library\\Generated\\Model\\ProductModel', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['available'] = $object->getAvailable();
        $data['locationId'] = $object->getLocationId();
        $data['sku'] = $object->getSku();
        if ($object->isInitialized('product') && null !== $object->getProduct()) {
            $data['product'] = $this->normalizer->normalize($object->getProduct(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Jungle\\Library\\Generated\\Model\\InventoryModelWithRelations' => false);
    }
}