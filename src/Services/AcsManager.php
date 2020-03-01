<?php
/**
 * Created by PhpStorm.
 * User: nmortelmans
 * Date: 29/02/2020
 * Time: 17:09
 */

namespace Nmo\AcsManager\Services;


use Nmo\AcsManager\Types\getParameter;
use Nmo\AcsManager\Types\addDeviceToGroup;
use Nmo\AcsManager\Types\ArrayOfString;
use Nmo\AcsManager\Types\connectionRequest;
use Nmo\AcsManager\Types\connectionRequestSync;
use Nmo\AcsManager\Types\createDevice;
use Nmo\AcsManager\Types\createGroup;
use Nmo\AcsManager\Types\deleteGroup;
use Nmo\AcsManager\Types\editTask;
use Nmo\AcsManager\Types\factoryResetDevice;
use Nmo\AcsManager\Types\findActiveWan;
use Nmo\AcsManager\Types\findByProperty;
use Nmo\AcsManager\Types\findBySerialNumber;
use Nmo\AcsManager\Types\findFirmwares;
use Nmo\AcsManager\Types\getDescription;
use Nmo\AcsManager\Types\getDevice;
use Nmo\AcsManager\Types\getDevicesForGroup;
use Nmo\AcsManager\Types\getDomain;
use Nmo\AcsManager\Types\getParameters;
use Nmo\AcsManager\Types\getParametersOfObject;
use Nmo\AcsManager\Types\getProperty;
use Nmo\AcsManager\Types\getSettingValueProfileValue;
use Nmo\AcsManager\Types\getTaskDetails;
use Nmo\AcsManager\Types\getTasksForDevice;
use Nmo\AcsManager\Types\getTasksForGroup;
use Nmo\AcsManager\Types\getTaskStatus;
use Nmo\AcsManager\Types\isDeviceRegistered;
use Nmo\AcsManager\Types\rebootDevice;
use Nmo\AcsManager\Types\refreshParameter;
use Nmo\AcsManager\Types\refreshParameters;
use Nmo\AcsManager\Types\refreshParametersOfObject;
use Nmo\AcsManager\Types\removeDevice;
use Nmo\AcsManager\Types\removeDeviceFromGroup;
use Nmo\AcsManager\Types\removeProperty;
use Nmo\AcsManager\Types\removeTask;
use Nmo\AcsManager\Types\setDescription;
use Nmo\AcsManager\Types\setDomain;
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
     * @return AcsManager
     */
    public function setIdentity(string $identity): AcsManager
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentity(): string
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
     * @param string $groupName
     * @return AcsManager
     */
    public function addToGroup(string $groupName = null): AcsManager
    {
        $groupName = ($groupName === null) ? config('acsmanager.default_group') : $groupName;

        $this->result = ACSService::addDeviceToGroup(
            new addDeviceToGroup($this->identity, $groupName)
        );

        return $this;
    }

    /**
     * @return AcsManager
     */
    public function connect(): AcsManager
    {
        $this->result = ACSService::connectionRequest(
            new connectionRequest($this->identity)
        );

        return $this;
    }

    /**
     * @return AcsManager
     */
    public function connectSync(): AcsManager
    {
        $this->result = ACSService::connectionRequestSync(
            new connectionRequestSync($this->identity)
        );

        return $this;
    }

    /**
     *
     */
    public function createDevice(): AcsManager
    {
        $device = new createDevice($this->identity);
        $device->setAuthRequired(false)
            ->setPassword('xxx');
        $this->result = ACSService::createDevice(
            new createDevice($this->identity)
        );

        return $this;
    }

    /**
     * @param string $groupName
     * @return AcsManager
     */
    public function createGroup(string $groupName): AcsManager
    {
        $this->result = ACSService::createGroup(
            new createGroup($groupName)
        );

        return $this;
    }

    /**
     * @param string $groupName
     * @return AcsManager
     */
    public function deleteGroup(string $groupName): AcsManager
    {
        $this->result = ACSService::deleteGroup(
            new deleteGroup($groupName)
        );

        return $this;
    }

    /**
     * @param string $taskId
     * @param taskStruct $taskStruct
     * @return AcsManager
     */
    public function editTask(string $taskId, taskStruct $taskStruct): AcsManager
    {
        $this->result = ACSTaskService::editTask(
            new editTask($taskId, $taskStruct)
        );

        return $this;
    }

    /**
     * @return AcsManager
     */
    public function factoryReset(): AcsManager
    {
        $this->result = ACSService::factoryResetDevice(
            new FactoryResetDevice($this->identity)
        );

        return $this;
    }

    /**
     * @return AcsManager
     */
    public function findActiveWan(): AcsManager
    {
        $this->result = ACSService::findActiveWan(
            new findActiveWan($this->identity)
        );

        return $this;
    }

    /**
     * @param string $ip
     * @return AcsManager
     */
    public function findByIp(string $ip): AcsManager
    {
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            throw new \InvalidArgumentException("Invalid IP supplied: $ip");
        }
        $this->result = ACSService::findByIpAddress(
            new findByIpAddress($ip)
        );

        return $this;
    }

    /**
     * @param string $mac
     * @return AcsManager
     */
    public function findByMac(string $mac): AcsManager
    {
        if (!filter_var($mac, FILTER_VALIDATE_MAC)) {
            throw new \InvalidArgumentException("Invalid MAC supplied: $mac");
        }
        $this->result = ACSService::findByMacAddress(
            new findByMacAddress($mac)
        );
    }

    /**
     * @param string $propertyName
     * @param string $propertyValue
     * @return AcsManager
     */
    public function findByProperty(string $propertyName, string $propertyValue): AcsManager
    {
        $this->result = ACSService::findByProperty(
            new findByProperty($propertyName, $propertyValue)
        );

        return $this;
    }

    /**
     * @param string $serial
     * @return AcsManager
     */
    public function findBySerialNumber(string $serial): AcsManager
    {
        $this->result = ACSService::findBySerialNumber(
            new findBySerialNumber($serial)
        );

        return $this;
    }

    /**
     * @return AcsManager
     */
    public function findFirmwares(): AcsManager
    {
        $this->result = ACSService::findFirmwares(
            new findFirmwares($this->identity)
        );

        return $this;
    }

    /**
     * @return AcsManager
     */
    public function getDescription(): AcsManager
    {
        $this->result = ACSService::getDescription(
            new getDescription($this->identity)
        );

        return $this;
    }

    /**
     * @return AcsManager
     */
    public function getDevice(): AcsManager
    {
        $this->result = ACSService::getDevice(
            new getDevice($this->identity)
        );

        return $this;
    }

    /**
     * @param $groupName
     * @param $limit
     * @return AcsManager
     */
    public function getDevicesForGroup($groupName, $limit): AcsManager
    {
        $this->result = ACSService::getDevicesForGroup(
            new getDevicesForGroup($groupName,$limit)
        );

        return $this;
    }

    /**
     * @return AcsManager
     */
    public function getDomain(): AcsManager
    {
        $this->result = ACSService::getDomain(
            new getDomain($this->identity)
        );

        return $this;
    }

    /**
     * @param string $parameterName
     * @return AcsManager
     */
    public function getParameter(string $parameterName): AcsManager
    {
        $this->result = ACSService::getParameter(
            new getParameter($this->identity, $parameterName)
        );
        return $this;
    }

    /**
     * @param ArrayOfString $parameters
     * @return AcsManager
     */
    public function getParameters(ArrayOfString $parameters): AcsManager
    {
        $this->result = ACSService::getParameters(
            new getParameters($this->identity, $parameters)
        );
    }

    /**
     * @param string $parentObject
     * @return AcsManager
     */
    public function getParametersOfObject(string $parentObject): AcsManager
    {
        $this->result = ACSService::getParametersOfObject(
            new getParametersOfObject($this->identity, $parentObject)
        );

        return $this;
    }

    /**
     * @param string $propertyName
     * @return AcsManager
     */
    public function getProperty(string $propertyName): AcsManager
    {
        $this->result = ACSService::getProperty(
            new getProperty($this->identity, $propertyName)
        );
        return $this;
    }

    /**
     * @param string $propertyName
     * @return AcsManager
     */
    public function getSettingValueProfile(string $propertyName): AcsManager
    {
        $this->result = ACSService::getSettingValueProfile(
            new getSettingValueProfileValue($this->identity, $propertyName)
        );
        return $this;
    }

    /**
     * @param string $taskId
     * @return AcsManager
     */
    public function getTaskDetails(string $taskId): AcsManager
    {
        $this->result = ACSTaskService::getTaskDetails(
            new getTaskDetails($taskId)
        );

        return $this;
    }

    /**
     * @return AcsManager
     */
    public function getTasksForDevice(): AcsManager
    {
        $this->result = ACSTaskService::getTasksForDevice(
            new getTasksForDevice($this->identity)
        );

        return $this;
    }

    /**
     * @param string $groupName
     * @return AcsManager
     */
    public function getTasksForGroup(string $groupName): AcsManager
    {
        $this->result = ACSTaskService::getTasksForGroup(
            new getTasksForGroup($groupName)
        );

        return $this;
    }

    /**
     * @param string $taskId
     * @return AcsManager
     */
    public function getTaskStatus(string $taskId): AcsManager
    {
        $this->result = $this->getTaskStatus(
            new getTaskStatus($taskId)
        );
        return $this;
    }

    /**
     * @return AcsManager
     */
    public function isDeviceRegistered(): AcsManager
    {
        $this->result = ACSService::isDeviceRegistered(
            new isDeviceRegistered($this->identity)
        );

        return $this;
    }

    /**
     * @return AcsManager
     */
    public function rebootDevice(): AcsManager
    {
        $this->result = ACSService::rebootDevice(
            new rebootDevice($this->identity)
        );

        return $this;
    }

    /**
     * @param string $parameterName
     * @return AcsManager
     */
    public function refreshParameter(string $parameterName): AcsManager
    {
        $this->result = ACSService::refreshParameter(
            new refreshParameter($this->identity, $parameterName)
        );

        return $this;
    }

    /**
     * @param ArrayOfString $parameterNames
     * @return AcsManager
     */
    public function refreshParameters(ArrayOfString $parameterNames): AcsManager
    {
        $this->result = ACSService::refreshParameters(
            new refreshParameters($this->identity, $parameterNames)
        );

        return $this;
    }

    /**
     * @param string $parentObject
     * @return AcsManager
     */
    public function refreshParametersOfObject(string $parentObject): AcsManager
    {
        $this->result = ACSService::refreshParametersOfObject(
            new refreshParametersOfObject($this->identity, $parentObject)
        );

        return $this;
    }

    /**
     * @return AcsManager
     */
    public function removeDevice(): AcsManager
    {
        $this->result = ACSService::removeDevice(
            new removeDevice($this->identity)
        );

        return $this;
    }

    /**
     * @param string $groupName
     * @return AcsManager
     */
    public function removeDeviceFromGroup(string $groupName): AcsManager
    {
        $this->result = ACSService::removeDeviceFromGroup(
            new removeDeviceFromGroup($this->identity, $groupName)
        );

        return $this;
    }

    /**
     * @param string $propertyName
     * @return AcsManager
     */
    public function removeProperty(string $propertyName): AcsManager
    {
        $this->result = ACSService::removeProperty(
            new removeProperty($this->identity, $propertyName)
        );

        return $this;
    }

    /**
     * @param string $taskId
     * @return AcsManager
     */
    public function removeTask(string $taskId): AcsManager
    {
        $this->result = ACSTaskService::removeTask(
            new removeTask($taskId)
        );

        return $this;
    }

    /**
     * @param taskStruct $taskStruct
     * @return AcsManager
     */
    public function scheduleTaskForDevice(taskStruct $taskStruct): AcsManager
    {
        $this->result = ACSTaskService::scheduleTaskForDevice(
            new scheduleTaskForDevice($this->identity,$taskStruct)
        );

        return $this;
    }

    /**
     * @param string $groupName
     * @param taskStruct $taskStruct
     * @return AcsManager
     */
    public function scheduleTaskForGroup(string $groupName, taskStruct $taskStruct): AcsManager
    {
        $this->result = ACSTaskService::scheduleTaskForGroup(
            new scheduleTaskForGroup($groupName,$taskStruct)
        );

        return $this;
    }

    /**
     * @param string $templateName
     * @return AcsManager
     */
    public function scheduleTaskFromTemplate(string $templateName): AcsManager
    {
        $this->result = ACSTaskService::scheduleTaskFromTemplate(
            new scheduleTaskFromTemplate($this->identity,$templateName)
        );

        return $this;
    }

    /**
     * @param string $description
     * @return AcsManager
     */
    public function setDescription(string $description): AcsManager
    {
        $this->result = ACSService::setDescription(
            new setDescription($this->identity, $description)
        );

        return $this;
    }

    /**
     * @param string $domain
     * @return AcsManager
     */
    public function setDomain(string $domain): AcsManager
    {
        $this->result = ACSService::setDomain(
            new setDomain($this->identity, $domain)
        );

        return $this;
    }

    /**
     * @param string $parameterName
     * @param string $parameterValue
     * @return AcsManager
     */
    public function setParameter(string $parameterName, $parameterValue): AcsManager
    {
        $this->result = ACSService::setParameter(
            new setParameter($this->identity, $parameterName, $parameterValue)
        );

        return $this;
    }

    /**
     * @param string2stringLinkedHashMap $parametersMap
     * @return AcsManager
     */
    public function setParameters(string2stringLinkedHashMap $parametersMap): AcsManager
    {
        $this->result = ACSService::setParameters(
            new setParameters($this->identity, $parametersMap)
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
        $this->result = ACSService::setProperty(
            new setProperty($this->identity, $propertyName, $propertyValue)
        );

        return $this;
    }

    /**
     *
     */
    public function refreshDataModel()
    {
        $this->scheduleTaskFromTemplate('refreshDataModelTemplate');
    }

    /**
     *
     */
    public function create()
    {
        $this->createDevice();
    }

    /**
     * @return AcsManager
     */
    public function reboot(): AcsManager
    {
        return $this->rebootDevice();
    }

    /**
     * @return AcsManager
     */
    public function delete(): AcsManager
    {
        return $this->removeDevice();
    }


    /**
     * @return AcsManager
     */
    public function exists(): AcsManager
    {
        return $this->isDeviceRegistered();
    }
}