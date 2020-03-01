<?php

namespace Nmo\AcsManager\Types;

class findByPropertyResponse
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
     * @return findByPropertyResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }

}
