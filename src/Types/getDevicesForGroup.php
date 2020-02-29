<?php
namespace Nmo\AcsManager\Types;

class getDevicesForGroup
{

    /**
     * @var string $groupName
     */
    protected $groupName = null;

    /**
     * @var string $afterDeviceIdentity
     */
    protected $afterDeviceIdentity = null;

    /**
     * @var int $entryCount
     */
    protected $entryCount = null;

    /**
     * @param string $groupName
     * @param int $entryCount
     */
    public function __construct($groupName, $entryCount)
    {
      $this->groupName = $groupName;
      $this->entryCount = $entryCount;
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
     * @return getDevicesForGroup
     */
    public function setGroupName($groupName)
    {
      $this->groupName = $groupName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAfterDeviceIdentity()
    {
      return $this->afterDeviceIdentity;
    }

    /**
     * @param string $afterDeviceIdentity
     * @return getDevicesForGroup
     */
    public function setAfterDeviceIdentity($afterDeviceIdentity)
    {
      $this->afterDeviceIdentity = $afterDeviceIdentity;
      return $this;
    }

    /**
     * @return int
     */
    public function getEntryCount()
    {
      return $this->entryCount;
    }

    /**
     * @param int $entryCount
     * @return getDevicesForGroup
     */
    public function setEntryCount($entryCount)
    {
      $this->entryCount = $entryCount;
      return $this;
    }

}
