<?php
/**
 * Class file for SPUserGroupTypeAddUserCollectionToGroup
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeAddUserCollectionToGroup
 * @date 06/07/2012
 */
class SPUserGroupTypeAddUserCollectionToGroup extends SPUserGroupWsdlClass
{
	/**
	 * The groupName
	 * @var string
	 */
	public $groupName;
	/**
	 * The usersInfoXml
	 * @var SPUserGroupTypeUsersInfoXml
	 */
	public $usersInfoXml;
	/**
	 * Constructor
	 * @param string groupName
	 * @param SPUserGroupTypeUsersInfoXml usersInfoXml
	 * @return SPUserGroupTypeAddUserCollectionToGroup
	 */
	public function __construct($_groupName = null,$_usersInfoXml = null)
	{
		parent::__construct(array('groupName'=>$_groupName,'usersInfoXml'=>$_usersInfoXml));
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
	 * Set usersInfoXml
	 * @param usersInfoXml usersInfoXml
	 * @return usersInfoXml
	 */
	public function setUsersInfoXml($_usersInfoXml)
	{
		return ($this->usersInfoXml = $_usersInfoXml);
	}
	/**
	 * Get usersInfoXml
	 * @return SPUserGroupTypeusersInfoXml
	 */
	public function getUsersInfoXml()
	{
		return $this->usersInfoXml;
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