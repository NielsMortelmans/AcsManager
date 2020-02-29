<?php

class findByProperty
{

    /**
     * @var string $propertyName
     */
    protected $propertyName = null;

    /**
     * @var string $propertyValue
     */
    protected $propertyValue = null;

    /**
     * @param string $propertyName
     * @param string $propertyValue
     */
    public function __construct($propertyName, $propertyValue)
    {
      $this->propertyName = $propertyName;
      $this->propertyValue = $propertyValue;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
      return $this->propertyName;
    }

    /**
     * @param string $propertyName
     * @return findByProperty
     */
    public function setPropertyName($propertyName)
    {
      $this->propertyName = $propertyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPropertyValue()
    {
      return $this->propertyValue;
    }

    /**
     * @param string $propertyValue
     * @return findByProperty
     */
    public function setPropertyValue($propertyValue)
    {
      $this->propertyValue = $propertyValue;
      return $this;
    }

}
