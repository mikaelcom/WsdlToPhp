<?php
/**
 * Class file for SPPermissionsServiceAdd
 * @date 06/07/2012
 */
/**
 * Class SPPermissionsServiceAdd
 * @date 06/07/2012
 */
class SPPermissionsServiceAdd extends SPPermissionsWsdlClass
{
	/**
	 * Method to call AddPermission
	 * @uses SPPermissionsWsdlClass::getSoapClient()
	 * @uses SPPermissionsWsdlClass::setResult()
	 * @uses SPPermissionsWsdlClass::getResult()
	 * @uses SPPermissionsWsdlClass::saveLastError()
	 * @uses SPPermissionsTypeAddPermission::getObjectName()
	 * @uses SPPermissionsTypeAddPermission::getObjectType()
	 * @uses SPPermissionsTypeAddPermission::getPermissionIdentifier()
	 * @uses SPPermissionsTypeAddPermission::getPermissionType()
	 * @uses SPPermissionsTypeAddPermission::getPermissionMask()
	 * @param SPPermissionsTypeAddPermission AddPermission
	 * @return SPPermissionsTypeAddPermissionResponse
	 */
	public function AddPermission(SPPermissionsTypeAddPermission $_SPPermissionsTypeAddPermission)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddPermission(array('objectName'=>$_SPPermissionsTypeAddPermission->getObjectName(),'objectType'=>$_SPPermissionsTypeAddPermission->getObjectType(),'permissionIdentifier'=>$_SPPermissionsTypeAddPermission->getPermissionIdentifier(),'permissionType'=>$_SPPermissionsTypeAddPermission->getPermissionType(),'permissionMask'=>$_SPPermissionsTypeAddPermission->getPermissionMask())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddPermissionCollection
	 * @uses SPPermissionsWsdlClass::getSoapClient()
	 * @uses SPPermissionsWsdlClass::setResult()
	 * @uses SPPermissionsWsdlClass::getResult()
	 * @uses SPPermissionsWsdlClass::saveLastError()
	 * @uses SPPermissionsTypeAddPermissionCollection::getObjectName()
	 * @uses SPPermissionsTypeAddPermissionCollection::getObjectType()
	 * @uses SPPermissionsTypeAddPermissionCollection::getPermissionsInfoXml()
	 * @param SPPermissionsTypeAddPermissionCollection AddPermissionCollection
	 * @return SPPermissionsTypeAddPermissionCollectionResponse
	 */
	public function AddPermissionCollection(SPPermissionsTypeAddPermissionCollection $_SPPermissionsTypeAddPermissionCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddPermissionCollection(array('objectName'=>$_SPPermissionsTypeAddPermissionCollection->getObjectName(),'objectType'=>$_SPPermissionsTypeAddPermissionCollection->getObjectType(),'permissionsInfoXml'=>$_SPPermissionsTypeAddPermissionCollection->getPermissionsInfoXml())));
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
	 * @return SPPermissionsTypeAddPermissionCollectionResponse
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