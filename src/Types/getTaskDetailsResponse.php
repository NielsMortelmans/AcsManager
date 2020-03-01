<?php

namespace Nmo\AcsManager\Types;

class getTaskDetailsResponse
{

    /**
     * @var taskStruct $return
     */
    protected $return = null;


    public function __construct()
    {

    }

    /**
     * @return taskStruct
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param taskStruct $return
     * @return getTaskDetailsResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }

}
