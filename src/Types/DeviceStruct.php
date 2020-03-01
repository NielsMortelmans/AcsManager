<?php

namespace Nmo\AcsManager\Types;

class DeviceStruct
{

    /**
     * @var \DateTime $creationTime
     */
    protected $creationTime = null;

    /**
     * @var string $currentWanIP
     */
    protected $currentWanIP = null;

    /**
     * @var string $hardwareVersion
     */
    protected $hardwareVersion = null;

    /**
     * @var \DateTime $lastVisitTime
     */
    protected $lastVisitTime = null;

    /**
     * @var int $logLevel
     */
    protected $logLevel = null;

    /**
     * @var string $modelName
     */
    protected $modelName = null;

    /**
     * @var string $oui
     */
    protected $oui = null;

    /**
     * @var string2stringLinkedHashMap $properties
     */
    protected $properties = null;

    /**
     * @var string $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @var string $softwareVersion
     */
    protected $softwareVersion = null;

    /**
     * @param \DateTime $creationTime
     * @param string $currentWanIP
     * @param string $hardwareVersion
     * @param \DateTime $lastVisitTime
     * @param int $logLevel
     * @param string $modelName
     * @param string $oui
     * @param string2stringLinkedHashMap $properties
     * @param string $serialNumber
     * @param string $softwareVersion
     */
    public function __construct(\DateTime $creationTime, $currentWanIP, $hardwareVersion, \DateTime $lastVisitTime, $logLevel, $modelName, $oui, $properties, $serialNumber, $softwareVersion)
    {
        $this->creationTime = $creationTime->format(\DateTime::ATOM);
        $this->currentWanIP = $currentWanIP;
        $this->hardwareVersion = $hardwareVersion;
        $this->lastVisitTime = $lastVisitTime->format(\DateTime::ATOM);
        $this->logLevel = $logLevel;
        $this->modelName = $modelName;
        $this->oui = $oui;
        $this->properties = $properties;
        $this->serialNumber = $serialNumber;
        $this->softwareVersion = $softwareVersion;
    }

    /**
     * @return \DateTime
     */
    public function getCreationTime()
    {
        if ($this->creationTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->creationTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $creationTime
     * @return DeviceStruct
     */
    public function setCreationTime(\DateTime $creationTime)
    {
        $this->creationTime = $creationTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentWanIP()
    {
        return $this->currentWanIP;
    }

    /**
     * @param string $currentWanIP
     * @return DeviceStruct
     */
    public function setCurrentWanIP($currentWanIP)
    {
        $this->currentWanIP = $currentWanIP;
        return $this;
    }

    /**
     * @return string
     */
    public function getHardwareVersion()
    {
        return $this->hardwareVersion;
    }

    /**
     * @param string $hardwareVersion
     * @return DeviceStruct
     */
    public function setHardwareVersion($hardwareVersion)
    {
        $this->hardwareVersion = $hardwareVersion;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastVisitTime()
    {
        if ($this->lastVisitTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->lastVisitTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $lastVisitTime
     * @return DeviceStruct
     */
    public function setLastVisitTime(\DateTime $lastVisitTime)
    {
        $this->lastVisitTime = $lastVisitTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getLogLevel()
    {
        return $this->logLevel;
    }

    /**
     * @param int $logLevel
     * @return DeviceStruct
     */
    public function setLogLevel($logLevel)
    {
        $this->logLevel = $logLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * @param string $modelName
     * @return DeviceStruct
     */
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOui()
    {
        return $this->oui;
    }

    /**
     * @param string $oui
     * @return DeviceStruct
     */
    public function setOui($oui)
    {
        $this->oui = $oui;
        return $this;
    }

    /**
     * @return string2stringLinkedHashMap
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param string2stringLinkedHashMap $properties
     * @return DeviceStruct
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
        return $this;
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
     * @return DeviceStruct
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSoftwareVersion()
    {
        return $this->softwareVersion;
    }

    /**
     * @param string $softwareVersion
     * @return DeviceStruct
     */
    public function setSoftwareVersion($softwareVersion)
    {
        $this->softwareVersion = $softwareVersion;
        return $this;
    }

}
