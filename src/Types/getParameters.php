<?php

namespace Nmo\AcsManager\Types;

class getParameters
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @var ArrayOfString $parameterNames
     */
    protected $parameterNames = null;

    /**
     * @param string $deviceIdentity
     * @param ArrayOfString $parameterNames
     */
    public function __construct($deviceIdentity, $parameterNames)
    {
      $this->deviceIdentity = $deviceIdentity;
      $this->parameterNames = $parameterNames;
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
     * @return getParameters
     */
    public function setDeviceIdentity($deviceIdentity)
    {
      $this->deviceIdentity = $deviceIdentity;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getParameterNames()
    {
      return $this->parameterNames;
    }

    /**
     * @param ArrayOfString $parameterNames
     * @return getParameters
     */
    public function setParameterNames($parameterNames)
    {
      $this->parameterNames = $parameterNames;
      return $this;
    }

}
