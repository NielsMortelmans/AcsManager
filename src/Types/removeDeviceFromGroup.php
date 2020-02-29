<?php
namespace Nmo\AcsManager\Types;

class removeDeviceFromGroup
{

    /**
     * @var string $deviceIdentity
     */
    protected $deviceIdentity = null;

    /**
     * @var string $groupName
     */
    protected $groupName = null;

    /**
     * @param string $deviceIdentity
     * @param string $groupName
     */
    public function __construct($deviceIdentity, $groupName)
    {
      $this->deviceIdentity = $deviceIdentity;
      $this->groupName = $groupName;
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
     * @return removeDeviceFromGroup
     */
    public function setDeviceIdentity($deviceIdentity)
    {
      $this->deviceIdentity = $deviceIdentity;
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
     * @return removeDeviceFromGroup
     */
    public function setGroupName($groupName)
    {
      $this->groupName = $groupName;
      return $this;
    }

}
