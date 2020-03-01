<?php

namespace Nmo\AcsManager\Types;

class createGroup
{

    /**
     * @var string $groupName
     */
    protected $groupName = null;

    /**
     * @param string $groupName
     */
    public function __construct($groupName)
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
     * @return createGroup
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }

}
