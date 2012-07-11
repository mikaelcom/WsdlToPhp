<?php
/**
 * Class file for SPPermissionsTypeRemovePermissionCollection
 * @date 06/07/2012
 */
/**
 * Class SPPermissionsTypeRemovePermissionCollection
 * @date 06/07/2012
 */
class SPPermissionsTypeRemovePermissionCollection extends SPPermissionsWsdlClass
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
	 * The memberIdsXml
	 * @var SPPermissionsTypeMemberIdsXml
	 */
	public $memberIdsXml;
	/**
	 * Constructor
	 * @param string objectName
	 * @param string objectType
	 * @param SPPermissionsTypeMemberIdsXml memberIdsXml
	 * @return SPPermissionsTypeRemovePermissionCollection
	 */
	public function __construct($_objectName = null,$_objectType = null,$_memberIdsXml = null)
	{
		parent::__construct(array('objectName'=>$_objectName,'objectType'=>$_objectType,'memberIdsXml'=>$_memberIdsXml));
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
	 * Set memberIdsXml
	 * @param memberIdsXml memberIdsXml
	 * @return memberIdsXml
	 */
	public function setMemberIdsXml($_memberIdsXml)
	{
		return ($this->memberIdsXml = $_memberIdsXml);
	}
	/**
	 * Get memberIdsXml
	 * @return SPPermissionsTypememberIdsXml
	 */
	public function getMemberIdsXml()
	{
		return $this->memberIdsXml;
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