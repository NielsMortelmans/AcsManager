<?php

namespace Nmo\AcsManager\Types;

class getPropertyResponse
{

    /**
     * @var string $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param string $return
     * @return getPropertyResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
