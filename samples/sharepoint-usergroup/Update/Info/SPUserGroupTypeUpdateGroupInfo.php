<?php
/**
 * Class file for SPUserGroupTypeUpdateGroupInfo
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeUpdateGroupInfo
 * @date 06/07/2012
 */
class SPUserGroupTypeUpdateGroupInfo extends SPUserGroupWsdlClass
{
	/**
	 * The oldGroupName
	 * @var string
	 */
	public $oldGroupName;
	/**
	 * The groupName
	 * @var string
	 */
	public $groupName;
	/**
	 * The ownerIdentifier
	 * @var string
	 */
	public $ownerIdentifier;
	/**
	 * The ownerType
	 * @var string
	 */
	public $ownerType;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param string oldGroupName
	 * @param string groupName
	 * @param string ownerIdentifier
	 * @param string ownerType
	 * @param string description
	 * @return SPUserGroupTypeUpdateGroupInfo
	 */
	public function __construct($_oldGroupName = null,$_groupName = null,$_ownerIdentifier = null,$_ownerType = null,$_description = null)
	{
		parent::__construct(array('oldGroupName'=>$_oldGroupName,'groupName'=>$_groupName,'ownerIdentifier'=>$_ownerIdentifier,'ownerType'=>$_ownerType,'description'=>$_description));
	}
	/**
	 * Set oldGroupName
	 * @param string oldGroupName
	 * @return string
	 */
	public function setOldGroupName($_oldGroupName)
	{
		return ($this->oldGroupName = $_oldGroupName);
	}
	/**
	 * Get oldGroupName
	 * @return string
	 */
	public function getOldGroupName()
	{
		return $this->oldGroupName;
	}
	/**
	 * Set groupName
	 * @param string groupName
	 * @return string
	 */
	public function setGroupName($_groupName)
	{
		return ($this->groupName = $_groupName);
	}
	/**
	 * Get groupName
	 * @return string
	 */
	public function getGroupName()
	{
		return $this->groupName;
	}
	/**
	 * Set ownerIdentifier
	 * @param string ownerIdentifier
	 * @return string
	 */
	public function setOwnerIdentifier($_ownerIdentifier)
	{
		return ($this->ownerIdentifier = $_ownerIdentifier);
	}
	/**
	 * Get ownerIdentifier
	 * @return string
	 */
	public function getOwnerIdentifier()
	{
		return $this->ownerIdentifier;
	}
	/**
	 * Set ownerType
	 * @param string ownerType
	 * @return string
	 */
	public function setOwnerType($_ownerType)
	{
		return ($this->ownerType = $_ownerType);
	}
	/**
	 * Get ownerType
	 * @return string
	 */
	public function getOwnerType()
	{
		return $this->ownerType;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
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