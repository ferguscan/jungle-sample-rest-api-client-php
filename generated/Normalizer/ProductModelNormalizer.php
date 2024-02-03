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
class ProductModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Jungle\\Library\\Generated\\Model\\ProductModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Jungle\\Library\\Generated\\Model\\ProductModel';
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
        $object = new \Jungle\Library\Generated\Model\ProductModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('xids', $data)) {
            $values = array();
            foreach ($data['xids'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jungle\\Library\\Generated\\Model\\XidModel', 'json', $context);
            }
            $object->setXids($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('xids') && null !== $object->getXids()) {
            $values = array();
            foreach ($object->getXids() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['xids'] = $values;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Jungle\\Library\\Generated\\Model\\ProductModel' => false);
    }
}