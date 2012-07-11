<?php
/**
 * Class file for SPUserGroupServiceUpdate
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupServiceUpdate
 * @date 06/07/2012
 */
class SPUserGroupServiceUpdate extends SPUserGroupWsdlClass
{
	/**
	 * Method to call UpdateUserInfo
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeUpdateUserInfo::getUserLoginName()
	 * @uses SPUserGroupTypeUpdateUserInfo::getUserName()
	 * @uses SPUserGroupTypeUpdateUserInfo::getUserEmail()
	 * @uses SPUserGroupTypeUpdateUserInfo::getUserNotes()
	 * @param SPUserGroupTypeUpdateUserInfo UpdateUserInfo
	 * @return SPUserGroupTypeUpdateUserInfoResponse
	 */
	public function UpdateUserInfo(SPUserGroupTypeUpdateUserInfo $_SPUserGroupTypeUpdateUserInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateUserInfo(array('userLoginName'=>$_SPUserGroupTypeUpdateUserInfo->getUserLoginName(),'userName'=>$_SPUserGroupTypeUpdateUserInfo->getUserName(),'userEmail'=>$_SPUserGroupTypeUpdateUserInfo->getUserEmail(),'userNotes'=>$_SPUserGroupTypeUpdateUserInfo->getUserNotes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateGroupInfo
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeUpdateGroupInfo::getOldGroupName()
	 * @uses SPUserGroupTypeUpdateGroupInfo::getGroupName()
	 * @uses SPUserGroupTypeUpdateGroupInfo::getOwnerIdentifier()
	 * @uses SPUserGroupTypeUpdateGroupInfo::getOwnerType()
	 * @uses SPUserGroupTypeUpdateGroupInfo::getDescription()
	 * @param SPUserGroupTypeUpdateGroupInfo UpdateGroupInfo
	 * @return SPUserGroupTypeUpdateGroupInfoResponse
	 */
	public function UpdateGroupInfo(SPUserGroupTypeUpdateGroupInfo $_SPUserGroupTypeUpdateGroupInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateGroupInfo(array('oldGroupName'=>$_SPUserGroupTypeUpdateGroupInfo->getOldGroupName(),'groupName'=>$_SPUserGroupTypeUpdateGroupInfo->getGroupName(),'ownerIdentifier'=>$_SPUserGroupTypeUpdateGroupInfo->getOwnerIdentifier(),'ownerType'=>$_SPUserGroupTypeUpdateGroupInfo->getOwnerType(),'description'=>$_SPUserGroupTypeUpdateGroupInfo->getDescription())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateRoleInfo
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeUpdateRoleInfo::getOldRoleName()
	 * @uses SPUserGroupTypeUpdateRoleInfo::getRoleName()
	 * @uses SPUserGroupTypeUpdateRoleInfo::getDescription()
	 * @uses SPUserGroupTypeUpdateRoleInfo::getPermissionMask()
	 * @param SPUserGroupTypeUpdateRoleInfo UpdateRoleInfo
	 * @return SPUserGroupTypeUpdateRoleInfoResponse
	 */
	public function UpdateRoleInfo(SPUserGroupTypeUpdateRoleInfo $_SPUserGroupTypeUpdateRoleInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateRoleInfo(array('oldRoleName'=>$_SPUserGroupTypeUpdateRoleInfo->getOldRoleName(),'roleName'=>$_SPUserGroupTypeUpdateRoleInfo->getRoleName(),'description'=>$_SPUserGroupTypeUpdateRoleInfo->getDescription(),'permissionMask'=>$_SPUserGroupTypeUpdateRoleInfo->getPermissionMask())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateRoleDefInfo
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeUpdateRoleDefInfo::getOldRoleName()
	 * @uses SPUserGroupTypeUpdateRoleDefInfo::getRoleName()
	 * @uses SPUserGroupTypeUpdateRoleDefInfo::getDescription()
	 * @uses SPUserGroupTypeUpdateRoleDefInfo::getPermissionMask()
	 * @param SPUserGroupTypeUpdateRoleDefInfo UpdateRoleDefInfo
	 * @return SPUserGroupTypeUpdateRoleDefInfoResponse
	 */
	public function UpdateRoleDefInfo(SPUserGroupTypeUpdateRoleDefInfo $_SPUserGroupTypeUpdateRoleDefInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateRoleDefInfo(array('oldRoleName'=>$_SPUserGroupTypeUpdateRoleDefInfo->getOldRoleName(),'roleName'=>$_SPUserGroupTypeUpdateRoleDefInfo->getRoleName(),'description'=>$_SPUserGroupTypeUpdateRoleDefInfo->getDescription(),'permissionMask'=>$_SPUserGroupTypeUpdateRoleDefInfo->getPermissionMask())));
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
	 * @return SPUserGroupTypeUpdateRoleDefInfoResponse
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