<?php

namespace Nmo\AcsManager\Types;

class setParameter
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
     * @var string $parameterValue
     */
    protected $parameterValue = null;

    /**
     * @param string $deviceIdentity
     * @param string $parameterName
     * @param string $parameterValue
     */
    public function __construct($deviceIdentity, $parameterName, $parameterValue)
    {
      $this->deviceIdentity = $deviceIdentity;
      $this->parameterName = $parameterName;
      $this->parameterValue = $parameterValue;
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
     * @return setParameter
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
     * @return setParameter
     */
    public function setParameterName($parameterName)
    {
      $this->parameterName = $parameterName;
      return $this;
    }

    /**
     * @return string
     */
    public function getParameterValue()
    {
      return $this->parameterValue;
    }

    /**
     * @param string $parameterValue
     * @return setParameter
     */
    public function setParameterValue($parameterValue)
    {
      $this->parameterValue = $parameterValue;
      return $this;
    }

}
