<?php

namespace Nmo\AcsManager\Services;

use Nmo\AcsManager\Types\editTask;
use Nmo\AcsManager\Types\editTaskResponse;
use Nmo\AcsManager\Types\getTaskDetails;
use Nmo\AcsManager\Types\getTaskDetailsResponse;
use Nmo\AcsManager\Types\getTasksForDevice;
use Nmo\AcsManager\Types\getTasksForDeviceResponse;
use Nmo\AcsManager\Types\getTasksForGroup;
use Nmo\AcsManager\Types\getTasksForGroupResponse;
use Nmo\AcsManager\Types\removeTask;
use Nmo\AcsManager\Types\removeTaskResponse;
use Nmo\AcsManager\Types\scheduleTaskForDevice;
use Nmo\AcsManager\Types\scheduleTaskForDeviceResponse;
use Nmo\AcsManager\Types\scheduleTaskForGroup;
use Nmo\AcsManager\Types\scheduleTaskForGroupResponse;
use Nmo\AcsManager\Types\scheduleTaskFromTemplate;
use Nmo\AcsManager\Types\scheduleTaskFromTemplateResponse;

class ACSTaskService extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'editTask' => '\\Nmo\\AcsManager\\Types\\editTask',
        'taskStruct' => '\\Nmo\\AcsManager\\Types\\taskStruct',
        'properties' => '\\Nmo\\AcsManager\\Types\\properties',
        'entry' => '\\Nmo\\AcsManager\\Types\\entry',
        'editTaskResponse' => '\\Nmo\\AcsManager\\Types\\editTaskResponse',
        'scheduleTaskForGroup' => '\\Nmo\\AcsManager\\Types\\scheduleTaskForGroup',
        'callback' => '\\Nmo\\AcsManager\\Types\\callback',
        'scheduleTaskForGroupResponse' => '\\Nmo\\AcsManager\\Types\\scheduleTaskForGroupResponse',
        'getTaskDetails' => '\\Nmo\\AcsManager\\Types\\getTaskDetails',
        'getTaskDetailsResponse' => '\\Nmo\\AcsManager\\Types\\getTaskDetailsResponse',
        'getTasksForGroup' => '\\Nmo\\AcsManager\\Types\\getTasksForGroup',
        'getTasksForGroupResponse' => '\\Nmo\\AcsManager\\Types\\getTasksForGroupResponse',
        'getTasksForDevice' => '\\Nmo\\AcsManager\\Types\\getTasksForDevice',
        'getTasksForDeviceResponse' => '\\Nmo\\AcsManager\\Types\\getTasksForDeviceResponse',
        'scheduleTaskFromTemplate' => '\\Nmo\\AcsManager\\Types\\scheduleTaskFromTemplate',
        'scheduleTaskFromTemplateResponse' => '\\Nmo\\AcsManager\\Types\\scheduleTaskFromTemplateResponse',
        'scheduleTaskForDevice' => '\\Nmo\\AcsManager\\Types\\scheduleTaskForDevice',
        'scheduleTaskForDeviceResponse' => '\\Nmo\\AcsManager\\Types\\scheduleTaskForDeviceResponse',
        'removeTask' => '\\Nmo\\AcsManager\\Types\\removeTask',
        'removeTaskResponse' => '\\Nmo\\AcsManager\\Types\\removeTaskResponse',
        'WSException' => '\\Nmo\\AcsManager\\Types\\WSException',
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
        $options = array_merge(array(
            'features' => 1,
        ), $options);

        $wsdl = ($wsdl === null) ? config('acsmanager.acstaskservice_wsdl') : $wsdl;;

        parent::__construct($wsdl, $options);
    }

    /**
     * @param editTask $parameters
     * @return editTaskResponse
     */
    public function editTask(editTask $parameters)
    {
        return $this->__soapCall('editTask', array($parameters));
    }

    /**
     * @param scheduleTaskForGroup $parameters
     * @return scheduleTaskForGroupResponse
     */
    public function scheduleTaskForGroup(scheduleTaskForGroup $parameters)
    {
        return $this->__soapCall('scheduleTaskForGroup', array($parameters));
    }

    /**
     * @param getTaskDetails $parameters
     * @return getTaskDetailsResponse
     */
    public function getTaskDetails(getTaskDetails $parameters)
    {
        return $this->__soapCall('getTaskDetails', array($parameters));
    }

    /**
     * @param getTasksForDevice $parameters
     * @return getTasksForDeviceResponse
     */
    public function getTasksForDevice(getTasksForDevice $parameters)
    {
        return $this->__soapCall('getTasksForDevice', array($parameters));
    }

    /**
     * @param getTasksForGroup $parameters
     * @return getTasksForGroupResponse
     */
    public function getTasksForGroup(getTasksForGroup $parameters)
    {
        return $this->__soapCall('getTasksForGroup', array($parameters));
    }

    /**
     * @param scheduleTaskFromTemplate $parameters
     * @return scheduleTaskFromTemplateResponse
     */
    public function scheduleTaskFromTemplate(scheduleTaskFromTemplate $parameters)
    {
        return $this->__soapCall('scheduleTaskFromTemplate', array($parameters));
    }

    /**
     * @param removeTask $parameters
     * @return removeTaskResponse
     */
    public function removeTask(removeTask $parameters)
    {
        return $this->__soapCall('removeTask', array($parameters));
    }

    /**
     * @param scheduleTaskForDevice $parameters
     * @return scheduleTaskForDeviceResponse
     */
    public function scheduleTaskForDevice(scheduleTaskForDevice $parameters)
    {
        return $this->__soapCall('scheduleTaskForDevice', array($parameters));
    }

}
