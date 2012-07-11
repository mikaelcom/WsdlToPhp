<?php
/**
 * Class file for SPUserGroupTypeAddRoleDef
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeAddRoleDef
 * @date 06/07/2012
 */
class SPUserGroupTypeAddRoleDef extends SPUserGroupWsdlClass
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
	 * @var unsignedLong
	 */
	public $permissionMask;
	/**
	 * Constructor
	 * @param string roleName
	 * @param string description
	 * @param unsignedLong permissionMask
	 * @return SPUserGroupTypeAddRoleDef
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
	 * @param unsignedLong permissionMask
	 * @return unsignedLong
	 */
	public function setPermissionMask($_permissionMask)
	{
		return ($this->permissionMask = $_permissionMask);
	}
	/**
	 * Get permissionMask
	 * @return unsignedLong
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