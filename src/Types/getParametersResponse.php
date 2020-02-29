<?php

namespace Nmo\AcsManager\Types;

class getParametersResponse
{

    /**
     * @var string2stringLinkedHashMap $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string2stringLinkedHashMap
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param string2stringLinkedHashMap $return
     * @return getParametersResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
