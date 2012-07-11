<?php
/**
 * Class file for SPUserGroupTypeAddRole
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeAddRole
 * @date 06/07/2012
 */
class SPUserGroupTypeAddRole extends SPUserGroupWsdlClass
{
	/**
	 * The roleName
	 * @var string
	 */
	public $roleName;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The permissionMask
	 * @var int
	 */
	public $permissionMask;
	/**
	 * Constructor
	 * @param string roleName
	 * @param string description
	 * @param int permissionMask
	 * @return SPUserGroupTypeAddRole
	 */
	public function __construct($_roleName = null,$_description = null,$_permissionMask = null)
	{
		parent::__construct(array('roleName'=>$_roleName,'description'=>$_description,'permissionMask'=>$_permissionMask));
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
	 * Set permissionMask
	 * @param int permissionMask
	 * @return int
	 */
	public function setPermissionMask($_permissionMask)
	{
		return ($this->permissionMask = $_permissionMask);
	}
	/**
	 * Get permissionMask
	 * @return int
	 */
	public function getPermissionMask()
	{
		return $this->permissionMask;
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