<?php
namespace Nmo\AcsManager\Types;

class refreshParameters
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
     * @return refreshParameters
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
     * @return refreshParameters
     */
    public function setParameterNames($parameterNames)
    {
      $this->parameterNames = $parameterNames;
      return $this;
    }

}
