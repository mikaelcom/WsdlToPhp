<?php
/**
 * Class file for SPPermissionsTypeAddPermissionCollection
 * @date 06/07/2012
 */
/**
 * Class SPPermissionsTypeAddPermissionCollection
 * @date 06/07/2012
 */
class SPPermissionsTypeAddPermissionCollection extends SPPermissionsWsdlClass
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
	 * The permissionsInfoXml
	 * @var SPPermissionsTypePermissionsInfoXml
	 */
	public $permissionsInfoXml;
	/**
	 * Constructor
	 * @param string objectName
	 * @param string objectType
	 * @param SPPermissionsTypePermissionsInfoXml permissionsInfoXml
	 * @return SPPermissionsTypeAddPermissionCollection
	 */
	public function __construct($_objectName = null,$_objectType = null,$_permissionsInfoXml = null)
	{
		parent::__construct(array('objectName'=>$_objectName,'objectType'=>$_objectType,'permissionsInfoXml'=>$_permissionsInfoXml));
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
	 * Set permissionsInfoXml
	 * @param permissionsInfoXml permissionsInfoXml
	 * @return permissionsInfoXml
	 */
	public function setPermissionsInfoXml($_permissionsInfoXml)
	{
		return ($this->permissionsInfoXml = $_permissionsInfoXml);
	}
	/**
	 * Get permissionsInfoXml
	 * @return SPPermissionsTypepermissionsInfoXml
	 */
	public function getPermissionsInfoXml()
	{
		return $this->permissionsInfoXml;
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