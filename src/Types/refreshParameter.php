<?php

namespace Nmo\AcsManager\Types;

class refreshParameter
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @var string $parameterName
     */
    protected $parameterName = null;

    /**
     * @param string $deviceIdentity
     * @param string $parameterName
     */
    public function __construct($deviceIdentity, $parameterName)
    {
        $this->deviceIdentity = $deviceIdentity;
        $this->parameterName = $parameterName;
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
     * @return refreshParameter
     */
    public function setDeviceIdentity($deviceIdentity)
    {
        $this->deviceIdentity = $deviceIdentity;
        return $this;
    }

    /**
     * @return string
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * @param string $parameterName
     * @return refreshParameter
     */
    public function setParameterName($parameterName)
    {
        $this->parameterName = $parameterName;
        return $this;
    }

}
