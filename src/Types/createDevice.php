<?php

namespace Nmo\AcsManager\Types;

class createDevice
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @var boolean $authRequired
     */
    protected $authRequired = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $deviceIdentity
     */
    public function __construct($deviceIdentity)
    {
        $this->deviceIdentity = $deviceIdentity;
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
     * @return createDevice
     */
    public function setDeviceIdentity($deviceIdentity)
    {
        $this->deviceIdentity = $deviceIdentity;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAuthRequired()
    {
        return $this->authRequired;
    }

    /**
     * @param boolean $authRequired
     * @return createDevice
     */
    public function setAuthRequired($authRequired)
    {
        $this->authRequired = $authRequired;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return createDevice
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

}
