<?php
/**
 * Class file for SPUserGroupServiceRemove
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupServiceRemove
 * @date 06/07/2012
 */
class SPUserGroupServiceRemove extends SPUserGroupWsdlClass
{
	/**
	 * Method to call RemoveUserFromSite
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeRemoveUserFromSite::getUserLoginName()
	 * @param SPUserGroupTypeRemoveUserFromSite RemoveUserFromSite
	 * @return SPUserGroupTypeRemoveUserFromSiteResponse
	 */
	public function RemoveUserFromSite(SPUserGroupTypeRemoveUserFromSite $_SPUserGroupTypeRemoveUserFromSite)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveUserFromSite(array('userLoginName'=>$_SPUserGroupTypeRemoveUserFromSite->getUserLoginName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RemoveUserCollectionFromSite
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeRemoveUserCollectionFromSite::getUserLoginNamesXml()
	 * @param SPUserGroupTypeRemoveUserCollectionFromSite RemoveUserCollectionFromSite
	 * @return SPUserGroupTypeRemoveUserCollectionFromSiteResponse
	 */
	public function RemoveUserCollectionFromSite(SPUserGroupTypeRemoveUserCollectionFromSite $_SPUserGroupTypeRemoveUserCollectionFromSite)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveUserCollectionFromSite(array('userLoginNamesXml'=>$_SPUserGroupTypeRemoveUserCollectionFromSite->getUserLoginNamesXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RemoveUserFromWeb
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeRemoveUserFromWeb::getUserLoginName()
	 * @param SPUserGroupTypeRemoveUserFromWeb RemoveUserFromWeb
	 * @return SPUserGroupTypeRemoveUserFromWebResponse
	 */
	public function RemoveUserFromWeb(SPUserGroupTypeRemoveUserFromWeb $_SPUserGroupTypeRemoveUserFromWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveUserFromWeb(array('userLoginName'=>$_SPUserGroupTypeRemoveUserFromWeb->getUserLoginName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RemoveUserFromGroup
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeRemoveUserFromGroup::getGroupName()
	 * @uses SPUserGroupTypeRemoveUserFromGroup::getUserLoginName()
	 * @param SPUserGroupTypeRemoveUserFromGroup RemoveUserFromGroup
	 * @return SPUserGroupTypeRemoveUserFromGroupResponse
	 */
	public function RemoveUserFromGroup(SPUserGroupTypeRemoveUserFromGroup $_SPUserGroupTypeRemoveUserFromGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveUserFromGroup(array('groupName'=>$_SPUserGroupTypeRemoveUserFromGroup->getGroupName(),'userLoginName'=>$_SPUserGroupTypeRemoveUserFromGroup->getUserLoginName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RemoveUserCollectionFromGroup
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeRemoveUserCollectionFromGroup::getGroupName()
	 * @uses SPUserGroupTypeRemoveUserCollectionFromGroup::getUserLoginNamesXml()
	 * @param SPUserGroupTypeRemoveUserCollectionFromGroup RemoveUserCollectionFromGroup
	 * @return SPUserGroupTypeRemoveUserCollectionFromGroupResponse
	 */
	public function RemoveUserCollectionFromGroup(SPUserGroupTypeRemoveUserCollectionFromGroup $_SPUserGroupTypeRemoveUserCollectionFromGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveUserCollectionFromGroup(array('groupName'=>$_SPUserGroupTypeRemoveUserCollectionFromGroup->getGroupName(),'userLoginNamesXml'=>$_SPUserGroupTypeRemoveUserCollectionFromGroup->getUserLoginNamesXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RemoveUserFromRole
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeRemoveUserFromRole::getRoleName()
	 * @uses SPUserGroupTypeRemoveUserFromRole::getUserLoginName()
	 * @param SPUserGroupTypeRemoveUserFromRole RemoveUserFromRole
	 * @return SPUserGroupTypeRemoveUserFromRoleResponse
	 */
	public function RemoveUserFromRole(SPUserGroupTypeRemoveUserFromRole $_SPUserGroupTypeRemoveUserFromRole)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveUserFromRole(array('roleName'=>$_SPUserGroupTypeRemoveUserFromRole->getRoleName(),'userLoginName'=>$_SPUserGroupTypeRemoveUserFromRole->getUserLoginName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RemoveUserCollectionFromRole
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeRemoveUserCollectionFromRole::getRoleName()
	 * @uses SPUserGroupTypeRemoveUserCollectionFromRole::getUserLoginNamesXml()
	 * @param SPUserGroupTypeRemoveUserCollectionFromRole RemoveUserCollectionFromRole
	 * @return SPUserGroupTypeRemoveUserCollectionFromRoleResponse
	 */
	public function RemoveUserCollectionFromRole(SPUserGroupTypeRemoveUserCollectionFromRole $_SPUserGroupTypeRemoveUserCollectionFromRole)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveUserCollectionFromRole(array('roleName'=>$_SPUserGroupTypeRemoveUserCollectionFromRole->getRoleName(),'userLoginNamesXml'=>$_SPUserGroupTypeRemoveUserCollectionFromRole->getUserLoginNamesXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RemoveGroup
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeRemoveGroup::getGroupName()
	 * @param SPUserGroupTypeRemoveGroup RemoveGroup
	 * @return SPUserGroupTypeRemoveGroupResponse
	 */
	public function RemoveGroup(SPUserGroupTypeRemoveGroup $_SPUserGroupTypeRemoveGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveGroup(array('groupName'=>$_SPUserGroupTypeRemoveGroup->getGroupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RemoveGroupFromRole
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeRemoveGroupFromRole::getRoleName()
	 * @uses SPUserGroupTypeRemoveGroupFromRole::getGroupName()
	 * @param SPUserGroupTypeRemoveGroupFromRole RemoveGroupFromRole
	 * @return SPUserGroupTypeRemoveGroupFromRoleResponse
	 */
	public function RemoveGroupFromRole(SPUserGroupTypeRemoveGroupFromRole $_SPUserGroupTypeRemoveGroupFromRole)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveGroupFromRole(array('roleName'=>$_SPUserGroupTypeRemoveGroupFromRole->getRoleName(),'groupName'=>$_SPUserGroupTypeRemoveGroupFromRole->getGroupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RemoveRole
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeRemoveRole::getRoleName()
	 * @param SPUserGroupTypeRemoveRole RemoveRole
	 * @return SPUserGroupTypeRemoveRoleResponse
	 */
	public function RemoveRole(SPUserGroupTypeRemoveRole $_SPUserGroupTypeRemoveRole)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveRole(array('roleName'=>$_SPUserGroupTypeRemoveRole->getRoleName())));
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
	 * @return SPUserGroupTypeRemoveRoleResponse
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