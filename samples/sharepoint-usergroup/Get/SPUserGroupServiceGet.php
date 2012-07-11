<?php
/**
 * Class file for SPUserGroupServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupServiceGet
 * @date 06/07/2012
 */
class SPUserGroupServiceGet extends SPUserGroupWsdlClass
{
	/**
	 * Method to call GetUserCollectionFromSite
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @param SPUserGroupTypeGetUserCollectionFromSite GetUserCollectionFromSite
	 * @return SPUserGroupTypeGetUserCollectionFromSiteResponse
	 */
	public function GetUserCollectionFromSite(SPUserGroupTypeGetUserCollectionFromSite $_SPUserGroupTypeGetUserCollectionFromSite)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserCollectionFromSite(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUserCollectionFromWeb
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @param SPUserGroupTypeGetUserCollectionFromWeb GetUserCollectionFromWeb
	 * @return SPUserGroupTypeGetUserCollectionFromWebResponse
	 */
	public function GetUserCollectionFromWeb(SPUserGroupTypeGetUserCollectionFromWeb $_SPUserGroupTypeGetUserCollectionFromWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserCollectionFromWeb(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllUserCollectionFromWeb
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @param SPUserGroupTypeGetAllUserCollectionFromWeb GetAllUserCollectionFromWeb
	 * @return SPUserGroupTypeGetAllUserCollectionFromWebResponse
	 */
	public function GetAllUserCollectionFromWeb(SPUserGroupTypeGetAllUserCollectionFromWeb $_SPUserGroupTypeGetAllUserCollectionFromWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllUserCollectionFromWeb(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUserCollectionFromGroup
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetUserCollectionFromGroup::getGroupName()
	 * @param SPUserGroupTypeGetUserCollectionFromGroup GetUserCollectionFromGroup
	 * @return SPUserGroupTypeGetUserCollectionFromGroupResponse
	 */
	public function GetUserCollectionFromGroup(SPUserGroupTypeGetUserCollectionFromGroup $_SPUserGroupTypeGetUserCollectionFromGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserCollectionFromGroup(array('groupName'=>$_SPUserGroupTypeGetUserCollectionFromGroup->getGroupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUserCollectionFromRole
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetUserCollectionFromRole::getRoleName()
	 * @param SPUserGroupTypeGetUserCollectionFromRole GetUserCollectionFromRole
	 * @return SPUserGroupTypeGetUserCollectionFromRoleResponse
	 */
	public function GetUserCollectionFromRole(SPUserGroupTypeGetUserCollectionFromRole $_SPUserGroupTypeGetUserCollectionFromRole)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserCollectionFromRole(array('roleName'=>$_SPUserGroupTypeGetUserCollectionFromRole->getRoleName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUserCollection
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetUserCollection::getUserLoginNamesXml()
	 * @param SPUserGroupTypeGetUserCollection GetUserCollection
	 * @return SPUserGroupTypeGetUserCollectionResponse
	 */
	public function GetUserCollection(SPUserGroupTypeGetUserCollection $_SPUserGroupTypeGetUserCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserCollection(array('userLoginNamesXml'=>$_SPUserGroupTypeGetUserCollection->getUserLoginNamesXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUserInfo
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetUserInfo::getUserLoginName()
	 * @param SPUserGroupTypeGetUserInfo GetUserInfo
	 * @return SPUserGroupTypeGetUserInfoResponse
	 */
	public function GetUserInfo(SPUserGroupTypeGetUserInfo $_SPUserGroupTypeGetUserInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserInfo(array('userLoginName'=>$_SPUserGroupTypeGetUserInfo->getUserLoginName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCurrentUserInfo
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @param SPUserGroupTypeGetCurrentUserInfo GetCurrentUserInfo
	 * @return SPUserGroupTypeGetCurrentUserInfoResponse
	 */
	public function GetCurrentUserInfo(SPUserGroupTypeGetCurrentUserInfo $_SPUserGroupTypeGetCurrentUserInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCurrentUserInfo(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGroupCollectionFromSite
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @param SPUserGroupTypeGetGroupCollectionFromSite GetGroupCollectionFromSite
	 * @return SPUserGroupTypeGetGroupCollectionFromSiteResponse
	 */
	public function GetGroupCollectionFromSite(SPUserGroupTypeGetGroupCollectionFromSite $_SPUserGroupTypeGetGroupCollectionFromSite)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGroupCollectionFromSite(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGroupCollectionFromWeb
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @param SPUserGroupTypeGetGroupCollectionFromWeb GetGroupCollectionFromWeb
	 * @return SPUserGroupTypeGetGroupCollectionFromWebResponse
	 */
	public function GetGroupCollectionFromWeb(SPUserGroupTypeGetGroupCollectionFromWeb $_SPUserGroupTypeGetGroupCollectionFromWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGroupCollectionFromWeb(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGroupCollectionFromRole
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetGroupCollectionFromRole::getRoleName()
	 * @param SPUserGroupTypeGetGroupCollectionFromRole GetGroupCollectionFromRole
	 * @return SPUserGroupTypeGetGroupCollectionFromRoleResponse
	 */
	public function GetGroupCollectionFromRole(SPUserGroupTypeGetGroupCollectionFromRole $_SPUserGroupTypeGetGroupCollectionFromRole)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGroupCollectionFromRole(array('roleName'=>$_SPUserGroupTypeGetGroupCollectionFromRole->getRoleName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGroupCollectionFromUser
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetGroupCollectionFromUser::getUserLoginName()
	 * @param SPUserGroupTypeGetGroupCollectionFromUser GetGroupCollectionFromUser
	 * @return SPUserGroupTypeGetGroupCollectionFromUserResponse
	 */
	public function GetGroupCollectionFromUser(SPUserGroupTypeGetGroupCollectionFromUser $_SPUserGroupTypeGetGroupCollectionFromUser)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGroupCollectionFromUser(array('userLoginName'=>$_SPUserGroupTypeGetGroupCollectionFromUser->getUserLoginName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGroupCollection
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetGroupCollection::getGroupNamesXml()
	 * @param SPUserGroupTypeGetGroupCollection GetGroupCollection
	 * @return SPUserGroupTypeGetGroupCollectionResponse
	 */
	public function GetGroupCollection(SPUserGroupTypeGetGroupCollection $_SPUserGroupTypeGetGroupCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGroupCollection(array('groupNamesXml'=>$_SPUserGroupTypeGetGroupCollection->getGroupNamesXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGroupInfo
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetGroupInfo::getGroupName()
	 * @param SPUserGroupTypeGetGroupInfo GetGroupInfo
	 * @return SPUserGroupTypeGetGroupInfoResponse
	 */
	public function GetGroupInfo(SPUserGroupTypeGetGroupInfo $_SPUserGroupTypeGetGroupInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGroupInfo(array('groupName'=>$_SPUserGroupTypeGetGroupInfo->getGroupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRoleCollectionFromWeb
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @param SPUserGroupTypeGetRoleCollectionFromWeb GetRoleCollectionFromWeb
	 * @return SPUserGroupTypeGetRoleCollectionFromWebResponse
	 */
	public function GetRoleCollectionFromWeb(SPUserGroupTypeGetRoleCollectionFromWeb $_SPUserGroupTypeGetRoleCollectionFromWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRoleCollectionFromWeb(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRoleCollectionFromGroup
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetRoleCollectionFromGroup::getGroupName()
	 * @param SPUserGroupTypeGetRoleCollectionFromGroup GetRoleCollectionFromGroup
	 * @return SPUserGroupTypeGetRoleCollectionFromGroupResponse
	 */
	public function GetRoleCollectionFromGroup(SPUserGroupTypeGetRoleCollectionFromGroup $_SPUserGroupTypeGetRoleCollectionFromGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRoleCollectionFromGroup(array('groupName'=>$_SPUserGroupTypeGetRoleCollectionFromGroup->getGroupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRoleCollectionFromUser
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetRoleCollectionFromUser::getUserLoginName()
	 * @param SPUserGroupTypeGetRoleCollectionFromUser GetRoleCollectionFromUser
	 * @return SPUserGroupTypeGetRoleCollectionFromUserResponse
	 */
	public function GetRoleCollectionFromUser(SPUserGroupTypeGetRoleCollectionFromUser $_SPUserGroupTypeGetRoleCollectionFromUser)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRoleCollectionFromUser(array('userLoginName'=>$_SPUserGroupTypeGetRoleCollectionFromUser->getUserLoginName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRoleCollection
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetRoleCollection::getRoleNamesXml()
	 * @param SPUserGroupTypeGetRoleCollection GetRoleCollection
	 * @return SPUserGroupTypeGetRoleCollectionResponse
	 */
	public function GetRoleCollection(SPUserGroupTypeGetRoleCollection $_SPUserGroupTypeGetRoleCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRoleCollection(array('roleNamesXml'=>$_SPUserGroupTypeGetRoleCollection->getRoleNamesXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRoleInfo
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetRoleInfo::getRoleName()
	 * @param SPUserGroupTypeGetRoleInfo GetRoleInfo
	 * @return SPUserGroupTypeGetRoleInfoResponse
	 */
	public function GetRoleInfo(SPUserGroupTypeGetRoleInfo $_SPUserGroupTypeGetRoleInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRoleInfo(array('roleName'=>$_SPUserGroupTypeGetRoleInfo->getRoleName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUserLoginFromEmail
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeGetUserLoginFromEmail::getEmailXml()
	 * @param SPUserGroupTypeGetUserLoginFromEmail GetUserLoginFromEmail
	 * @return SPUserGroupTypeGetUserLoginFromEmailResponse
	 */
	public function GetUserLoginFromEmail(SPUserGroupTypeGetUserLoginFromEmail $_SPUserGroupTypeGetUserLoginFromEmail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserLoginFromEmail(array('emailXml'=>$_SPUserGroupTypeGetUserLoginFromEmail->getEmailXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRolesAndPermissionsForCurrentUser
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @param SPUserGroupTypeGetRolesAndPermissionsForCurrentUser GetRolesAndPermissionsForCurrentUser
	 * @return SPUserGroupTypeGetRolesAndPermissionsForCurrentUserResponse
	 */
	public function GetRolesAndPermissionsForCurrentUser(SPUserGroupTypeGetRolesAndPermissionsForCurrentUser $_SPUserGroupTypeGetRolesAndPermissionsForCurrentUser)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRolesAndPermissionsForCurrentUser(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRolesAndPermissionsForSite
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @param SPUserGroupTypeGetRolesAndPermissionsForSite GetRolesAndPermissionsForSite
	 * @return SPUserGroupTypeGetRolesAndPermissionsForSiteResponse
	 */
	public function GetRolesAndPermissionsForSite(SPUserGroupTypeGetRolesAndPermissionsForSite $_SPUserGroupTypeGetRolesAndPermissionsForSite)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRolesAndPermissionsForSite(array()));
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
	 * @return SPUserGroupTypeGetRolesAndPermissionsForSiteResponse
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