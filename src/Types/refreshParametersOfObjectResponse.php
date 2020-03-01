<?php

namespace Nmo\AcsManager\Types;

class refreshParametersOfObjectResponse
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
     * @return refreshParametersOfObjectResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }

}
