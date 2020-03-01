<?php

namespace Nmo\AcsManager\Types;


class getDomain
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @param string $deviceIdentity
     */
    public function __construct($deviceIdentity)
    {
        $this->deviceIdentity = $deviceIdentity;
    }

    /**
     * @return string
     */
    public function getDeviceIdentity()
    {
        return $this->deviceIdentity;
    }

    /**
     * @param string $deviceIdentity
     * @return getDomain
     */
    public function setDeviceIdentity($deviceIdentity)
    {
        $this->deviceIdentity = $deviceIdentity;
        return $this;
    }

}
