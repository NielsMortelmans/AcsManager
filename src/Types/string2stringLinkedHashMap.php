<?php

namespace Nmo\AcsManager\Types;

class string2stringLinkedHashMap
{

    /**
     * @var entry[] $entry
     */
    protected $entry = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return entry[]
     */
    public function getEntry()
    {
      return $this->entry;
    }

    /**
     * @param entry[] $entry
     * @return string2stringLinkedHashMap
     */
    public function setEntry(array $entry = null)
    {
      $this->entry = $entry;
      return $this;
    }

}
