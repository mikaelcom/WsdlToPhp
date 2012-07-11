<?php
/**
 * Class file for OvhTypeRtmRaidPartitionVolumeMemberStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmRaidPartitionVolumeMemberStruct
 * @date 02/07/2012
 */
class OvhTypeRtmRaidPartitionVolumeMemberStruct extends OvhWsdlClass
{
	/**
	 * The memberName
	 * @var string
	 */
	public $memberName;
	/**
	 * The modelName
	 * @var string
	 */
	public $modelName;
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
	 * The capacity
	 * @var string
	 */
	public $capacity;
	/**
	 * Constructor
	 * @param string memberName
	 * @param string modelName
	 * @param string flags
	 * @param string status
	 * @param string capacity
	 * @return OvhTypeRtmRaidPartitionVolumeMemberStruct
	 */
	public function __construct($_memberName = null,$_modelName = null,$_flags = null,$_status = null,$_capacity = null)
	{
		parent::__construct(array('memberName'=>$_memberName,'modelName'=>$_modelName,'flags'=>$_flags,'status'=>$_status,'capacity'=>$_capacity));
	}
	/**
	 * Set memberName
	 * @param string memberName
	 * @return string
	 */
	public function setMemberName($_memberName)
	{
		return ($this->memberName = $_memberName);
	}
	/**
	 * Get memberName
	 * @return string
	 */
	public function getMemberName()
	{
		return $this->memberName;
	}
	/**
	 * Set modelName
	 * @param string modelName
	 * @return string
	 */
	public function setModelName($_modelName)
	{
		return ($this->modelName = $_modelName);
	}
	/**
	 * Get modelName
	 * @return string
	 */
	public function getModelName()
	{
		return $this->modelName;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>