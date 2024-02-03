<?php

namespace Jungle\Library\Generated\Model;

class InventoryModelWithRelations
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The quantity of this product available at the location
     *
     * @var float
     */
    protected $available;
    /**
     * ID of the location where this inventory is located
     *
     * @var string
     */
    protected $locationId;
    /**
     * Stock keeping unit of the inventory
     *
     * @var string
     */
    protected $sku;
    /**
     * 
     *
     * @var ProductModel
     */
    protected $product;
    /**
     * The quantity of this product available at the location
     *
     * @return float
     */
    public function getAvailable() : float
    {
        return $this->available;
    }
    /**
     * The quantity of this product available at the location
     *
     * @param float $available
     *
     * @return self
     */
    public function setAvailable(float $available) : self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
        return $this;
    }
    /**
     * ID of the location where this inventory is located
     *
     * @return string
     */
    public function getLocationId() : string
    {
        return $this->locationId;
    }
    /**
     * ID of the location where this inventory is located
     *
     * @param string $locationId
     *
     * @return self
     */
    public function setLocationId(string $locationId) : self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
    /**
     * Stock keeping unit of the inventory
     *
     * @return string
     */
    public function getSku() : string
    {
        return $this->sku;
    }
    /**
     * Stock keeping unit of the inventory
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku) : self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * 
     *
     * @return ProductModel
     */
    public function getProduct() : ProductModel
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param ProductModel $product
     *
     * @return self
     */
    public function setProduct(ProductModel $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
}