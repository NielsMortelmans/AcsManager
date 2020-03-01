<?php

namespace Nmo\AcsManager\Types;

class findFirmwaresResponse
{

    /**
     * @var ArrayOfResourceStruct $return
     */
    protected $return = null;


    public function __construct()
    {

    }

    /**
     * @return ArrayOfResourceStruct
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param ArrayOfResourceStruct $return
     * @return findFirmwaresResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }

}
