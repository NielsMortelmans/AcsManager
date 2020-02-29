<?php

class findBySerialNumber
{

    /**
     * @var string $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @param string $serialNumber
     */
    public function __construct($serialNumber)
    {
      $this->serialNumber = $serialNumber;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     * @return findBySerialNumber
     */
    public function setSerialNumber($serialNumber)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

}
