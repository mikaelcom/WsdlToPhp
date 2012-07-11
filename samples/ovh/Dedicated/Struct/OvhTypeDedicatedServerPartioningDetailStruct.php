<?php
/**
 * Class file for OvhTypeDedicatedServerPartioningDetailStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedServerPartioningDetailStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedServerPartioningDetailStruct extends OvhWsdlClass
{
	/**
	 * The partSize
	 * @var string
	 */
	public $partSize;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The raidType
	 * @var int
	 */
	public $raidType;
	/**
	 * The mountPoint
	 * @var string
	 */
	public $mountPoint;
	/**
	 * The partType
	 * @var string
	 */
	public $partType;
	/**
	 * The fileSystem
	 * @var string
	 */
	public $fileSystem;
	/**
	 * Constructor
	 * @param string partSize
	 * @param int id
	 * @param int raidType
	 * @param string mountPoint
	 * @param string partType
	 * @param string fileSystem
	 * @return OvhTypeDedicatedServerPartioningDetailStruct
	 */
	public function __construct($_partSize = null,$_id = null,$_raidType = null,$_mountPoint = null,$_partType = null,$_fileSystem = null)
	{
		parent::__construct(array('partSize'=>$_partSize,'id'=>$_id,'raidType'=>$_raidType,'mountPoint'=>$_mountPoint,'partType'=>$_partType,'fileSystem'=>$_fileSystem));
	}
	/**
	 * Set partSize
	 * @param string partSize
	 * @return string
	 */
	public function setPartSize($_partSize)
	{
		return ($this->partSize = $_partSize);
	}
	/**
	 * Get partSize
	 * @return string
	 */
	public function getPartSize()
	{
		return $this->partSize;
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set raidType
	 * @param int raidType
	 * @return int
	 */
	public function setRaidType($_raidType)
	{
		return ($this->raidType = $_raidType);
	}
	/**
	 * Get raidType
	 * @return int
	 */
	public function getRaidType()
	{
		return $this->raidType;
	}
	/**
	 * Set mountPoint
	 * @param string mountPoint
	 * @return string
	 */
	public function setMountPoint($_mountPoint)
	{
		return ($this->mountPoint = $_mountPoint);
	}
	/**
	 * Get mountPoint
	 * @return string
	 */
	public function getMountPoint()
	{
		return $this->mountPoint;
	}
	/**
	 * Set partType
	 * @param string partType
	 * @return string
	 */
	public function setPartType($_partType)
	{
		return ($this->partType = $_partType);
	}
	/**
	 * Get partType
	 * @return string
	 */
	public function getPartType()
	{
		return $this->partType;
	}
	/**
	 * Set fileSystem
	 * @param string fileSystem
	 * @return string
	 */
	public function setFileSystem($_fileSystem)
	{
		return ($this->fileSystem = $_fileSystem);
	}
	/**
	 * Get fileSystem
	 * @return string
	 */
	public function getFileSystem()
	{
		return $this->fileSystem;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>