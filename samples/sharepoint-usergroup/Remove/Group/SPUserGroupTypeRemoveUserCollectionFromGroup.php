<?php
/**
 * Class file for SPUserGroupTypeRemoveUserCollectionFromGroup
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeRemoveUserCollectionFromGroup
 * @date 06/07/2012
 */
class SPUserGroupTypeRemoveUserCollectionFromGroup extends SPUserGroupWsdlClass
{
	/**
	 * The groupName
	 * @var string
	 */
	public $groupName;
	/**
	 * The userLoginNamesXml
	 * @var SPUserGroupTypeUserLoginNamesXml
	 */
	public $userLoginNamesXml;
	/**
	 * Constructor
	 * @param string groupName
	 * @param SPUserGroupTypeUserLoginNamesXml userLoginNamesXml
	 * @return SPUserGroupTypeRemoveUserCollectionFromGroup
	 */
	public function __construct($_groupName = null,$_userLoginNamesXml = null)
	{
		parent::__construct(array('groupName'=>$_groupName,'userLoginNamesXml'=>$_userLoginNamesXml));
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