<?php

namespace Nmo\AcsManager\Types;

class ConnectionRequestResult
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var ConnectionRequestStatus $status
     */
    protected $status = null;

    /**
     * @param string $description
     * @param ConnectionRequestStatus $status
     */
    public function __construct($description, $status)
    {
        $this->description = $description;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ConnectionRequestResult
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return ConnectionRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param ConnectionRequestStatus $status
     * @return ConnectionRequestResult
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

}
