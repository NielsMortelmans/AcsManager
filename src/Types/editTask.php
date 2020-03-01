<?php

namespace Nmo\AcsManager\Types;

class editTask
{

    /**
     * @var string $taskId
     */
    protected $taskId = null;

    /**
     * @var taskStruct $taskStruct
     */
    protected $taskStruct = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @param string $taskId
     * @return editTask
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
        return $this;
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
     * @return editTask
     */
    public function setTaskStruct($taskStruct)
    {
        $this->taskStruct = $taskStruct;
        return $this;
    }

}
