<?php

namespace Jungle\Library\Generated\Model;

class LocationsGetResponse200 extends \ArrayObject
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
     * @var LocationModelWithRelations[]
     */
    protected $results;
    /**
     * 
     *
     * @var PageInfo
     */
    protected $pageInfo;
    /**
     * 
     *
     * @return LocationModelWithRelations[]
     */
    public function getResults() : array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param LocationModelWithRelations[] $results
     *
     * @return self
     */
    public function setResults(array $results) : self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
    /**
     * 
     *
     * @return PageInfo
     */
    public function getPageInfo() : PageInfo
    {
        return $this->pageInfo;
    }
    /**
     * 
     *
     * @param PageInfo $pageInfo
     *
     * @return self
     */
    public function setPageInfo(PageInfo $pageInfo) : self
    {
        $this->initialized['pageInfo'] = true;
        $this->pageInfo = $pageInfo;
        return $this;
    }
}