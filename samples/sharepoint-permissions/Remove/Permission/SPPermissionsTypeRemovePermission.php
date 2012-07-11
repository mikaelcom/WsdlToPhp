<?php
/**
 * Class file for SPPermissionsTypeRemovePermission
 * @date 06/07/2012
 */
/**
 * Class SPPermissionsTypeRemovePermission
 * @date 06/07/2012
 */
class SPPermissionsTypeRemovePermission extends SPPermissionsWsdlClass
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
	 * Constructor
	 * @param string objectName
	 * @param string objectType
	 * @param string permissionIdentifier
	 * @param string permissionType
	 * @return SPPermissionsTypeRemovePermission
	 */
	public function __construct($_objectName = null,$_objectType = null,$_permissionIdentifier = null,$_permissionType = null)
	{
		parent::__construct(array('objectName'=>$_objectName,'objectType'=>$_objectType,'permissionIdentifier'=>$_permissionIdentifier,'permissionType'=>$_permissionType));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>