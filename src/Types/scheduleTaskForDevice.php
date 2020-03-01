<?php

namespace Nmo\AcsManager\Types;

class scheduleTaskForDevice
{

    /**
     * @var taskStruct $taskStruct
     */
    protected $taskStruct = null;

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @var callback $callback
     */
    protected $callback = null;


    public function __construct(string $deviceIdentity, taskStruct $taskStruct)
    {
        $this->deviceIdentity = $deviceIdentity;
        $this->taskStruct = $taskStruct;
    }

    /**
     * @return taskStruct
     */
    public function getTaskStruct()
    {
        return $this->taskStruct;
    }

    /**
     * @param taskStruct $taskStruct
     * @return scheduleTaskForDevice
     */
    public function setTaskStruct($taskStruct)
    {
        $this->taskStruct = $taskStruct;
        return $this;
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
     * @return scheduleTaskForDevice
     */
    public function setDeviceIdentity($deviceIdentity)
    {
        $this->deviceIdentity = $deviceIdentity;
        return $this;
    }

    /**
     * @return callback
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * @param callback $callback
     * @return scheduleTaskForDevice
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
        return $this;
    }

}
