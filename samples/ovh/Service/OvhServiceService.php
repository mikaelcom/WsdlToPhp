<?php
/**
 * Class file for OvhServiceService
 * @date 02/07/2012
 */
/**
 * Class OvhServiceService
 * @date 02/07/2012
 */
class OvhServiceService extends OvhWsdlClass
{
	/**
	 * Method to call serviceGroupGetAllInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceGroupGetAllInfo::getSession()
	 * @param OvhTypeServiceGroupGetAllInfo ServiceGroupGetAllInfo
	 * @return OvhTypeServiceGroupGetAllInfoResponse
	 */
	public function serviceGroupGetAllInfo(OvhTypeServiceGroupGetAllInfo $_ovhTypeServiceGroupGetAllInfo)
	{
		try
		{
			$this->setResult(new OvhTypeServiceGroupGetAllInfoResponse(self::getSoapClient()->serviceGroupGetAllInfo($_ovhTypeServiceGroupGetAllInfo->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceGroupList::getSession()
	 * @param OvhTypeServiceGroupList ServiceGroupList
	 * @return OvhTypeServiceGroupListResponse
	 */
	public function serviceGroupList(OvhTypeServiceGroupList $_ovhTypeServiceGroupList)
	{
		try
		{
			$this->setResult(new OvhTypeServiceGroupListResponse(self::getSoapClient()->serviceGroupList($_ovhTypeServiceGroupList->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceListPaginated
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceListPaginated::getSession()
	 * @uses OvhTypeServiceListPaginated::getStart()
	 * @uses OvhTypeServiceListPaginated::getLimit()
	 * @uses OvhTypeServiceListPaginated::getDomain()
	 * @uses OvhTypeServiceListPaginated::getComponent()
	 * @uses OvhTypeServiceListPaginated::getGroup()
	 * @param OvhTypeServiceListPaginated ServiceListPaginated
	 * @return OvhTypeServiceListPaginatedResponse
	 */
	public function serviceListPaginated(OvhTypeServiceListPaginated $_ovhTypeServiceListPaginated)
	{
		try
		{
			$this->setResult(new OvhTypeServiceListPaginatedResponse(self::getSoapClient()->serviceListPaginated($_ovhTypeServiceListPaginated->getSession(),$_ovhTypeServiceListPaginated->getStart(),$_ovhTypeServiceListPaginated->getLimit(),$_ovhTypeServiceListPaginated->getDomain(),$_ovhTypeServiceListPaginated->getComponent(),$_ovhTypeServiceListPaginated->getGroup())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceGroupCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceGroupCreate::getSession()
	 * @uses OvhTypeServiceGroupCreate::getName()
	 * @uses OvhTypeServiceGroupCreate::getComment()
	 * @param OvhTypeServiceGroupCreate ServiceGroupCreate
	 * @return OvhTypeServiceGroupCreateResponse
	 */
	public function serviceGroupCreate(OvhTypeServiceGroupCreate $_ovhTypeServiceGroupCreate)
	{
		try
		{
			$this->setResult(new OvhTypeServiceGroupCreateResponse(self::getSoapClient()->serviceGroupCreate($_ovhTypeServiceGroupCreate->getSession(),$_ovhTypeServiceGroupCreate->getName(),$_ovhTypeServiceGroupCreate->getComment())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceModifyContact
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceModifyContact::getSession()
	 * @uses OvhTypeServiceModifyContact::getDomain()
	 * @uses OvhTypeServiceModifyContact::getComponent()
	 * @uses OvhTypeServiceModifyContact::getContact()
	 * @uses OvhTypeServiceModifyContact::getNic()
	 * @uses OvhTypeServiceModifyContact::getComponentSubType()
	 * @param OvhTypeServiceModifyContact ServiceModifyContact
	 * @return OvhTypeServiceModifyContactResponse
	 */
	public function serviceModifyContact(OvhTypeServiceModifyContact $_ovhTypeServiceModifyContact)
	{
		try
		{
			$this->setResult(new OvhTypeServiceModifyContactResponse(self::getSoapClient()->serviceModifyContact($_ovhTypeServiceModifyContact->getSession(),$_ovhTypeServiceModifyContact->getDomain(),$_ovhTypeServiceModifyContact->getComponent(),$_ovhTypeServiceModifyContact->getContact(),$_ovhTypeServiceModifyContact->getNic(),$_ovhTypeServiceModifyContact->getComponentSubType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceModifyOwner
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceModifyOwner::getSession()
	 * @uses OvhTypeServiceModifyOwner::getDomain()
	 * @uses OvhTypeServiceModifyOwner::getComponent()
	 * @uses OvhTypeServiceModifyOwner::getLegalform()
	 * @uses OvhTypeServiceModifyOwner::getOrganisation()
	 * @uses OvhTypeServiceModifyOwner::getName()
	 * @uses OvhTypeServiceModifyOwner::getFirstname()
	 * @uses OvhTypeServiceModifyOwner::getAddress()
	 * @uses OvhTypeServiceModifyOwner::getCity()
	 * @uses OvhTypeServiceModifyOwner::getZip()
	 * @uses OvhTypeServiceModifyOwner::getArea()
	 * @uses OvhTypeServiceModifyOwner::getCountry()
	 * @uses OvhTypeServiceModifyOwner::getPhone()
	 * @uses OvhTypeServiceModifyOwner::getFax()
	 * @uses OvhTypeServiceModifyOwner::getEmail()
	 * @uses OvhTypeServiceModifyOwner::getIdentityConfirmation()
	 * @uses OvhTypeServiceModifyOwner::getAcceptanceConfirmation()
	 * @param OvhTypeServiceModifyOwner ServiceModifyOwner
	 * @return OvhTypeServiceModifyOwnerResponse
	 */
	public function serviceModifyOwner(OvhTypeServiceModifyOwner $_ovhTypeServiceModifyOwner)
	{
		try
		{
			$this->setResult(new OvhTypeServiceModifyOwnerResponse(self::getSoapClient()->serviceModifyOwner($_ovhTypeServiceModifyOwner->getSession(),$_ovhTypeServiceModifyOwner->getDomain(),$_ovhTypeServiceModifyOwner->getComponent(),$_ovhTypeServiceModifyOwner->getLegalform(),$_ovhTypeServiceModifyOwner->getOrganisation(),$_ovhTypeServiceModifyOwner->getName(),$_ovhTypeServiceModifyOwner->getFirstname(),$_ovhTypeServiceModifyOwner->getAddress(),$_ovhTypeServiceModifyOwner->getCity(),$_ovhTypeServiceModifyOwner->getZip(),$_ovhTypeServiceModifyOwner->getArea(),$_ovhTypeServiceModifyOwner->getCountry(),$_ovhTypeServiceModifyOwner->getPhone(),$_ovhTypeServiceModifyOwner->getFax(),$_ovhTypeServiceModifyOwner->getEmail(),$_ovhTypeServiceModifyOwner->getIdentityConfirmation(),$_ovhTypeServiceModifyOwner->getAcceptanceConfirmation())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceModifyOwnerInfos
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceModifyOwnerInfos::getSession()
	 * @uses OvhTypeServiceModifyOwnerInfos::getOwner()
	 * @uses OvhTypeServiceModifyOwnerInfos::getDomain()
	 * @uses OvhTypeServiceModifyOwnerInfos::getComponent()
	 * @uses OvhTypeServiceModifyOwnerInfos::getAddress()
	 * @uses OvhTypeServiceModifyOwnerInfos::getCity()
	 * @uses OvhTypeServiceModifyOwnerInfos::getZip()
	 * @uses OvhTypeServiceModifyOwnerInfos::getCountry()
	 * @uses OvhTypeServiceModifyOwnerInfos::getPhone()
	 * @uses OvhTypeServiceModifyOwnerInfos::getFax()
	 * @uses OvhTypeServiceModifyOwnerInfos::getEmail()
	 * @param OvhTypeServiceModifyOwnerInfos ServiceModifyOwnerInfos
	 * @return OvhTypeServiceModifyOwnerInfosResponse
	 */
	public function serviceModifyOwnerInfos(OvhTypeServiceModifyOwnerInfos $_ovhTypeServiceModifyOwnerInfos)
	{
		try
		{
			$this->setResult(new OvhTypeServiceModifyOwnerInfosResponse(self::getSoapClient()->serviceModifyOwnerInfos($_ovhTypeServiceModifyOwnerInfos->getSession(),$_ovhTypeServiceModifyOwnerInfos->getOwner(),$_ovhTypeServiceModifyOwnerInfos->getDomain(),$_ovhTypeServiceModifyOwnerInfos->getComponent(),$_ovhTypeServiceModifyOwnerInfos->getAddress(),$_ovhTypeServiceModifyOwnerInfos->getCity(),$_ovhTypeServiceModifyOwnerInfos->getZip(),$_ovhTypeServiceModifyOwnerInfos->getCountry(),$_ovhTypeServiceModifyOwnerInfos->getPhone(),$_ovhTypeServiceModifyOwnerInfos->getFax(),$_ovhTypeServiceModifyOwnerInfos->getEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceGroupDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceGroupDelete::getSession()
	 * @uses OvhTypeServiceGroupDelete::getName()
	 * @param OvhTypeServiceGroupDelete ServiceGroupDelete
	 * @return OvhTypeServiceGroupDeleteResponse
	 */
	public function serviceGroupDelete(OvhTypeServiceGroupDelete $_ovhTypeServiceGroupDelete)
	{
		try
		{
			$this->setResult(new OvhTypeServiceGroupDeleteResponse(self::getSoapClient()->serviceGroupDelete($_ovhTypeServiceGroupDelete->getSession(),$_ovhTypeServiceGroupDelete->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceList::getSession()
	 * @uses OvhTypeServiceList::getDomain()
	 * @uses OvhTypeServiceList::getComponent()
	 * @uses OvhTypeServiceList::getGroup()
	 * @uses OvhTypeServiceList::getComponentSubType()
	 * @param OvhTypeServiceList ServiceList
	 * @return OvhTypeServiceListResponse
	 */
	public function serviceList(OvhTypeServiceList $_ovhTypeServiceList)
	{
		try
		{
			$this->setResult(new OvhTypeServiceListResponse(self::getSoapClient()->serviceList($_ovhTypeServiceList->getSession(),$_ovhTypeServiceList->getDomain(),$_ovhTypeServiceList->getComponent(),$_ovhTypeServiceList->getGroup(),$_ovhTypeServiceList->getComponentSubType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceGroupSetComment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceGroupSetComment::getSession()
	 * @uses OvhTypeServiceGroupSetComment::getName()
	 * @uses OvhTypeServiceGroupSetComment::getComment()
	 * @param OvhTypeServiceGroupSetComment ServiceGroupSetComment
	 * @return OvhTypeServiceGroupSetCommentResponse
	 */
	public function serviceGroupSetComment(OvhTypeServiceGroupSetComment $_ovhTypeServiceGroupSetComment)
	{
		try
		{
			$this->setResult(new OvhTypeServiceGroupSetCommentResponse(self::getSoapClient()->serviceGroupSetComment($_ovhTypeServiceGroupSetComment->getSession(),$_ovhTypeServiceGroupSetComment->getName(),$_ovhTypeServiceGroupSetComment->getComment())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceGroupRemoveService
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceGroupRemoveService::getSession()
	 * @uses OvhTypeServiceGroupRemoveService::getName()
	 * @uses OvhTypeServiceGroupRemoveService::getService()
	 * @uses OvhTypeServiceGroupRemoveService::getComponent()
	 * @param OvhTypeServiceGroupRemoveService ServiceGroupRemoveService
	 * @return OvhTypeServiceGroupRemoveServiceResponse
	 */
	public function serviceGroupRemoveService(OvhTypeServiceGroupRemoveService $_ovhTypeServiceGroupRemoveService)
	{
		try
		{
			$this->setResult(new OvhTypeServiceGroupRemoveServiceResponse(self::getSoapClient()->serviceGroupRemoveService($_ovhTypeServiceGroupRemoveService->getSession(),$_ovhTypeServiceGroupRemoveService->getName(),$_ovhTypeServiceGroupRemoveService->getService(),$_ovhTypeServiceGroupRemoveService->getComponent())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceFreedomList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceFreedomList::getSession()
	 * @uses OvhTypeServiceFreedomList::getDomain()
	 * @uses OvhTypeServiceFreedomList::getComponent()
	 * @param OvhTypeServiceFreedomList ServiceFreedomList
	 * @return OvhTypeServiceFreedomListResponse
	 */
	public function serviceFreedomList(OvhTypeServiceFreedomList $_ovhTypeServiceFreedomList)
	{
		try
		{
			$this->setResult(new OvhTypeServiceFreedomListResponse(self::getSoapClient()->serviceFreedomList($_ovhTypeServiceFreedomList->getSession(),$_ovhTypeServiceFreedomList->getDomain(),$_ovhTypeServiceFreedomList->getComponent())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceGroupSetName
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceGroupSetName::getSession()
	 * @uses OvhTypeServiceGroupSetName::getName()
	 * @uses OvhTypeServiceGroupSetName::getNewName()
	 * @param OvhTypeServiceGroupSetName ServiceGroupSetName
	 * @return OvhTypeServiceGroupSetNameResponse
	 */
	public function serviceGroupSetName(OvhTypeServiceGroupSetName $_ovhTypeServiceGroupSetName)
	{
		try
		{
			$this->setResult(new OvhTypeServiceGroupSetNameResponse(self::getSoapClient()->serviceGroupSetName($_ovhTypeServiceGroupSetName->getSession(),$_ovhTypeServiceGroupSetName->getName(),$_ovhTypeServiceGroupSetName->getNewName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceGroupInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceGroupInfo::getSession()
	 * @uses OvhTypeServiceGroupInfo::getName()
	 * @param OvhTypeServiceGroupInfo ServiceGroupInfo
	 * @return OvhTypeServiceGroupInfoResponse
	 */
	public function serviceGroupInfo(OvhTypeServiceGroupInfo $_ovhTypeServiceGroupInfo)
	{
		try
		{
			$this->setResult(new OvhTypeServiceGroupInfoResponse(self::getSoapClient()->serviceGroupInfo($_ovhTypeServiceGroupInfo->getSession(),$_ovhTypeServiceGroupInfo->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call serviceGroupAddService
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeServiceGroupAddService::getSession()
	 * @uses OvhTypeServiceGroupAddService::getName()
	 * @uses OvhTypeServiceGroupAddService::getService()
	 * @uses OvhTypeServiceGroupAddService::getComponent()
	 * @param OvhTypeServiceGroupAddService ServiceGroupAddService
	 * @return OvhTypeServiceGroupAddServiceResponse
	 */
	public function serviceGroupAddService(OvhTypeServiceGroupAddService $_ovhTypeServiceGroupAddService)
	{
		try
		{
			$this->setResult(new OvhTypeServiceGroupAddServiceResponse(self::getSoapClient()->serviceGroupAddService($_ovhTypeServiceGroupAddService->getSession(),$_ovhTypeServiceGroupAddService->getName(),$_ovhTypeServiceGroupAddService->getService(),$_ovhTypeServiceGroupAddService->getComponent())));
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
	 * @return OvhTypeServiceGroupAddServiceResponse
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