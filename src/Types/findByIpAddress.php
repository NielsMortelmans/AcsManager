<?php

namespace Nmo\AcsManager\Types;

class findByIpAddress
{

    /**
     * @var string $ipAddress
     */
    protected $ipAddress = null;

    /**
     * @param string $ipAddress
     */
    public function __construct($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return findByIpAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

}
