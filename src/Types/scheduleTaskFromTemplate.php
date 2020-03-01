<?php

namespace Nmo\AcsManager\Types;

class scheduleTaskFromTemplate
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @var string $taskTemplateName
     */
    protected $taskTemplateName = null;

    /**
     * @var string[] $placeholders
     */
    protected $placeholders = null;


    public function __construct(string $deviceIdentity, string $taskTemplateName)
    {
        $this->deviceIdentity = $deviceIdentity;
        $this->taskTemplateName = $taskTemplateName;
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
     * @return scheduleTaskFromTemplate
     */
    public function setDeviceIdentity($deviceIdentity)
    {
        $this->deviceIdentity = $deviceIdentity;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskTemplateName()
    {
        return $this->taskTemplateName;
    }

    /**
     * @param string $taskTemplateName
     * @return scheduleTaskFromTemplate
     */
    public function setTaskTemplateName($taskTemplateName)
    {
        $this->taskTemplateName = $taskTemplateName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPlaceholders()
    {
        return $this->placeholders;
    }

    /**
     * @param string[] $placeholders
     * @return scheduleTaskFromTemplate
     */
    public function setPlaceholders(array $placeholders = null)
    {
        $this->placeholders = $placeholders;
        return $this;
    }

}
