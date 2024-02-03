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
class InventoryGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Jungle\\Library\\Generated\\Model\\InventoryGetResponse200';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Jungle\\Library\\Generated\\Model\\InventoryGetResponse200';
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
        $object = new \Jungle\Library\Generated\Model\InventoryGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('results', $data)) {
            $values = array();
            foreach ($data['results'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jungle\\Library\\Generated\\Model\\InventoryModelWithRelations', 'json', $context);
            }
            $object->setResults($values);
            unset($data['results']);
        }
        if (\array_key_exists('pageInfo', $data)) {
            $object->setPageInfo($this->denormalizer->denormalize($data['pageInfo'], 'Jungle\\Library\\Generated\\Model\\PageInfo', 'json', $context));
            unset($data['pageInfo']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('results') && null !== $object->getResults()) {
            $values = array();
            foreach ($object->getResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['results'] = $values;
        }
        if ($object->isInitialized('pageInfo') && null !== $object->getPageInfo()) {
            $data['pageInfo'] = $this->normalizer->normalize($object->getPageInfo(), 'json', $context);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Jungle\\Library\\Generated\\Model\\InventoryGetResponse200' => false);
    }
}