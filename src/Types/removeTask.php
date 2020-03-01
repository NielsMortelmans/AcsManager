<?php

namespace Nmo\AcsManager\Types;

class removeTask
{

    /**
     * @var string $taskId
     */
    protected $taskId = null;


    public function __construct(string $taskId)
    {
        $this->taskId = $taskId;
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
     * @return removeTask
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
        return $this;
    }

}
