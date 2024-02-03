<?php

namespace Jungle\Library\Generated\Model;

class LocationModelWithRelations
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
     * ID of this Location
     *
     * @var string
     */
    protected $id;
    /**
     * Name of this Location
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var XidModel[]
     */
    protected $xids;
    /**
     * ID of this Location
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * ID of this Location
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Name of this Location
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of this Location
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
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