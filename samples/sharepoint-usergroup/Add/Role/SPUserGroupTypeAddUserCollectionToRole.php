<?php
/**
 * Class file for SPUserGroupTypeAddUserCollectionToRole
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeAddUserCollectionToRole
 * @date 06/07/2012
 */
class SPUserGroupTypeAddUserCollectionToRole extends SPUserGroupWsdlClass
{
	/**
	 * The roleName
	 * @var string
	 */
	public $roleName;
	/**
	 * The usersInfoXml
	 * @var SPUserGroupTypeUsersInfoXml
	 */
	public $usersInfoXml;
	/**
	 * Constructor
	 * @param string roleName
	 * @param SPUserGroupTypeUsersInfoXml usersInfoXml
	 * @return SPUserGroupTypeAddUserCollectionToRole
	 */
	public function __construct($_roleName = null,$_usersInfoXml = null)
	{
		parent::__construct(array('roleName'=>$_roleName,'usersInfoXml'=>$_usersInfoXml));
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