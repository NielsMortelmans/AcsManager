<?php

namespace Nmo\AcsManager\Types;

class getTasksForGroup
{

    /**
     * @var string $groupName
     */
    protected $groupName = null;


    public function __construct(string $groupName)
    {
        $this->groupName = $groupName;
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
     * @return getTasksForGroup
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }

}
