<?php
/**
 * Class file for OvhTypeRtmRaidPartitionVolumeStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmRaidPartitionVolumeStruct
 * @date 02/07/2012
 */
class OvhTypeRtmRaidPartitionVolumeStruct extends OvhWsdlClass
{
	/**
	 * The volumeName
	 * @var string
	 */
	public $volumeName;
	/**
	 * The flags
	 * @var string
	 */
	public $flags;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The capacity
	 * @var string
	 */
	public $capacity;
	/**
	 * The phys
	 * @var int
	 */
	public $phys;
	/**
	 * The members
	 * @var OvhTypeMyArrayOfRtmRaidPartitionVolumeMemberStructType
	 */
	public $members;
	/**
	 * Constructor
	 * @param string volumeName
	 * @param string flags
	 * @param string status
	 * @param string type
	 * @param string capacity
	 * @param int phys
	 * @param OvhTypeMyArrayOfRtmRaidPartitionVolumeMemberStructType members
	 * @return OvhTypeRtmRaidPartitionVolumeStruct
	 */
	public function __construct($_volumeName = null,$_flags = null,$_status = null,$_type = null,$_capacity = null,$_phys = null,$_members = null)
	{
		parent::__construct(array('volumeName'=>$_volumeName,'flags'=>$_flags,'status'=>$_status,'type'=>$_type,'capacity'=>$_capacity,'phys'=>$_phys,'members'=>new OvhTypeMyArrayOfRtmRaidPartitionVolumeMemberStructType($_members)));
	}
	/**
	 * Set volumeName
	 * @param string volumeName
	 * @return string
	 */
	public function setVolumeName($_volumeName)
	{
		return ($this->volumeName = $_volumeName);
	}
	/**
	 * Get volumeName
	 * @return string
	 */
	public function getVolumeName()
	{
		return $this->volumeName;
	}
	/**
	 * Set flags
	 * @param string flags
	 * @return string
	 */
	public function setFlags($_flags)
	{
		return ($this->flags = $_flags);
	}
	/**
	 * Get flags
	 * @return string
	 */
	public function getFlags()
	{
		return $this->flags;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set capacity
	 * @param string capacity
	 * @return string
	 */
	public function setCapacity($_capacity)
	{
		return ($this->capacity = $_capacity);
	}
	/**
	 * Get capacity
	 * @return string
	 */
	public function getCapacity()
	{
		return $this->capacity;
	}
	/**
	 * Set phys
	 * @param int phys
	 * @return int
	 */
	public function setPhys($_phys)
	{
		return ($this->phys = $_phys);
	}
	/**
	 * Get phys
	 * @return int
	 */
	public function getPhys()
	{
		return $this->phys;
	}
	/**
	 * Set members
	 * @param MyArrayOfRtmRaidPartitionVolumeMemberStructType members
	 * @return MyArrayOfRtmRaidPartitionVolumeMemberStructType
	 */
	public function setMembers($_members)
	{
		return ($this->members = $_members);
	}
	/**
	 * Get members
	 * @return OvhTypeMyArrayOfRtmRaidPartitionVolumeMemberStructType
	 */
	public function getMembers()
	{
		return $this->members;
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