<?php

namespace Nmo\AcsManager\Types;

class connectionRequestSyncResponse
{

    /**
     * @var ConnectionRequestResult $return
     */
    protected $return = null;

    /**
     * @param ConnectionRequestResult $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return ConnectionRequestResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param ConnectionRequestResult $return
     * @return connectionRequestSyncResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }

}
