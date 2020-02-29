<?php

namespace Nmo\AcsManager\Types;

class TaskStatus
{

    /**
     * @var int $exitCode
     */
    protected $exitCode = null;

    /**
     * @var string $summary
     */
    protected $summary = null;

    /**
     * @param int $exitCode
     * @param string $summary
     */
    public function __construct($exitCode, $summary)
    {
      $this->exitCode = $exitCode;
      $this->summary = $summary;
    }

    /**
     * @return int
     */
    public function getExitCode()
    {
      return $this->exitCode;
    }

    /**
     * @param int $exitCode
     * @return TaskStatus
     */
    public function setExitCode($exitCode)
    {
      $this->exitCode = $exitCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
      return $this->summary;
    }

    /**
     * @param string $summary
     * @return TaskStatus
     */
    public function setSummary($summary)
    {
      $this->summary = $summary;
      return $this;
    }

}
