<?php
/**
 * Class file for SPUserGroupTypeGetRoleInfo
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetRoleInfo
 * @date 06/07/2012
 */
class SPUserGroupTypeGetRoleInfo extends SPUserGroupWsdlClass
{
	/**
	 * The roleName
	 * @var string
	 */
	public $roleName;
	/**
	 * Constructor
	 * @param string roleName
	 * @return SPUserGroupTypeGetRoleInfo
	 */
	public function __construct($_roleName = null)
	{
		parent::__construct(array('roleName'=>$_roleName));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>