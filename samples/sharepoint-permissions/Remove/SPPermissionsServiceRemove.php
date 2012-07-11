<?php
/**
 * Class file for SPPermissionsServiceRemove
 * @date 06/07/2012
 */
/**
 * Class SPPermissionsServiceRemove
 * @date 06/07/2012
 */
class SPPermissionsServiceRemove extends SPPermissionsWsdlClass
{
	/**
	 * Method to call RemovePermission
	 * @uses SPPermissionsWsdlClass::getSoapClient()
	 * @uses SPPermissionsWsdlClass::setResult()
	 * @uses SPPermissionsWsdlClass::getResult()
	 * @uses SPPermissionsWsdlClass::saveLastError()
	 * @uses SPPermissionsTypeRemovePermission::getObjectName()
	 * @uses SPPermissionsTypeRemovePermission::getObjectType()
	 * @uses SPPermissionsTypeRemovePermission::getPermissionIdentifier()
	 * @uses SPPermissionsTypeRemovePermission::getPermissionType()
	 * @param SPPermissionsTypeRemovePermission RemovePermission
	 * @return SPPermissionsTypeRemovePermissionResponse
	 */
	public function RemovePermission(SPPermissionsTypeRemovePermission $_SPPermissionsTypeRemovePermission)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemovePermission(array('objectName'=>$_SPPermissionsTypeRemovePermission->getObjectName(),'objectType'=>$_SPPermissionsTypeRemovePermission->getObjectType(),'permissionIdentifier'=>$_SPPermissionsTypeRemovePermission->getPermissionIdentifier(),'permissionType'=>$_SPPermissionsTypeRemovePermission->getPermissionType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RemovePermissionCollection
	 * @uses SPPermissionsWsdlClass::getSoapClient()
	 * @uses SPPermissionsWsdlClass::setResult()
	 * @uses SPPermissionsWsdlClass::getResult()
	 * @uses SPPermissionsWsdlClass::saveLastError()
	 * @uses SPPermissionsTypeRemovePermissionCollection::getObjectName()
	 * @uses SPPermissionsTypeRemovePermissionCollection::getObjectType()
	 * @uses SPPermissionsTypeRemovePermissionCollection::getMemberIdsXml()
	 * @param SPPermissionsTypeRemovePermissionCollection RemovePermissionCollection
	 * @return SPPermissionsTypeRemovePermissionCollectionResponse
	 */
	public function RemovePermissionCollection(SPPermissionsTypeRemovePermissionCollection $_SPPermissionsTypeRemovePermissionCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemovePermissionCollection(array('objectName'=>$_SPPermissionsTypeRemovePermissionCollection->getObjectName(),'objectType'=>$_SPPermissionsTypeRemovePermissionCollection->getObjectType(),'memberIdsXml'=>$_SPPermissionsTypeRemovePermissionCollection->getMemberIdsXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return SPPermissionsTypeRemovePermissionCollectionResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>