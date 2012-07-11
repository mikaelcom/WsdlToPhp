<?php
/**
 * Class file for OvhServiceEmail
 * @date 02/07/2012
 */
/**
 * Class OvhServiceEmail
 * @date 02/07/2012
 */
class OvhServiceEmail extends OvhWsdlClass
{
	/**
	 * Method to call emailGetCapabilities
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailGetCapabilities::getSession()
	 * @uses OvhTypeEmailGetCapabilities::getDomain()
	 * @param OvhTypeEmailGetCapabilities EmailGetCapabilities
	 * @return OvhTypeEmailGetCapabilitiesResponse
	 */
	public function emailGetCapabilities(OvhTypeEmailGetCapabilities $_ovhTypeEmailGetCapabilities)
	{
		try
		{
			$this->setResult(new OvhTypeEmailGetCapabilitiesResponse(self::getSoapClient()->emailGetCapabilities($_ovhTypeEmailGetCapabilities->getSession(),$_ovhTypeEmailGetCapabilities->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailDomainListByMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailDomainListByMasterNic::getSession()
	 * @param OvhTypeEmailDomainListByMasterNic EmailDomainListByMasterNic
	 * @return OvhTypeEmailDomainListByMasterNicResponse
	 */
	public function emailDomainListByMasterNic(OvhTypeEmailDomainListByMasterNic $_ovhTypeEmailDomainListByMasterNic)
	{
		try
		{
			$this->setResult(new OvhTypeEmailDomainListByMasterNicResponse(self::getSoapClient()->emailDomainListByMasterNic($_ovhTypeEmailDomainListByMasterNic->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailDomainSummary
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailDomainSummary::getSession()
	 * @uses OvhTypeEmailDomainSummary::getDomain()
	 * @param OvhTypeEmailDomainSummary EmailDomainSummary
	 * @return OvhTypeEmailDomainSummaryResponse
	 */
	public function emailDomainSummary(OvhTypeEmailDomainSummary $_ovhTypeEmailDomainSummary)
	{
		try
		{
			$this->setResult(new OvhTypeEmailDomainSummaryResponse(self::getSoapClient()->emailDomainSummary($_ovhTypeEmailDomainSummary->getSession(),$_ovhTypeEmailDomainSummary->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailFilterAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailFilterAdd::getSession()
	 * @uses OvhTypeEmailFilterAdd::getDomain()
	 * @uses OvhTypeEmailFilterAdd::getPop()
	 * @uses OvhTypeEmailFilterAdd::getFilter()
	 * @uses OvhTypeEmailFilterAdd::getPriority()
	 * @uses OvhTypeEmailFilterAdd::getActive()
	 * @uses OvhTypeEmailFilterAdd::getAction()
	 * @uses OvhTypeEmailFilterAdd::getAction_param()
	 * @uses OvhTypeEmailFilterAdd::getHeader()
	 * @uses OvhTypeEmailFilterAdd::getRule()
	 * @uses OvhTypeEmailFilterAdd::getRule_param()
	 * @param OvhTypeEmailFilterAdd EmailFilterAdd
	 * @return OvhTypeEmailFilterAddResponse
	 */
	public function emailFilterAdd(OvhTypeEmailFilterAdd $_ovhTypeEmailFilterAdd)
	{
		try
		{
			$this->setResult(new OvhTypeEmailFilterAddResponse(self::getSoapClient()->emailFilterAdd($_ovhTypeEmailFilterAdd->getSession(),$_ovhTypeEmailFilterAdd->getDomain(),$_ovhTypeEmailFilterAdd->getPop(),$_ovhTypeEmailFilterAdd->getFilter(),$_ovhTypeEmailFilterAdd->getPriority(),$_ovhTypeEmailFilterAdd->getActive(),$_ovhTypeEmailFilterAdd->getAction(),$_ovhTypeEmailFilterAdd->getAction_param(),$_ovhTypeEmailFilterAdd->getHeader(),$_ovhTypeEmailFilterAdd->getRule(),$_ovhTypeEmailFilterAdd->getRule_param())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailAccessByNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailAccessByNic::getSession()
	 * @param OvhTypeEmailAccessByNic EmailAccessByNic
	 * @return OvhTypeEmailAccessByNicResponse
	 */
	public function emailAccessByNic(OvhTypeEmailAccessByNic $_ovhTypeEmailAccessByNic)
	{
		try
		{
			$this->setResult(new OvhTypeEmailAccessByNicResponse(self::getSoapClient()->emailAccessByNic($_ovhTypeEmailAccessByNic->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailFilterRuleDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailFilterRuleDel::getSession()
	 * @uses OvhTypeEmailFilterRuleDel::getDomain()
	 * @uses OvhTypeEmailFilterRuleDel::getPop()
	 * @uses OvhTypeEmailFilterRuleDel::getFilter()
	 * @uses OvhTypeEmailFilterRuleDel::getId()
	 * @param OvhTypeEmailFilterRuleDel EmailFilterRuleDel
	 * @return OvhTypeEmailFilterRuleDelResponse
	 */
	public function emailFilterRuleDel(OvhTypeEmailFilterRuleDel $_ovhTypeEmailFilterRuleDel)
	{
		try
		{
			$this->setResult(new OvhTypeEmailFilterRuleDelResponse(self::getSoapClient()->emailFilterRuleDel($_ovhTypeEmailFilterRuleDel->getSession(),$_ovhTypeEmailFilterRuleDel->getDomain(),$_ovhTypeEmailFilterRuleDel->getPop(),$_ovhTypeEmailFilterRuleDel->getFilter(),$_ovhTypeEmailFilterRuleDel->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailFilterPriority
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailFilterPriority::getSession()
	 * @uses OvhTypeEmailFilterPriority::getDomain()
	 * @uses OvhTypeEmailFilterPriority::getPop()
	 * @uses OvhTypeEmailFilterPriority::getFilter()
	 * @uses OvhTypeEmailFilterPriority::getPriority()
	 * @param OvhTypeEmailFilterPriority EmailFilterPriority
	 * @return OvhTypeEmailFilterPriorityResponse
	 */
	public function emailFilterPriority(OvhTypeEmailFilterPriority $_ovhTypeEmailFilterPriority)
	{
		try
		{
			$this->setResult(new OvhTypeEmailFilterPriorityResponse(self::getSoapClient()->emailFilterPriority($_ovhTypeEmailFilterPriority->getSession(),$_ovhTypeEmailFilterPriority->getDomain(),$_ovhTypeEmailFilterPriority->getPop(),$_ovhTypeEmailFilterPriority->getFilter(),$_ovhTypeEmailFilterPriority->getPriority())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailFilterDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailFilterDel::getSession()
	 * @uses OvhTypeEmailFilterDel::getDomain()
	 * @uses OvhTypeEmailFilterDel::getPop()
	 * @uses OvhTypeEmailFilterDel::getFilter()
	 * @param OvhTypeEmailFilterDel EmailFilterDel
	 * @return OvhTypeEmailFilterDelResponse
	 */
	public function emailFilterDel(OvhTypeEmailFilterDel $_ovhTypeEmailFilterDel)
	{
		try
		{
			$this->setResult(new OvhTypeEmailFilterDelResponse(self::getSoapClient()->emailFilterDel($_ovhTypeEmailFilterDel->getSession(),$_ovhTypeEmailFilterDel->getDomain(),$_ovhTypeEmailFilterDel->getPop(),$_ovhTypeEmailFilterDel->getFilter())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailSetDomainCatchAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailSetDomainCatchAll::getSession()
	 * @uses OvhTypeEmailSetDomainCatchAll::getDomain()
	 * @uses OvhTypeEmailSetDomainCatchAll::getType()
	 * @uses OvhTypeEmailSetDomainCatchAll::getPop()
	 * @uses OvhTypeEmailSetDomainCatchAll::getAddress()
	 * @param OvhTypeEmailSetDomainCatchAll EmailSetDomainCatchAll
	 * @return OvhTypeEmailSetDomainCatchAllResponse
	 */
	public function emailSetDomainCatchAll(OvhTypeEmailSetDomainCatchAll $_ovhTypeEmailSetDomainCatchAll)
	{
		try
		{
			$this->setResult(new OvhTypeEmailSetDomainCatchAllResponse(self::getSoapClient()->emailSetDomainCatchAll($_ovhTypeEmailSetDomainCatchAll->getSession(),$_ovhTypeEmailSetDomainCatchAll->getDomain(),$_ovhTypeEmailSetDomainCatchAll->getType(),$_ovhTypeEmailSetDomainCatchAll->getPop(),$_ovhTypeEmailSetDomainCatchAll->getAddress())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailDomainMxList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailDomainMxList::getSession()
	 * @uses OvhTypeEmailDomainMxList::getDomain()
	 * @param OvhTypeEmailDomainMxList EmailDomainMxList
	 * @return OvhTypeEmailDomainMxListResponse
	 */
	public function emailDomainMxList(OvhTypeEmailDomainMxList $_ovhTypeEmailDomainMxList)
	{
		try
		{
			$this->setResult(new OvhTypeEmailDomainMxListResponse(self::getSoapClient()->emailDomainMxList($_ovhTypeEmailDomainMxList->getSession(),$_ovhTypeEmailDomainMxList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailFilterRuleAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailFilterRuleAdd::getSession()
	 * @uses OvhTypeEmailFilterRuleAdd::getDomain()
	 * @uses OvhTypeEmailFilterRuleAdd::getPop()
	 * @uses OvhTypeEmailFilterRuleAdd::getFilter()
	 * @uses OvhTypeEmailFilterRuleAdd::getHeader()
	 * @uses OvhTypeEmailFilterRuleAdd::getRule()
	 * @uses OvhTypeEmailFilterRuleAdd::getRule_param()
	 * @param OvhTypeEmailFilterRuleAdd EmailFilterRuleAdd
	 * @return OvhTypeEmailFilterRuleAddResponse
	 */
	public function emailFilterRuleAdd(OvhTypeEmailFilterRuleAdd $_ovhTypeEmailFilterRuleAdd)
	{
		try
		{
			$this->setResult(new OvhTypeEmailFilterRuleAddResponse(self::getSoapClient()->emailFilterRuleAdd($_ovhTypeEmailFilterRuleAdd->getSession(),$_ovhTypeEmailFilterRuleAdd->getDomain(),$_ovhTypeEmailFilterRuleAdd->getPop(),$_ovhTypeEmailFilterRuleAdd->getFilter(),$_ovhTypeEmailFilterRuleAdd->getHeader(),$_ovhTypeEmailFilterRuleAdd->getRule(),$_ovhTypeEmailFilterRuleAdd->getRule_param())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailFilterActive
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailFilterActive::getSession()
	 * @uses OvhTypeEmailFilterActive::getDomain()
	 * @uses OvhTypeEmailFilterActive::getPop()
	 * @uses OvhTypeEmailFilterActive::getFilter()
	 * @uses OvhTypeEmailFilterActive::getActive()
	 * @param OvhTypeEmailFilterActive EmailFilterActive
	 * @return OvhTypeEmailFilterActiveResponse
	 */
	public function emailFilterActive(OvhTypeEmailFilterActive $_ovhTypeEmailFilterActive)
	{
		try
		{
			$this->setResult(new OvhTypeEmailFilterActiveResponse(self::getSoapClient()->emailFilterActive($_ovhTypeEmailFilterActive->getSession(),$_ovhTypeEmailFilterActive->getDomain(),$_ovhTypeEmailFilterActive->getPop(),$_ovhTypeEmailFilterActive->getFilter(),$_ovhTypeEmailFilterActive->getActive())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailFilterList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailFilterList::getSession()
	 * @uses OvhTypeEmailFilterList::getDomain()
	 * @uses OvhTypeEmailFilterList::getPop()
	 * @param OvhTypeEmailFilterList EmailFilterList
	 * @return OvhTypeEmailFilterListResponse
	 */
	public function emailFilterList(OvhTypeEmailFilterList $_ovhTypeEmailFilterList)
	{
		try
		{
			$this->setResult(new OvhTypeEmailFilterListResponse(self::getSoapClient()->emailFilterList($_ovhTypeEmailFilterList->getSession(),$_ovhTypeEmailFilterList->getDomain(),$_ovhTypeEmailFilterList->getPop())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailGetDomainMxFiltering
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailGetDomainMxFiltering::getSession()
	 * @uses OvhTypeEmailGetDomainMxFiltering::getDomain()
	 * @uses OvhTypeEmailGetDomainMxFiltering::getSubdomain()
	 * @param OvhTypeEmailGetDomainMxFiltering EmailGetDomainMxFiltering
	 * @return OvhTypeEmailGetDomainMxFilteringResponse
	 */
	public function emailGetDomainMxFiltering(OvhTypeEmailGetDomainMxFiltering $_ovhTypeEmailGetDomainMxFiltering)
	{
		try
		{
			$this->setResult(new OvhTypeEmailGetDomainMxFilteringResponse(self::getSoapClient()->emailGetDomainMxFiltering($_ovhTypeEmailGetDomainMxFiltering->getSession(),$_ovhTypeEmailGetDomainMxFiltering->getDomain(),$_ovhTypeEmailGetDomainMxFiltering->getSubdomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailDelMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailDelMasterNic::getSession()
	 * @uses OvhTypeEmailDelMasterNic::getDomain()
	 * @param OvhTypeEmailDelMasterNic EmailDelMasterNic
	 * @return OvhTypeEmailDelMasterNicResponse
	 */
	public function emailDelMasterNic(OvhTypeEmailDelMasterNic $_ovhTypeEmailDelMasterNic)
	{
		try
		{
			$this->setResult(new OvhTypeEmailDelMasterNicResponse(self::getSoapClient()->emailDelMasterNic($_ovhTypeEmailDelMasterNic->getSession(),$_ovhTypeEmailDelMasterNic->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailGetDomainCatchAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailGetDomainCatchAll::getSession()
	 * @uses OvhTypeEmailGetDomainCatchAll::getDomain()
	 * @param OvhTypeEmailGetDomainCatchAll EmailGetDomainCatchAll
	 * @return OvhTypeEmailGetDomainCatchAllResponse
	 */
	public function emailGetDomainCatchAll(OvhTypeEmailGetDomainCatchAll $_ovhTypeEmailGetDomainCatchAll)
	{
		try
		{
			$this->setResult(new OvhTypeEmailGetDomainCatchAllResponse(self::getSoapClient()->emailGetDomainCatchAll($_ovhTypeEmailGetDomainCatchAll->getSession(),$_ovhTypeEmailGetDomainCatchAll->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailSetMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailSetMasterNic::getSession()
	 * @uses OvhTypeEmailSetMasterNic::getDomain()
	 * @uses OvhTypeEmailSetMasterNic::getNic()
	 * @param OvhTypeEmailSetMasterNic EmailSetMasterNic
	 * @return OvhTypeEmailSetMasterNicResponse
	 */
	public function emailSetMasterNic(OvhTypeEmailSetMasterNic $_ovhTypeEmailSetMasterNic)
	{
		try
		{
			$this->setResult(new OvhTypeEmailSetMasterNicResponse(self::getSoapClient()->emailSetMasterNic($_ovhTypeEmailSetMasterNic->getSession(),$_ovhTypeEmailSetMasterNic->getDomain(),$_ovhTypeEmailSetMasterNic->getNic())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call emailSetDomainMxFiltering
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeEmailSetDomainMxFiltering::getSession()
	 * @uses OvhTypeEmailSetDomainMxFiltering::getDomain()
	 * @uses OvhTypeEmailSetDomainMxFiltering::getSubdomain()
	 * @uses OvhTypeEmailSetDomainMxFiltering::getType()
	 * @uses OvhTypeEmailSetDomainMxFiltering::getMx()
	 * @param OvhTypeEmailSetDomainMxFiltering EmailSetDomainMxFiltering
	 * @return OvhTypeEmailSetDomainMxFilteringResponse
	 */
	public function emailSetDomainMxFiltering(OvhTypeEmailSetDomainMxFiltering $_ovhTypeEmailSetDomainMxFiltering)
	{
		try
		{
			$this->setResult(new OvhTypeEmailSetDomainMxFilteringResponse(self::getSoapClient()->emailSetDomainMxFiltering($_ovhTypeEmailSetDomainMxFiltering->getSession(),$_ovhTypeEmailSetDomainMxFiltering->getDomain(),$_ovhTypeEmailSetDomainMxFiltering->getSubdomain(),$_ovhTypeEmailSetDomainMxFiltering->getType(),$_ovhTypeEmailSetDomainMxFiltering->getMx())));
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
	 * @return OvhTypeEmailSetDomainMxFilteringResponse
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