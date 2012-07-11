<?php
/**
 * Class file for SPUserGroupTypeRemoveUserCollectionFromRole
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeRemoveUserCollectionFromRole
 * @date 06/07/2012
 */
class SPUserGroupTypeRemoveUserCollectionFromRole extends SPUserGroupWsdlClass
{
	/**
	 * The roleName
	 * @var string
	 */
	public $roleName;
	/**
	 * The userLoginNamesXml
	 * @var SPUserGroupTypeUserLoginNamesXml
	 */
	public $userLoginNamesXml;
	/**
	 * Constructor
	 * @param string roleName
	 * @param SPUserGroupTypeUserLoginNamesXml userLoginNamesXml
	 * @return SPUserGroupTypeRemoveUserCollectionFromRole
	 */
	public function __construct($_roleName = null,$_userLoginNamesXml = null)
	{
		parent::__construct(array('roleName'=>$_roleName,'userLoginNamesXml'=>$_userLoginNamesXml));
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
	 * Set userLoginNamesXml
	 * @param userLoginNamesXml userLoginNamesXml
	 * @return userLoginNamesXml
	 */
	public function setUserLoginNamesXml($_userLoginNamesXml)
	{
		return ($this->userLoginNamesXml = $_userLoginNamesXml);
	}
	/**
	 * Get userLoginNamesXml
	 * @return SPUserGroupTypeuserLoginNamesXml
	 */
	public function getUserLoginNamesXml()
	{
		return $this->userLoginNamesXml;
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