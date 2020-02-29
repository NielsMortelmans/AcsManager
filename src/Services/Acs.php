<?php
namespace Nmo\AcsManager\Services;

use Nmo\AcsManager\Types\addDeviceToGroup;
use Nmo\AcsManager\Types\addDeviceToGroupResponse;
use Nmo\AcsManager\Types\connectionRequest;
use Nmo\AcsManager\Types\connectionRequestResponse;
use Nmo\AcsManager\Types\connectionRequestSync;
use Nmo\AcsManager\Types\connectionRequestSyncResponse;
use Nmo\AcsManager\Types\createDevice;
use Nmo\AcsManager\Types\createDeviceResponse;
use Nmo\AcsManager\Types\createGroup;
use Nmo\AcsManager\Types\createGroupResponse;
use Nmo\AcsManager\Types\deleteGroup;
use Nmo\AcsManager\Types\deleteGroupResponse;
use Nmo\AcsManager\Types\factoryResetDevice;
use Nmo\AcsManager\Types\findBySerialNumberResponse;
use Nmo\AcsManager\Types\findFirmwares;
use Nmo\AcsManager\Types\findFirmwaresResponse;
use Nmo\AcsManager\Types\getDescription;
use Nmo\AcsManager\Types\getDescriptionResponse;
use Nmo\AcsManager\Types\getDevice;
use Nmo\AcsManager\Types\getDeviceResponse;
use Nmo\AcsManager\Types\getDevicesForGroup;
use Nmo\AcsManager\Types\getDevicesForGroupResponse;
use Nmo\AcsManager\Types\getDomain;
use Nmo\AcsManager\Types\getDomainResponse;
use Nmo\AcsManager\Types\getParameters;
use Nmo\AcsManager\Types\getParametersOfObject;
use Nmo\AcsManager\Types\getParametersOfObjectResponse;
use Nmo\AcsManager\Types\getParametersResponse;
use Nmo\AcsManager\Types\getProperty;
use Nmo\AcsManager\Types\getPropertyResponse;
use Nmo\AcsManager\Types\getSettingValueProfileValue;
use Nmo\AcsManager\Types\getSettingValueProfileValueResponse;
use Nmo\AcsManager\Types\getTaskStatus;
use Nmo\AcsManager\Types\getTaskStatusResponse;
use Nmo\AcsManager\Types\isDeviceRegistered;
use Nmo\AcsManager\Types\isDeviceRegisteredResponse;
use Nmo\AcsManager\Types\rebootDevice;
use Nmo\AcsManager\Types\rebootDeviceResponse;
use Nmo\AcsManager\Types\refreshParameter;
use Nmo\AcsManager\Types\refreshParameterResponse;
use Nmo\AcsManager\Types\refreshParameters;
use Nmo\AcsManager\Types\refreshParametersOfObject;
use Nmo\AcsManager\Types\refreshParametersOfObjectResponse;
use Nmo\AcsManager\Types\refreshParametersResponse;
use Nmo\AcsManager\Types\removeDevice;
use Nmo\AcsManager\Types\removeDeviceFromGroup;
use Nmo\AcsManager\Types\removeDeviceFromGroupResponse;
use Nmo\AcsManager\Types\removeDeviceResponse;
use Nmo\AcsManager\Types\removeProperty;
use Nmo\AcsManager\Types\removePropertyResponse;
use Nmo\AcsManager\Types\setDomainResponse;
use Nmo\AcsManager\Types\setParameter;
use Nmo\AcsManager\Types\setParameterResponse;
use Nmo\AcsManager\Types\setParameters;
use Nmo\AcsManager\Types\setParametersResponse;
use Nmo\AcsManager\Types\setProperty;
use Nmo\AcsManager\Types\setPropertyResponse;
use setDescription;
use setDescriptionResponse;
use setDomain;

class Acs extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfString' => '\\Nmo\\AcsManager\\Types\\ArrayOfString',
      'ArrayOfResourceStruct' => '\\Nmo\\AcsManager\\Types\\ArrayOfResourceStruct',
      'TaskStatus' => '\\Nmo\\AcsManager\\Types\\TaskStatus',
      'ConnectionRequestResult' => '\\Nmo\\AcsManager\\Types\\ConnectionRequestResult',
      'ResourceStruct' => '\\Nmo\\AcsManager\\Types\\ResourceStruct',
      'DeviceStruct' => '\\Nmo\\AcsManager\\Types\\DeviceStruct',
      'string2stringLinkedHashMap' => '\\Nmo\\AcsManager\\Types\\string2stringLinkedHashMap',
      'entry' => '\\Nmo\\AcsManager\\Types\\entry',
      'WSException' => '\\Nmo\\AcsManager\\Types\\WSException',
      'getDomain' => '\\Nmo\\AcsManager\\Types\\getDomain',
      'getDomainResponse' => '\\Nmo\\AcsManager\\Types\\getDomainResponse',
      'getDevice' => '\\Nmo\\AcsManager\\Types\\getDevice',
      'getDeviceResponse' => '\\Nmo\\AcsManager\\Types\\getDeviceResponse',
      'getParameters' => '\\Nmo\\AcsManager\\Types\\getParameters',
      'getParametersResponse' => '\\Nmo\\AcsManager\\Types\\getParametersResponse',
      'findActiveWan' => '\\Nmo\\AcsManager\\Types\\findActiveWan',
      'findActiveWanResponse' => '\\Nmo\\AcsManager\\Types\\findActiveWanResponse',
      'getDescription' => '\\Nmo\\AcsManager\\Types\\getDescription',
      'getDescriptionResponse' => '\\Nmo\\AcsManager\\Types\\getDescriptionResponse',
      'rebootDevice' => '\\Nmo\\AcsManager\\Types\\rebootDevice',
      'rebootDeviceResponse' => '\\Nmo\\AcsManager\\Types\\rebootDeviceResponse',
      'deleteGroup' => '\\Nmo\\AcsManager\\Types\\deleteGroup',
      'deleteGroupResponse' => '\\Nmo\\AcsManager\\Types\\deleteGroupResponse',
      'removeDevice' => '\\Nmo\\AcsManager\\Types\\removeDevice',
      'removeDeviceResponse' => '\\Nmo\\AcsManager\\Types\\removeDeviceResponse',
      'getTaskStatus' => '\\Nmo\\AcsManager\\Types\\getTaskStatus',
      'getTaskStatusResponse' => '\\Nmo\\AcsManager\\Types\\getTaskStatusResponse',
      'getParameter' => '\\Nmo\\AcsManager\\Types\\getParameter',
      'getParameterResponse' => '\\Nmo\\AcsManager\\Types\\getParameterResponse',
      'addDeviceToGroup' => '\\Nmo\\AcsManager\\Types\\addDeviceToGroup',
      'addDeviceToGroupResponse' => '\\Nmo\\AcsManager\\Types\\addDeviceToGroupResponse',
      'factoryResetDevice' => '\\Nmo\\AcsManager\\Types\\factoryResetDevice',
      'factoryResetDeviceResponse' => '\\Nmo\\AcsManager\\Types\\factoryResetDeviceResponse',
      'setProperty' => '\\Nmo\\AcsManager\\Types\\setProperty',
      'setPropertyResponse' => '\\Nmo\\AcsManager\\Types\\setPropertyResponse',
      'createDevice' => '\\Nmo\\AcsManager\\Types\\createDevice',
      'createDeviceResponse' => '\\Nmo\\AcsManager\\Types\\createDeviceResponse',
      'setParameters' => '\\Nmo\\AcsManager\\Types\\setParameters',
      'setParametersResponse' => '\\Nmo\\AcsManager\\Types\\setParametersResponse',
      'createGroup' => '\\Nmo\\AcsManager\\Types\\createGroup',
      'createGroupResponse' => '\\Nmo\\AcsManager\\Types\\createGroupResponse',
      'connectionRequest' => '\\Nmo\\AcsManager\\Types\\connectionRequest',
      'connectionRequestResponse' => '\\Nmo\\AcsManager\\Types\\connectionRequestResponse',
      'setDescription' => '\\Nmo\\AcsManager\\Types\\setDescription',
      'setDescriptionResponse' => '\\Nmo\\AcsManager\\Types\\setDescriptionResponse',
      'findByIpAddress' => '\\Nmo\\AcsManager\\Types\\findByIpAddress',
      'findByIpAddressResponse' => '\\Nmo\\AcsManager\\Types\\findByIpAddressResponse',
      'removeDeviceFromGroup' => '\\Nmo\\AcsManager\\Types\\removeDeviceFromGroup',
      'removeDeviceFromGroupResponse' => '\\Nmo\\AcsManager\\Types\\removeDeviceFromGroupResponse',
      'refreshParametersOfObject' => '\\Nmo\\AcsManager\\Types\\refreshParametersOfObject',
      'refreshParametersOfObjectResponse' => '\\Nmo\\AcsManager\\Types\\refreshParametersOfObjectResponse',
      'setParameter' => '\\Nmo\\AcsManager\\Types\\setParameter',
      'setParameterResponse' => '\\Nmo\\AcsManager\\Types\\setParameterResponse',
      'findByProperty' => '\\Nmo\\AcsManager\\Types\\findByProperty',
      'findByPropertyResponse' => '\\Nmo\\AcsManager\\Types\\findByPropertyResponse',
      'refreshParameters' => '\\Nmo\\AcsManager\\Types\\refreshParameters',
      'refreshParametersResponse' => '\\Nmo\\AcsManager\\Types\\refreshParametersResponse',
      'refreshParameter' => '\\Nmo\\AcsManager\\Types\\refreshParameter',
      'refreshParameterResponse' => '\\Nmo\\AcsManager\\Types\\refreshParameterResponse',
      'getSettingValueProfileValue' => '\\Nmo\\AcsManager\\Types\\getSettingValueProfileValue',
      'getSettingValueProfileValueResponse' => '\\Nmo\\AcsManager\\Types\\getSettingValueProfileValueResponse',
      'findByMacAddress' => '\\Nmo\\AcsManager\\Types\\findByMacAddress',
      'findByMacAddressResponse' => '\\Nmo\\AcsManager\\Types\\findByMacAddressResponse',
      'removeProperty' => '\\Nmo\\AcsManager\\Types\\removeProperty',
      'removePropertyResponse' => '\\Nmo\\AcsManager\\Types\\removePropertyResponse',
      'getDevicesForGroup' => '\\Nmo\\AcsManager\\Types\\getDevicesForGroup',
      'getDevicesForGroupResponse' => '\\Nmo\\AcsManager\\Types\\getDevicesForGroupResponse',
      'getParametersOfObject' => '\\Nmo\\AcsManager\\Types\\getParametersOfObject',
      'getParametersOfObjectResponse' => '\\Nmo\\AcsManager\\Types\\getParametersOfObjectResponse',
      'connectionRequestSync' => '\\Nmo\\AcsManager\\Types\\connectionRequestSync',
      'connectionRequestSyncResponse' => '\\Nmo\\AcsManager\\Types\\connectionRequestSyncResponse',
      'getProperty' => '\\Nmo\\AcsManager\\Types\\getProperty',
      'getPropertyResponse' => '\\Nmo\\AcsManager\\Types\\getPropertyResponse',
      'findBySerialNumber' => '\\Nmo\\AcsManager\\Types\\findBySerialNumber',
      'findBySerialNumberResponse' => '\\Nmo\\AcsManager\\Types\\findBySerialNumberResponse',
      'setDomain' => '\\Nmo\\AcsManager\\Types\\setDomain',
      'setDomainResponse' => '\\Nmo\\AcsManager\\Types\\setDomainResponse',
      'findFirmwares' => '\\Nmo\\AcsManager\\Types\\findFirmwares',
      'findFirmwaresResponse' => '\\Nmo\\AcsManager\\Types\\findFirmwaresResponse',
      'isDeviceRegistered' => '\\Nmo\\AcsManager\\Types\\isDeviceRegistered',
      'isDeviceRegisteredResponse' => '\\Nmo\\AcsManager\\Types\\isDeviceRegisteredResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);

      $wsdl = ($wsdl === null) ? config('acsmanager.wsdl') : $wsdl;

      parent::__construct($wsdl, $options);
    }

    /**
     * @param getDevice $parameters
     * @return getDeviceResponse
     */
    public function getDevice(getDevice $parameters)
    {
      return $this->__soapCall('getDevice', array($parameters));
    }

    /**
     * @param getDomain $parameters
     * @return getDomainResponse
     */
    public function getDomain(getDomain $parameters)
    {
      return $this->__soapCall('getDomain', array($parameters));
    }

    /**
     * @param getParameters $parameters
     * @return getParametersResponse
     */
    public function getParameters(getParameters $parameters)
    {
      return $this->__soapCall('getParameters', array($parameters));
    }

    /**
     * @param findActiveWan $parameters
     * @return findActiveWanResponse
     */
    public function findActiveWan(findActiveWan $parameters)
    {
      return $this->__soapCall('findActiveWan', array($parameters));
    }

    /**
     * @param getDescription $parameters
     * @return getDescriptionResponse
     */
    public function getDescription(getDescription $parameters)
    {
      return $this->__soapCall('getDescription', array($parameters));
    }

    /**
     * @param rebootDevice $parameters
     * @return rebootDeviceResponse
     */
    public function rebootDevice(rebootDevice $parameters)
    {
      return $this->__soapCall('rebootDevice', array($parameters));
    }

    /**
     * @param deleteGroup $parameters
     * @return deleteGroupResponse
     */
    public function deleteGroup(deleteGroup $parameters)
    {
      return $this->__soapCall('deleteGroup', array($parameters));
    }

    /**
     * @param getParameter $parameters
     * @return getParameterResponse
     */
    public function getParameter(getParameter $parameters)
    {
      return $this->__soapCall('getParameter', array($parameters));
    }

    /**
     * @param getTaskStatus $parameters
     * @return getTaskStatusResponse
     */
    public function getTaskStatus(getTaskStatus $parameters)
    {
      return $this->__soapCall('getTaskStatus', array($parameters));
    }

    /**
     * @param removeDevice $parameters
     * @return removeDeviceResponse
     */
    public function removeDevice(removeDevice $parameters)
    {
      return $this->__soapCall('removeDevice', array($parameters));
    }

    /**
     * @param addDeviceToGroup $parameters
     * @return addDeviceToGroupResponse
     */
    public function addDeviceToGroup(addDeviceToGroup $parameters)
    {
      return $this->__soapCall('addDeviceToGroup', array($parameters));
    }

    /**
     * @param factoryResetDevice $parameters
     * @return factoryResetDeviceResponse
     */
    public function factoryResetDevice(factoryResetDevice $parameters)
    {
      return $this->__soapCall('factoryResetDevice', array($parameters));
    }

    /**
     * @param setProperty $parameters
     * @return setPropertyResponse
     */
    public function setProperty(setProperty $parameters)
    {
      return $this->__soapCall('setProperty', array($parameters));
    }

    /**
     * @param createDevice $parameters
     * @return createDeviceResponse
     */
    public function createDevice(createDevice $parameters)
    {
      return $this->__soapCall('createDevice', array($parameters));
    }

    /**
     * @param setParameters $parameters
     * @return setParametersResponse
     */
    public function setParameters(setParameters $parameters)
    {
      return $this->__soapCall('setParameters', array($parameters));
    }

    /**
     * @param connectionRequest $parameters
     * @return connectionRequestResponse
     */
    public function connectionRequest(connectionRequest $parameters)
    {
      return $this->__soapCall('connectionRequest', array($parameters));
    }

    /**
     * @param createGroup $parameters
     * @return createGroupResponse
     */
    public function createGroup(createGroup $parameters)
    {
      return $this->__soapCall('createGroup', array($parameters));
    }

    /**
     * @param setDescription $parameters
     * @return setDescriptionResponse
     */
    public function setDescription(setDescription $parameters)
    {
      return $this->__soapCall('setDescription', array($parameters));
    }

    /**
     * @param findByIpAddress $parameters
     * @return findByIpAddressResponse
     */
    public function findByIpAddress(findByIpAddress $parameters)
    {
      return $this->__soapCall('findByIpAddress', array($parameters));
    }

    /**
     * @param removeDeviceFromGroup $parameters
     * @return removeDeviceFromGroupResponse
     */
    public function removeDeviceFromGroup(removeDeviceFromGroup $parameters)
    {
      return $this->__soapCall('removeDeviceFromGroup', array($parameters));
    }

    /**
     * @param refreshParametersOfObject $parameters
     * @return refreshParametersOfObjectResponse
     */
    public function refreshParametersOfObject(refreshParametersOfObject $parameters)
    {
      return $this->__soapCall('refreshParametersOfObject', array($parameters));
    }

    /**
     * @param findByProperty $parameters
     * @return findByPropertyResponse
     */
    public function findByProperty(findByProperty $parameters)
    {
      return $this->__soapCall('findByProperty', array($parameters));
    }

    /**
     * @param setParameter $parameters
     * @return setParameterResponse
     */
    public function setParameter(setParameter $parameters)
    {
      return $this->__soapCall('setParameter', array($parameters));
    }

    /**
     * @param refreshParameters $parameters
     * @return refreshParametersResponse
     */
    public function refreshParameters(refreshParameters $parameters)
    {
      return $this->__soapCall('refreshParameters', array($parameters));
    }

    /**
     * @param refreshParameter $parameters
     * @return refreshParameterResponse
     */
    public function refreshParameter(refreshParameter $parameters)
    {
      return $this->__soapCall('refreshParameter', array($parameters));
    }

    /**
     * @param findByMacAddress $parameters
     * @return findByMacAddressResponse
     */
    public function findByMacAddress(findByMacAddress $parameters)
    {
      return $this->__soapCall('findByMacAddress', array($parameters));
    }

    /**
     * @param getSettingValueProfileValue $parameters
     * @return getSettingValueProfileValueResponse
     */
    public function getSettingValueProfileValue(getSettingValueProfileValue $parameters)
    {
      return $this->__soapCall('getSettingValueProfileValue', array($parameters));
    }

    /**
     * @param removeProperty $parameters
     * @return removePropertyResponse
     */
    public function removeProperty(removeProperty $parameters)
    {
      return $this->__soapCall('removeProperty', array($parameters));
    }

    /**
     * @param getDevicesForGroup $parameters
     * @return getDevicesForGroupResponse
     */
    public function getDevicesForGroup(getDevicesForGroup $parameters)
    {
      return $this->__soapCall('getDevicesForGroup', array($parameters));
    }

    /**
     * @param getParametersOfObject $parameters
     * @return getParametersOfObjectResponse
     */
    public function getParametersOfObject(getParametersOfObject $parameters)
    {
      return $this->__soapCall('getParametersOfObject', array($parameters));
    }

    /**
     * @param connectionRequestSync $parameters
     * @return connectionRequestSyncResponse
     */
    public function connectionRequestSync(connectionRequestSync $parameters)
    {
      return $this->__soapCall('connectionRequestSync', array($parameters));
    }

    /**
     * @param getProperty $parameters
     * @return getPropertyResponse
     */
    public function getProperty(getProperty $parameters)
    {
      return $this->__soapCall('getProperty', array($parameters));
    }

    /**
     * @param findBySerialNumber $parameters
     * @return findBySerialNumberResponse
     */
    public function findBySerialNumber(findBySerialNumber $parameters)
    {
      return $this->__soapCall('findBySerialNumber', array($parameters));
    }

    /**
     * @param setDomain $parameters
     * @return setDomainResponse
     */
    public function setDomain(setDomain $parameters)
    {
      return $this->__soapCall('setDomain', array($parameters));
    }

    /**
     * @param findFirmwares $parameters
     * @return findFirmwaresResponse
     */
    public function findFirmwares(findFirmwares $parameters)
    {
      return $this->__soapCall('findFirmwares', array($parameters));
    }

    /**
     * @param isDeviceRegistered $parameters
     * @return isDeviceRegisteredResponse
     */
    public function isDeviceRegistered(isDeviceRegistered $parameters)
    {
      return $this->__soapCall('isDeviceRegistered', array($parameters));
    }

}
