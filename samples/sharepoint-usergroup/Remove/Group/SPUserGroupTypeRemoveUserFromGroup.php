<?php
/**
 * Class file for SPUserGroupTypeRemoveUserFromGroup
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeRemoveUserFromGroup
 * @date 06/07/2012
 */
class SPUserGroupTypeRemoveUserFromGroup extends SPUserGroupWsdlClass
{
	/**
	 * The groupName
	 * @var string
	 */
	public $groupName;
	/**
	 * The userLoginName
	 * @var string
	 */
	public $userLoginName;
	/**
	 * Constructor
	 * @param string groupName
	 * @param string userLoginName
	 * @return SPUserGroupTypeRemoveUserFromGroup
	 */
	public function __construct($_groupName = null,$_userLoginName = null)
	{
		parent::__construct(array('groupName'=>$_groupName,'userLoginName'=>$_userLoginName));
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
	 * Set userLoginName
	 * @param string userLoginName
	 * @return string
	 */
	public function setUserLoginName($_userLoginName)
	{
		return ($this->userLoginName = $_userLoginName);
	}
	/**
	 * Get userLoginName
	 * @return string
	 */
	public function getUserLoginName()
	{
		return $this->userLoginName;
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