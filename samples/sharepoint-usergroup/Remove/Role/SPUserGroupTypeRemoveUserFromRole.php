<?php
/**
 * Class file for SPUserGroupTypeRemoveUserFromRole
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeRemoveUserFromRole
 * @date 06/07/2012
 */
class SPUserGroupTypeRemoveUserFromRole extends SPUserGroupWsdlClass
{
	/**
	 * The roleName
	 * @var string
	 */
	public $roleName;
	/**
	 * The userLoginName
	 * @var string
	 */
	public $userLoginName;
	/**
	 * Constructor
	 * @param string roleName
	 * @param string userLoginName
	 * @return SPUserGroupTypeRemoveUserFromRole
	 */
	public function __construct($_roleName = null,$_userLoginName = null)
	{
		parent::__construct(array('roleName'=>$_roleName,'userLoginName'=>$_userLoginName));
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