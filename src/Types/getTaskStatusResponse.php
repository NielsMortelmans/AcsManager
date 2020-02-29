<?php
namespace Nmo\AcsManager\Types;

class getTaskStatusResponse
{

    /**
     * @var TaskStatus $return
     */
    protected $return = null;

    /**
     * @param TaskStatus $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return TaskStatus
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param TaskStatus $return
     * @return getTaskStatusResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
