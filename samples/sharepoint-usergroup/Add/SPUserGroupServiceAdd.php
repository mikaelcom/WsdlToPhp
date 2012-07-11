<?php
/**
 * Class file for SPUserGroupServiceAdd
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupServiceAdd
 * @date 06/07/2012
 */
class SPUserGroupServiceAdd extends SPUserGroupWsdlClass
{
	/**
	 * Method to call AddUserToGroup
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeAddUserToGroup::getGroupName()
	 * @uses SPUserGroupTypeAddUserToGroup::getUserName()
	 * @uses SPUserGroupTypeAddUserToGroup::getUserLoginName()
	 * @uses SPUserGroupTypeAddUserToGroup::getUserEmail()
	 * @uses SPUserGroupTypeAddUserToGroup::getUserNotes()
	 * @param SPUserGroupTypeAddUserToGroup AddUserToGroup
	 * @return SPUserGroupTypeAddUserToGroupResponse
	 */
	public function AddUserToGroup(SPUserGroupTypeAddUserToGroup $_SPUserGroupTypeAddUserToGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddUserToGroup(array('groupName'=>$_SPUserGroupTypeAddUserToGroup->getGroupName(),'userName'=>$_SPUserGroupTypeAddUserToGroup->getUserName(),'userLoginName'=>$_SPUserGroupTypeAddUserToGroup->getUserLoginName(),'userEmail'=>$_SPUserGroupTypeAddUserToGroup->getUserEmail(),'userNotes'=>$_SPUserGroupTypeAddUserToGroup->getUserNotes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddUserCollectionToGroup
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeAddUserCollectionToGroup::getGroupName()
	 * @uses SPUserGroupTypeAddUserCollectionToGroup::getUsersInfoXml()
	 * @param SPUserGroupTypeAddUserCollectionToGroup AddUserCollectionToGroup
	 * @return SPUserGroupTypeAddUserCollectionToGroupResponse
	 */
	public function AddUserCollectionToGroup(SPUserGroupTypeAddUserCollectionToGroup $_SPUserGroupTypeAddUserCollectionToGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddUserCollectionToGroup(array('groupName'=>$_SPUserGroupTypeAddUserCollectionToGroup->getGroupName(),'usersInfoXml'=>$_SPUserGroupTypeAddUserCollectionToGroup->getUsersInfoXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddUserToRole
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeAddUserToRole::getRoleName()
	 * @uses SPUserGroupTypeAddUserToRole::getUserName()
	 * @uses SPUserGroupTypeAddUserToRole::getUserLoginName()
	 * @uses SPUserGroupTypeAddUserToRole::getUserEmail()
	 * @uses SPUserGroupTypeAddUserToRole::getUserNotes()
	 * @param SPUserGroupTypeAddUserToRole AddUserToRole
	 * @return SPUserGroupTypeAddUserToRoleResponse
	 */
	public function AddUserToRole(SPUserGroupTypeAddUserToRole $_SPUserGroupTypeAddUserToRole)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddUserToRole(array('roleName'=>$_SPUserGroupTypeAddUserToRole->getRoleName(),'userName'=>$_SPUserGroupTypeAddUserToRole->getUserName(),'userLoginName'=>$_SPUserGroupTypeAddUserToRole->getUserLoginName(),'userEmail'=>$_SPUserGroupTypeAddUserToRole->getUserEmail(),'userNotes'=>$_SPUserGroupTypeAddUserToRole->getUserNotes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddUserCollectionToRole
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeAddUserCollectionToRole::getRoleName()
	 * @uses SPUserGroupTypeAddUserCollectionToRole::getUsersInfoXml()
	 * @param SPUserGroupTypeAddUserCollectionToRole AddUserCollectionToRole
	 * @return SPUserGroupTypeAddUserCollectionToRoleResponse
	 */
	public function AddUserCollectionToRole(SPUserGroupTypeAddUserCollectionToRole $_SPUserGroupTypeAddUserCollectionToRole)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddUserCollectionToRole(array('roleName'=>$_SPUserGroupTypeAddUserCollectionToRole->getRoleName(),'usersInfoXml'=>$_SPUserGroupTypeAddUserCollectionToRole->getUsersInfoXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddGroup
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeAddGroup::getGroupName()
	 * @uses SPUserGroupTypeAddGroup::getOwnerIdentifier()
	 * @uses SPUserGroupTypeAddGroup::getOwnerType()
	 * @uses SPUserGroupTypeAddGroup::getDefaultUserLoginName()
	 * @uses SPUserGroupTypeAddGroup::getDescription()
	 * @param SPUserGroupTypeAddGroup AddGroup
	 * @return SPUserGroupTypeAddGroupResponse
	 */
	public function AddGroup(SPUserGroupTypeAddGroup $_SPUserGroupTypeAddGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddGroup(array('groupName'=>$_SPUserGroupTypeAddGroup->getGroupName(),'ownerIdentifier'=>$_SPUserGroupTypeAddGroup->getOwnerIdentifier(),'ownerType'=>$_SPUserGroupTypeAddGroup->getOwnerType(),'defaultUserLoginName'=>$_SPUserGroupTypeAddGroup->getDefaultUserLoginName(),'description'=>$_SPUserGroupTypeAddGroup->getDescription())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddGroupToRole
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeAddGroupToRole::getRoleName()
	 * @uses SPUserGroupTypeAddGroupToRole::getGroupName()
	 * @param SPUserGroupTypeAddGroupToRole AddGroupToRole
	 * @return SPUserGroupTypeAddGroupToRoleResponse
	 */
	public function AddGroupToRole(SPUserGroupTypeAddGroupToRole $_SPUserGroupTypeAddGroupToRole)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddGroupToRole(array('roleName'=>$_SPUserGroupTypeAddGroupToRole->getRoleName(),'groupName'=>$_SPUserGroupTypeAddGroupToRole->getGroupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddRole
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeAddRole::getRoleName()
	 * @uses SPUserGroupTypeAddRole::getDescription()
	 * @uses SPUserGroupTypeAddRole::getPermissionMask()
	 * @param SPUserGroupTypeAddRole AddRole
	 * @return SPUserGroupTypeAddRoleResponse
	 */
	public function AddRole(SPUserGroupTypeAddRole $_SPUserGroupTypeAddRole)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddRole(array('roleName'=>$_SPUserGroupTypeAddRole->getRoleName(),'description'=>$_SPUserGroupTypeAddRole->getDescription(),'permissionMask'=>$_SPUserGroupTypeAddRole->getPermissionMask())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddRoleDef
	 * @uses SPUserGroupWsdlClass::getSoapClient()
	 * @uses SPUserGroupWsdlClass::setResult()
	 * @uses SPUserGroupWsdlClass::getResult()
	 * @uses SPUserGroupWsdlClass::saveLastError()
	 * @uses SPUserGroupTypeAddRoleDef::getRoleName()
	 * @uses SPUserGroupTypeAddRoleDef::getDescription()
	 * @uses SPUserGroupTypeAddRoleDef::getPermissionMask()
	 * @param SPUserGroupTypeAddRoleDef AddRoleDef
	 * @return SPUserGroupTypeAddRoleDefResponse
	 */
	public function AddRoleDef(SPUserGroupTypeAddRoleDef $_SPUserGroupTypeAddRoleDef)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddRoleDef(array('roleName'=>$_SPUserGroupTypeAddRoleDef->getRoleName(),'description'=>$_SPUserGroupTypeAddRoleDef->getDescription(),'permissionMask'=>$_SPUserGroupTypeAddRoleDef->getPermissionMask())));
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
	 * @return SPUserGroupTypeAddRoleDefResponse
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