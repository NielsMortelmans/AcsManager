<?php

namespace Nmo\AcsManager\Types;

class getTasksForDeviceResponse
{

    /**
     * @var string[] $return
     */
    protected $return = null;


    public function __construct()
    {

    }

    /**
     * @return string[]
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param string[] $return
     * @return getTasksForDeviceResponse
     */
    public function setReturn(array $return = null)
    {
        $this->return = $return;
        return $this;
    }

}
