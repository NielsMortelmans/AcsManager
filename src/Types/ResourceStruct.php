<?php

namespace Nmo\AcsManager\Types;

class ResourceStruct
{

    /**
     * @var \DateTime $addDate
     */
    protected $addDate = null;

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $device
     */
    protected $device = null;

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var int $fileSize
     */
    protected $fileSize = null;

    /**
     * @var string $fileType
     */
    protected $fileType = null;

    /**
     * @var string $filename
     */
    protected $filename = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $location
     */
    protected $location = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string2stringLinkedHashMap $properties
     */
    protected $properties = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @param \DateTime $addDate
     * @param string $category
     * @param string $description
     * @param string $device
     * @param string $domain
     * @param int $fileSize
     * @param string $fileType
     * @param string $filename
     * @param string $id
     * @param string $location
     * @param string $name
     * @param string $password
     * @param string2stringLinkedHashMap $properties
     * @param string $username
     */
    public function __construct(\DateTime $addDate, $category, $description, $device, $domain, $fileSize, $fileType, $filename, $id, $location, $name, $password, $properties, $username)
    {
        $this->addDate = $addDate->format(\DateTime::ATOM);
        $this->category = $category;
        $this->description = $description;
        $this->device = $device;
        $this->domain = $domain;
        $this->fileSize = $fileSize;
        $this->fileType = $fileType;
        $this->filename = $filename;
        $this->id = $id;
        $this->location = $location;
        $this->name = $name;
        $this->password = $password;
        $this->properties = $properties;
        $this->username = $username;
    }

    /**
     * @return \DateTime
     */
    public function getAddDate()
    {
        if ($this->addDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->addDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $addDate
     * @return ResourceStruct
     */
    public function setAddDate(\DateTime $addDate)
    {
        $this->addDate = $addDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return ResourceStruct
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
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
     * @return ResourceStruct
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param string $device
     * @return ResourceStruct
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return ResourceStruct
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param int $fileSize
     * @return ResourceStruct
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param string $fileType
     * @return ResourceStruct
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return ResourceStruct
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ResourceStruct
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return ResourceStruct
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ResourceStruct
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return ResourceStruct
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string2stringLinkedHashMap
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param string2stringLinkedHashMap $properties
     * @return ResourceStruct
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return ResourceStruct
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

}
