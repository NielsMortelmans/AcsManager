<?php

namespace Nmo\AcsManager\Types;

class removeProperty
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
     * @param string $deviceIdentity
     * @param string $propertyName
     */
    public function __construct($deviceIdentity, $propertyName)
    {
        $this->deviceIdentity = $deviceIdentity;
        $this->propertyName = $propertyName;
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
     * @return removeProperty
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
     * @return removeProperty
     */
    public function setPropertyName($propertyName)
    {
        $this->propertyName = $propertyName;
        return $this;
    }

}
