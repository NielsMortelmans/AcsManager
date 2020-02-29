<?php
namespace Nmo\AcsManager\Types;

class getDeviceResponse
{

    /**
     * @var DeviceStruct $return
     */
    protected $return = null;

    /**
     * @param DeviceStruct $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return DeviceStruct
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param DeviceStruct $return
     * @return getDeviceResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
