<?php

namespace Jungle\Library\Generated\Model;

class XidModel
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
     * External ID string
     *
     * @var string
     */
    protected $xid;
    /**
     * External ID string
     *
     * @return string
     */
    public function getXid() : string
    {
        return $this->xid;
    }
    /**
     * External ID string
     *
     * @param string $xid
     *
     * @return self
     */
    public function setXid(string $xid) : self
    {
        $this->initialized['xid'] = true;
        $this->xid = $xid;
        return $this;
    }
}