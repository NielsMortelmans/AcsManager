<?php

namespace Nmo\AcsManager\Types;

class scheduleTaskForGroup
{

    /**
     * @var taskStruct $taskStruct
     */
    protected $taskStruct = null;

    /**
     * @var string $groupName
     */
    protected $groupName = null;

    /**
     * @var callback $callback
     */
    protected $callback = null;


    public function __construct(string $groupName, taskStruct $taskStruct)
    {
        $this->groupName = $groupName;
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
     * @return scheduleTaskForGroup
     */
    public function setTaskStruct($taskStruct)
    {
        $this->taskStruct = $taskStruct;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @param string $groupName
     * @return scheduleTaskForGroup
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
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
     * @return scheduleTaskForGroup
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
        return $this;
    }

}
