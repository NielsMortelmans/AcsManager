<?php
namespace Nmo\AcsManager\Types;

class getTaskStatus
{

    /**
     * @var string $taskId
     */
    protected $taskId = null;

    /**
     * @param string $taskId
     */
    public function __construct($taskId)
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
     * @return getTaskStatus
     */
    public function setTaskId($taskId)
    {
      $this->taskId = $taskId;
      return $this;
    }

}
