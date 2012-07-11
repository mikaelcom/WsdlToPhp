<?php
/**
 * Class file for SPPermissionsTypeGetPermissionCollection
 * @date 06/07/2012
 */
/**
 * Class SPPermissionsTypeGetPermissionCollection
 * @date 06/07/2012
 */
class SPPermissionsTypeGetPermissionCollection extends SPPermissionsWsdlClass
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
	 * Constructor
	 * @param string objectName
	 * @param string objectType
	 * @return SPPermissionsTypeGetPermissionCollection
	 */
	public function __construct($_objectName = null,$_objectType = null)
	{
		parent::__construct(array('objectName'=>$_objectName,'objectType'=>$_objectType));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>