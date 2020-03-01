<?php

namespace Nmo\AcsManager\Types;

class getDomainResponse
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
     * @return getDomainResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }

}
