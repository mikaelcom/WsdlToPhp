<?php
/**
 * Class file for SPPermissionsServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPPermissionsServiceGet
 * @date 06/07/2012
 */
class SPPermissionsServiceGet extends SPPermissionsWsdlClass
{
	/**
	 * Method to call GetPermissionCollection
	 * @uses SPPermissionsWsdlClass::getSoapClient()
	 * @uses SPPermissionsWsdlClass::setResult()
	 * @uses SPPermissionsWsdlClass::getResult()
	 * @uses SPPermissionsWsdlClass::saveLastError()
	 * @uses SPPermissionsTypeGetPermissionCollection::getObjectName()
	 * @uses SPPermissionsTypeGetPermissionCollection::getObjectType()
	 * @param SPPermissionsTypeGetPermissionCollection GetPermissionCollection
	 * @return SPPermissionsTypeGetPermissionCollectionResponse
	 */
	public function GetPermissionCollection(SPPermissionsTypeGetPermissionCollection $_SPPermissionsTypeGetPermissionCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPermissionCollection(array('objectName'=>$_SPPermissionsTypeGetPermissionCollection->getObjectName(),'objectType'=>$_SPPermissionsTypeGetPermissionCollection->getObjectType())));
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
	 * @return SPPermissionsTypeGetPermissionCollectionResponse
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