<?php

namespace Nmo\AcsManager\Types;

class getParametersOfObject
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @var string $parentObject
     */
    protected $parentObject = null;

    /**
     * @param string $deviceIdentity
     * @param string $parentObject
     */
    public function __construct($deviceIdentity, $parentObject)
    {
      $this->deviceIdentity = $deviceIdentity;
      $this->parentObject = $parentObject;
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
     * @return getParametersOfObject
     */
    public function setDeviceIdentity($deviceIdentity)
    {
      $this->deviceIdentity = $deviceIdentity;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentObject()
    {
      return $this->parentObject;
    }

    /**
     * @param string $parentObject
     * @return getParametersOfObject
     */
    public function setParentObject($parentObject)
    {
      $this->parentObject = $parentObject;
      return $this;
    }

}
