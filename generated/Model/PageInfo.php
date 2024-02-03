<?php

namespace Jungle\Library\Generated\Model;

class PageInfo
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
     * @var bool
     */
    protected $hasMore;
    /**
     * 
     *
     * @var float
     */
    protected $limit;
    /**
     * 
     *
     * @var string
     */
    protected $nextCursor;
    /**
     * 
     *
     * @return bool
     */
    public function getHasMore() : bool
    {
        return $this->hasMore;
    }
    /**
     * 
     *
     * @param bool $hasMore
     *
     * @return self
     */
    public function setHasMore(bool $hasMore) : self
    {
        $this->initialized['hasMore'] = true;
        $this->hasMore = $hasMore;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLimit() : float
    {
        return $this->limit;
    }
    /**
     * 
     *
     * @param float $limit
     *
     * @return self
     */
    public function setLimit(float $limit) : self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNextCursor() : string
    {
        return $this->nextCursor;
    }
    /**
     * 
     *
     * @param string $nextCursor
     *
     * @return self
     */
    public function setNextCursor(string $nextCursor) : self
    {
        $this->initialized['nextCursor'] = true;
        $this->nextCursor = $nextCursor;
        return $this;
    }
}