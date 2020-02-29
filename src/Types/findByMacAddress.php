<?php

class findByMacAddress
{

    /**
     * @var string $macAddress
     */
    protected $macAddress = null;

    /**
     * @param string $macAddress
     */
    public function __construct($macAddress)
    {
      $this->macAddress = $macAddress;
    }

    /**
     * @return string
     */
    public function getMacAddress()
    {
      return $this->macAddress;
    }

    /**
     * @param string $macAddress
     * @return findByMacAddress
     */
    public function setMacAddress($macAddress)
    {
      $this->macAddress = $macAddress;
      return $this;
    }

}
