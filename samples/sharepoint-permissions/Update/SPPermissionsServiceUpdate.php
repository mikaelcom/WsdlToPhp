<?php
/**
 * Class file for SPPermissionsServiceUpdate
 * @date 06/07/2012
 */
/**
 * Class SPPermissionsServiceUpdate
 * @date 06/07/2012
 */
class SPPermissionsServiceUpdate extends SPPermissionsWsdlClass
{
	/**
	 * Method to call UpdatePermission
	 * @uses SPPermissionsWsdlClass::getSoapClient()
	 * @uses SPPermissionsWsdlClass::setResult()
	 * @uses SPPermissionsWsdlClass::getResult()
	 * @uses SPPermissionsWsdlClass::saveLastError()
	 * @uses SPPermissionsTypeUpdatePermission::getObjectName()
	 * @uses SPPermissionsTypeUpdatePermission::getObjectType()
	 * @uses SPPermissionsTypeUpdatePermission::getPermissionIdentifier()
	 * @uses SPPermissionsTypeUpdatePermission::getPermissionType()
	 * @uses SPPermissionsTypeUpdatePermission::getPermissionMask()
	 * @param SPPermissionsTypeUpdatePermission UpdatePermission
	 * @return SPPermissionsTypeUpdatePermissionResponse
	 */
	public function UpdatePermission(SPPermissionsTypeUpdatePermission $_SPPermissionsTypeUpdatePermission)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdatePermission(array('objectName'=>$_SPPermissionsTypeUpdatePermission->getObjectName(),'objectType'=>$_SPPermissionsTypeUpdatePermission->getObjectType(),'permissionIdentifier'=>$_SPPermissionsTypeUpdatePermission->getPermissionIdentifier(),'permissionType'=>$_SPPermissionsTypeUpdatePermission->getPermissionType(),'permissionMask'=>$_SPPermissionsTypeUpdatePermission->getPermissionMask())));
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
	 * @return SPPermissionsTypeUpdatePermissionResponse
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