<?php

namespace Nmo\AcsManager\Types;

class setProperty
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @var string $propertyName
     */
    protected $propertyName = null;

    /**
     * @var string $propertyValue
     */
    protected $propertyValue = null;

    /**
     * @param string $deviceIdentity
     * @param string $propertyName
     * @param string $propertyValue
     */
    public function __construct($deviceIdentity, $propertyName, $propertyValue)
    {
      $this->deviceIdentity = $deviceIdentity;
      $this->propertyName = $propertyName;
      $this->propertyValue = $propertyValue;
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
     * @return setProperty
     */
    public function setDeviceIdentity($deviceIdentity)
    {
      $this->deviceIdentity = $deviceIdentity;
      return $this;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
      return $this->propertyName;
    }

    /**
     * @param string $propertyName
     * @return setProperty
     */
    public function setPropertyName($propertyName)
    {
      $this->propertyName = $propertyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPropertyValue()
    {
      return $this->propertyValue;
    }

    /**
     * @param string $propertyValue
     * @return setProperty
     */
    public function setPropertyValue($propertyValue)
    {
      $this->propertyValue = $propertyValue;
      return $this;
    }

}
