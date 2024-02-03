<?php

namespace Jungle\Library\Generated;

class Client extends \Jungle\Library\Generated\Runtime\Client\Client
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $from Start from this cursor
     *     @var float $limit Maximum number of items to retrieve
     *     @var string $locationId Retrieve inventory for this location
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Auth header of the form: "ApiKey YOUR_TOKEN"
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jungle\Library\Generated\Model\InventoryGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryFind(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jungle\Library\Generated\Endpoint\InventoryFind($queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $from Start from this cursor
     *     @var float $limit Maximum number of items to retrieve
     *     @var array $capabilities 
     * }
     * @param array $headerParameters {
     *     @var string $Authorization Auth header of the form: "ApiKey YOUR_TOKEN"
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jungle\Library\Generated\Model\LocationsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function locationsFind(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jungle\Library\Generated\Endpoint\LocationsFind($queryParameters, $headerParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://rest.ape.cafe/api/2023-05');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jungle\Library\Generated\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}