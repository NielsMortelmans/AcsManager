<?php

namespace Nmo\AcsManager\Types;

class setParameters
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @var string2stringLinkedHashMap $parametersMap
     */
    protected $parametersMap = null;

    /**
     * @param string $deviceIdentity
     * @param string2stringLinkedHashMap $parametersMap
     */
    public function __construct($deviceIdentity, $parametersMap)
    {
      $this->deviceIdentity = $deviceIdentity;
      $this->parametersMap = $parametersMap;
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
     * @return setParameters
     */
    public function setDeviceIdentity($deviceIdentity)
    {
      $this->deviceIdentity = $deviceIdentity;
      return $this;
    }

    /**
     * @return string2stringLinkedHashMap
     */
    public function getParametersMap()
    {
      return $this->parametersMap;
    }

    /**
     * @param string2stringLinkedHashMap $parametersMap
     * @return setParameters
     */
    public function setParametersMap($parametersMap)
    {
      $this->parametersMap = $parametersMap;
      return $this;
    }

}
