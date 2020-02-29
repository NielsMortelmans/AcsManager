<?php

class setDomain
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @param string $deviceIdentity
     * @param string $domain
     */
    public function __construct($deviceIdentity, $domain)
    {
      $this->deviceIdentity = $deviceIdentity;
      $this->domain = $domain;
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
     * @return setDomain
     */
    public function setDeviceIdentity($deviceIdentity)
    {
      $this->deviceIdentity = $deviceIdentity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
      return $this->domain;
    }

    /**
     * @param string $domain
     * @return setDomain
     */
    public function setDomain($domain)
    {
      $this->domain = $domain;
      return $this;
    }

}
