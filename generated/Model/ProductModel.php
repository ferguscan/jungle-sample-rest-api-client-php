<?php

namespace Jungle\Library\Generated\Model;

class ProductModel
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
     * 
     *
     * @var XidModel[]
     */
    protected $xids;
    /**
     * 
     *
     * @return XidModel[]
     */
    public function getXids() : array
    {
        return $this->xids;
    }
    /**
     * 
     *
     * @param XidModel[] $xids
     *
     * @return self
     */
    public function setXids(array $xids) : self
    {
        $this->initialized['xids'] = true;
        $this->xids = $xids;
        return $this;
    }
}