<?php

namespace Nmo\AcsManager;

class getParameterResponse
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
     * @return getParameterResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }

}
