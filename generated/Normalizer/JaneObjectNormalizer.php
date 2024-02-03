<?php

namespace Jungle\Library\Generated\Normalizer;

use Jungle\Library\Generated\Runtime\Normalizer\CheckArray;
use Jungle\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = array('Jungle\\Library\\Generated\\Model\\XidModel' => 'Jungle\\Library\\Generated\\Normalizer\\XidModelNormalizer', 'Jungle\\Library\\Generated\\Model\\LocationModelWithRelations' => 'Jungle\\Library\\Generated\\Normalizer\\LocationModelWithRelationsNormalizer', 'Jungle\\Library\\Generated\\Model\\PageInfo' => 'Jungle\\Library\\Generated\\Normalizer\\PageInfoNormalizer', 'Jungle\\Library\\Generated\\Model\\ProductModel' => 'Jungle\\Library\\Generated\\Normalizer\\ProductModelNormalizer', 'Jungle\\Library\\Generated\\Model\\InventoryModelWithRelations' => 'Jungle\\Library\\Generated\\Normalizer\\InventoryModelWithRelationsNormalizer', 'Jungle\\Library\\Generated\\Model\\InventoryGetResponse200' => 'Jungle\\Library\\Generated\\Normalizer\\InventoryGetResponse200Normalizer', 'Jungle\\Library\\Generated\\Model\\LocationsGetResponse200' => 'Jungle\\Library\\Generated\\Normalizer\\LocationsGetResponse200Normalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Jungle\\Library\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Jungle\\Library\\Generated\\Model\\XidModel' => false, 'Jungle\\Library\\Generated\\Model\\LocationModelWithRelations' => false, 'Jungle\\Library\\Generated\\Model\\PageInfo' => false, 'Jungle\\Library\\Generated\\Model\\ProductModel' => false, 'Jungle\\Library\\Generated\\Model\\InventoryModelWithRelations' => false, 'Jungle\\Library\\Generated\\Model\\InventoryGetResponse200' => false, 'Jungle\\Library\\Generated\\Model\\LocationsGetResponse200' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false);
    }
}