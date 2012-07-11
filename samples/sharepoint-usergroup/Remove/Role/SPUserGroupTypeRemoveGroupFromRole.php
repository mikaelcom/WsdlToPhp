<?php
/**
 * Class file for SPUserGroupTypeRemoveGroupFromRole
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeRemoveGroupFromRole
 * @date 06/07/2012
 */
class SPUserGroupTypeRemoveGroupFromRole extends SPUserGroupWsdlClass
{
	/**
	 * The roleName
	 * @var string
	 */
	public $roleName;
	/**
	 * The groupName
	 * @var string
	 */
	public $groupName;
	/**
	 * Constructor
	 * @param string roleName
	 * @param string groupName
	 * @return SPUserGroupTypeRemoveGroupFromRole
	 */
	public function __construct($_roleName = null,$_groupName = null)
	{
		parent::__construct(array('roleName'=>$_roleName,'groupName'=>$_groupName));
	}
	/**
	 * Set roleName
	 * @param string roleName
	 * @return string
	 */
	public function setRoleName($_roleName)
	{
		return ($this->roleName = $_roleName);
	}
	/**
	 * Get roleName
	 * @return string
	 */
	public function getRoleName()
	{
		return $this->roleName;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>