<?php
/**
 * Class file for OvhServiceHosting
 * @date 02/07/2012
 */
/**
 * Class OvhServiceHosting
 * @date 02/07/2012
 */
class OvhServiceHosting extends OvhWsdlClass
{
	/**
	 * Method to call hostingAccessByNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeHostingAccessByNic::getSession()
	 * @uses OvhTypeHostingAccessByNic::getDomain()
	 * @param OvhTypeHostingAccessByNic HostingAccessByNic
	 * @return OvhTypeHostingAccessByNicResponse
	 */
	public function hostingAccessByNic(OvhTypeHostingAccessByNic $_ovhTypeHostingAccessByNic)
	{
		try
		{
			$this->setResult(new OvhTypeHostingAccessByNicResponse(self::getSoapClient()->hostingAccessByNic($_ovhTypeHostingAccessByNic->getSession(),$_ovhTypeHostingAccessByNic->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call hostingSummary
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeHostingSummary::getSession()
	 * @uses OvhTypeHostingSummary::getDomain()
	 * @param OvhTypeHostingSummary HostingSummary
	 * @return OvhTypeHostingSummaryResponse
	 */
	public function hostingSummary(OvhTypeHostingSummary $_ovhTypeHostingSummary)
	{
		try
		{
			$this->setResult(new OvhTypeHostingSummaryResponse(self::getSoapClient()->hostingSummary($_ovhTypeHostingSummary->getSession(),$_ovhTypeHostingSummary->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call hostingGetCapabilities
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeHostingGetCapabilities::getSession()
	 * @uses OvhTypeHostingGetCapabilities::getDomain()
	 * @param OvhTypeHostingGetCapabilities HostingGetCapabilities
	 * @return OvhTypeHostingGetCapabilitiesResponse
	 */
	public function hostingGetCapabilities(OvhTypeHostingGetCapabilities $_ovhTypeHostingGetCapabilities)
	{
		try
		{
			$this->setResult(new OvhTypeHostingGetCapabilitiesResponse(self::getSoapClient()->hostingGetCapabilities($_ovhTypeHostingGetCapabilities->getSession(),$_ovhTypeHostingGetCapabilities->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call hostingChangeMainDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeHostingChangeMainDomain::getSession()
	 * @uses OvhTypeHostingChangeMainDomain::getDomain()
	 * @uses OvhTypeHostingChangeMainDomain::getNewDomain()
	 * @uses OvhTypeHostingChangeMainDomain::getMxAction()
	 * @uses OvhTypeHostingChangeMainDomain::getMxOffer()
	 * @param OvhTypeHostingChangeMainDomain HostingChangeMainDomain
	 * @return OvhTypeHostingChangeMainDomainResponse
	 */
	public function hostingChangeMainDomain(OvhTypeHostingChangeMainDomain $_ovhTypeHostingChangeMainDomain)
	{
		try
		{
			$this->setResult(new OvhTypeHostingChangeMainDomainResponse(self::getSoapClient()->hostingChangeMainDomain($_ovhTypeHostingChangeMainDomain->getSession(),$_ovhTypeHostingChangeMainDomain->getDomain(),$_ovhTypeHostingChangeMainDomain->getNewDomain(),$_ovhTypeHostingChangeMainDomain->getMxAction(),$_ovhTypeHostingChangeMainDomain->getMxOffer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call hostingList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeHostingList::getSession()
	 * @param OvhTypeHostingList HostingList
	 * @return OvhTypeHostingListResponse
	 */
	public function hostingList(OvhTypeHostingList $_ovhTypeHostingList)
	{
		try
		{
			$this->setResult(new OvhTypeHostingListResponse(self::getSoapClient()->hostingList($_ovhTypeHostingList->getSession())));
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
	 * @return OvhTypeHostingListResponse
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