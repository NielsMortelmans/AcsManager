<?php

namespace Nmo\AcsManager\Types;

class getTasksForDevice
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;


    public function __construct(string $deviceIdentity)
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
     * @return getTasksForDevice
     */
    public function setDeviceIdentity($deviceIdentity)
    {
        $this->deviceIdentity = $deviceIdentity;
        return $this;
    }

}
