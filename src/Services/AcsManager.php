<?php
/**
 * Created by PhpStorm.
 * User: nmortelmans
 * Date: 29/02/2020
 * Time: 17:09
 */

namespace Nmo\AcsManager\Services;


use Nmo\AcsManager\Facades\Acs;
use Nmo\AcsManager\Types\addDeviceToGroup;
use Nmo\AcsManager\Types\connectionRequestSync;
use Nmo\AcsManager\Types\createDevice;
use Nmo\AcsManager\Types\factoryResetDevice;
use Nmo\AcsManager\Types\isDeviceRegistered;
use Nmo\AcsManager\Types\rebootDevice;
use Nmo\AcsManager\Types\removeDevice;
use Nmo\AcsManager\Types\removeProperty;
use Nmo\AcsManager\Types\setParameter;
use Nmo\AcsManager\Types\setParameters;
use Nmo\AcsManager\Types\setProperty;
use Nmo\AcsManager\Types\string2stringLinkedHashMap;

/**
 * Class AcsManager
 * @package Nmo\AcsManager
 */
class AcsManager
{
    /**
     * @var string
     */
    private $identity;

    /**
     * @var mixed
     */
    private $result;

    /**
     * @param string $identity
     * @return $this
     */
    public function setIdentity(string $identity)
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return $this
     */
    public function factoryReset()
    {
        $this->result = Acs::factoryResetDevice(
            new FactoryResetDevice($this->identity)
        );

        return $this;
    }

    /**
     * @param string $parameterName
     * @param string $parameterValue
     * @return $this
     */
    public function setParameter(string $parameterName, $parameterValue): AcsManager
    {
        $this->result = Acs::setParameter(
            new setParameter($this->identity, $parameterName, $parameterValue)
        );

        return $this;
    }

    /**
     * @param string $propertyName
     * @param string $propertyValue
     * @return AcsManager
     */
    public function setProperty(string $propertyName, string $propertyValue): AcsManager
    {
        $this->result = Acs::setProperty(
            new setProperty($this->identity, $propertyName, $propertyValue)
        );

        return $this;
    }

    /**
     * @param string $propertyName
     * @return AcsManager
     */
    public function removeProperty(string $propertyName): AcsManager
    {
        $this->result = Acs::removeProperty(
            new removeProperty($this->identity,$propertyName)
        );

        return $this;
    }

    /**
     * @param string $groupName
     * @return $this
     */
    public function setGroup(string $groupName = null)
    {
        $groupName = ($groupName === null) ? config('acsmanager.default_group') : $groupName;

        $this->result = Acs::addDeviceToGroup(
            new addDeviceToGroup($this->identity, $groupName)
        );

        return $this;
    }

    /**
     *
     */
    public function refreshDatamodel()
    {
        //TODO IMPLEMENT

    }

    /**
     * @return $this
     */
    public function sync()
    {
        $this->result = Acs::connectionRequestSync(
            new connectionRequestSync($this->identity)
        );

        return $this;
    }

    /**
     * @return $this
     */
    public function exists()
    {
        $this->result = Acs::isDeviceRegistered(
            new isDeviceRegistered($this->identity)
        );

        return $this;
    }

    /**
     *
     */
    public function create()
    {
        $device = new createDevice($this->identity);
        $device->setAuthRequired(false)
               ->setPassword('xxx');
        $this->result = Acs::createDevice(
            new createDevice($this->identity)
        );

        return $this;
    }

    public function reboot(): AcsManager
    {
        $this->result = Acs::rebootDevice(
          new rebootDevice($this->identity)
        );

        return $this;
    }

    public function delete(): AcsManager
    {
        $this->result = Acs::removeDevice(
            new removeDevice($this->identity)
        );

        return $this;
    }
}