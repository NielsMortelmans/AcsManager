<?php
namespace Nmo\AcsManager\Types;

class findBySerialNumberResponse
{

    /**
     * @var ArrayOfString $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param ArrayOfString $return
     * @return findBySerialNumberResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
