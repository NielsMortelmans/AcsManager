<?php
namespace Nmo\AcsManager\Types;

class ArrayOfResourceStruct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ResourceStruct[] $ResourceStruct
     */
    protected $ResourceStruct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResourceStruct[]
     */
    public function getResourceStruct()
    {
      return $this->ResourceStruct;
    }

    /**
     * @param ResourceStruct[] $ResourceStruct
     * @return ArrayOfResourceStruct
     */
    public function setResourceStruct(array $ResourceStruct = null)
    {
      $this->ResourceStruct = $ResourceStruct;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ResourceStruct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ResourceStruct
     */
    public function offsetGet($offset)
    {
      return $this->ResourceStruct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ResourceStruct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ResourceStruct[] = $value;
      } else {
        $this->ResourceStruct[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ResourceStruct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ResourceStruct Return the current element
     */
    public function current()
    {
      return current($this->ResourceStruct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ResourceStruct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ResourceStruct);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ResourceStruct);
    }

    /**
     * Countable implementation
     *
     * @return ResourceStruct Return count of elements
     */
    public function count()
    {
      return count($this->ResourceStruct);
    }

}
