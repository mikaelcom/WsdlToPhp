<?php
/**
 * Class file for SPUserGroupTypeAddGroup
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeAddGroup
 * @date 06/07/2012
 */
class SPUserGroupTypeAddGroup extends SPUserGroupWsdlClass
{
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
	 * The defaultUserLoginName
	 * @var string
	 */
	public $defaultUserLoginName;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param string groupName
	 * @param string ownerIdentifier
	 * @param string ownerType
	 * @param string defaultUserLoginName
	 * @param string description
	 * @return SPUserGroupTypeAddGroup
	 */
	public function __construct($_groupName = null,$_ownerIdentifier = null,$_ownerType = null,$_defaultUserLoginName = null,$_description = null)
	{
		parent::__construct(array('groupName'=>$_groupName,'ownerIdentifier'=>$_ownerIdentifier,'ownerType'=>$_ownerType,'defaultUserLoginName'=>$_defaultUserLoginName,'description'=>$_description));
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
	 * Set defaultUserLoginName
	 * @param string defaultUserLoginName
	 * @return string
	 */
	public function setDefaultUserLoginName($_defaultUserLoginName)
	{
		return ($this->defaultUserLoginName = $_defaultUserLoginName);
	}
	/**
	 * Get defaultUserLoginName
	 * @return string
	 */
	public function getDefaultUserLoginName()
	{
		return $this->defaultUserLoginName;
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