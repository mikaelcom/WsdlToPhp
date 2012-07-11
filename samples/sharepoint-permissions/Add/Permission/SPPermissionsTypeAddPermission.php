<?php
/**
 * Class file for SPPermissionsTypeAddPermission
 * @date 06/07/2012
 */
/**
 * Class SPPermissionsTypeAddPermission
 * @date 06/07/2012
 */
class SPPermissionsTypeAddPermission extends SPPermissionsWsdlClass
{
	/**
	 * The objectName
	 * @var string
	 */
	public $objectName;
	/**
	 * The objectType
	 * @var string
	 */
	public $objectType;
	/**
	 * The permissionIdentifier
	 * @var string
	 */
	public $permissionIdentifier;
	/**
	 * The permissionType
	 * @var string
	 */
	public $permissionType;
	/**
	 * The permissionMask
	 * @var int
	 */
	public $permissionMask;
	/**
	 * Constructor
	 * @param string objectName
	 * @param string objectType
	 * @param string permissionIdentifier
	 * @param string permissionType
	 * @param int permissionMask
	 * @return SPPermissionsTypeAddPermission
	 */
	public function __construct($_objectName = null,$_objectType = null,$_permissionIdentifier = null,$_permissionType = null,$_permissionMask = null)
	{
		parent::__construct(array('objectName'=>$_objectName,'objectType'=>$_objectType,'permissionIdentifier'=>$_permissionIdentifier,'permissionType'=>$_permissionType,'permissionMask'=>$_permissionMask));
	}
	/**
	 * Set objectName
	 * @param string objectName
	 * @return string
	 */
	public function setObjectName($_objectName)
	{
		return ($this->objectName = $_objectName);
	}
	/**
	 * Get objectName
	 * @return string
	 */
	public function getObjectName()
	{
		return $this->objectName;
	}
	/**
	 * Set objectType
	 * @param string objectType
	 * @return string
	 */
	public function setObjectType($_objectType)
	{
		return ($this->objectType = $_objectType);
	}
	/**
	 * Get objectType
	 * @return string
	 */
	public function getObjectType()
	{
		return $this->objectType;
	}
	/**
	 * Set permissionIdentifier
	 * @param string permissionIdentifier
	 * @return string
	 */
	public function setPermissionIdentifier($_permissionIdentifier)
	{
		return ($this->permissionIdentifier = $_permissionIdentifier);
	}
	/**
	 * Get permissionIdentifier
	 * @return string
	 */
	public function getPermissionIdentifier()
	{
		return $this->permissionIdentifier;
	}
	/**
	 * Set permissionType
	 * @param string permissionType
	 * @return string
	 */
	public function setPermissionType($_permissionType)
	{
		return ($this->permissionType = $_permissionType);
	}
	/**
	 * Get permissionType
	 * @return string
	 */
	public function getPermissionType()
	{
		return $this->permissionType;
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