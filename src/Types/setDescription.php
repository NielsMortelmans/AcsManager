<?php

class setDescription
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param string $deviceIdentity
     * @param string $description
     */
    public function __construct($deviceIdentity, $description)
    {
      $this->deviceIdentity = $deviceIdentity;
      $this->description = $description;
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
     * @return setDescription
     */
    public function setDeviceIdentity($deviceIdentity)
    {
      $this->deviceIdentity = $deviceIdentity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return setDescription
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
