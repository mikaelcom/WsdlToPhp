<?php
/**
 * Class file for OvhServiceDomain
 * @date 02/07/2012
 */
/**
 * Class OvhServiceDomain
 * @date 02/07/2012
 */
class OvhServiceDomain extends OvhWsdlClass
{
	/**
	 * Method to call domainHostUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainHostUpdate::getSession()
	 * @uses OvhTypeDomainHostUpdate::getDomain()
	 * @uses OvhTypeDomainHostUpdate::getHost()
	 * @uses OvhTypeDomainHostUpdate::getIp()
	 * @param OvhTypeDomainHostUpdate DomainHostUpdate
	 * @return OvhTypeDomainHostUpdateResponse
	 */
	public function domainHostUpdate(OvhTypeDomainHostUpdate $_ovhTypeDomainHostUpdate)
	{
		try
		{
			$this->setResult(new OvhTypeDomainHostUpdateResponse(self::getSoapClient()->domainHostUpdate($_ovhTypeDomainHostUpdate->getSession(),$_ovhTypeDomainHostUpdate->getDomain(),$_ovhTypeDomainHostUpdate->getHost(),$_ovhTypeDomainHostUpdate->getIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainUnlock
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainUnlock::getSession()
	 * @uses OvhTypeDomainUnlock::getDomain()
	 * @param OvhTypeDomainUnlock DomainUnlock
	 * @return OvhTypeDomainUnlockResponse
	 */
	public function domainUnlock(OvhTypeDomainUnlock $_ovhTypeDomainUnlock)
	{
		try
		{
			$this->setResult(new OvhTypeDomainUnlockResponse(self::getSoapClient()->domainUnlock($_ovhTypeDomainUnlock->getSession(),$_ovhTypeDomainUnlock->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainWhoisObfuscatorSetAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainWhoisObfuscatorSetAll::getSession()
	 * @param OvhTypeDomainWhoisObfuscatorSetAll DomainWhoisObfuscatorSetAll
	 * @return OvhTypeDomainWhoisObfuscatorSetAllResponse
	 */
	public function domainWhoisObfuscatorSetAll(OvhTypeDomainWhoisObfuscatorSetAll $_ovhTypeDomainWhoisObfuscatorSetAll)
	{
		try
		{
			$this->setResult(new OvhTypeDomainWhoisObfuscatorSetAllResponse(self::getSoapClient()->domainWhoisObfuscatorSetAll($_ovhTypeDomainWhoisObfuscatorSetAll->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainList::getSession()
	 * @param OvhTypeDomainList DomainList
	 * @return OvhTypeDomainListResponse
	 */
	public function domainList(OvhTypeDomainList $_ovhTypeDomainList)
	{
		try
		{
			$this->setResult(new OvhTypeDomainListResponse(self::getSoapClient()->domainList($_ovhTypeDomainList->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainWhoisObfuscatorInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainWhoisObfuscatorInfo::getSession()
	 * @uses OvhTypeDomainWhoisObfuscatorInfo::getDomain()
	 * @param OvhTypeDomainWhoisObfuscatorInfo DomainWhoisObfuscatorInfo
	 * @return OvhTypeDomainWhoisObfuscatorInfoResponse
	 */
	public function domainWhoisObfuscatorInfo(OvhTypeDomainWhoisObfuscatorInfo $_ovhTypeDomainWhoisObfuscatorInfo)
	{
		try
		{
			$this->setResult(new OvhTypeDomainWhoisObfuscatorInfoResponse(self::getSoapClient()->domainWhoisObfuscatorInfo($_ovhTypeDomainWhoisObfuscatorInfo->getSession(),$_ovhTypeDomainWhoisObfuscatorInfo->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainCheck
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainCheck::getSession()
	 * @uses OvhTypeDomainCheck::getDomain()
	 * @param OvhTypeDomainCheck DomainCheck
	 * @return OvhTypeDomainCheckResponse
	 */
	public function domainCheck(OvhTypeDomainCheck $_ovhTypeDomainCheck)
	{
		try
		{
			$this->setResult(new OvhTypeDomainCheckResponse(self::getSoapClient()->domainCheck($_ovhTypeDomainCheck->getSession(),$_ovhTypeDomainCheck->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainWhoisObfuscatorSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainWhoisObfuscatorSet::getSession()
	 * @uses OvhTypeDomainWhoisObfuscatorSet::getDomain()
	 * @uses OvhTypeDomainWhoisObfuscatorSet::getField()
	 * @param OvhTypeDomainWhoisObfuscatorSet DomainWhoisObfuscatorSet
	 * @return OvhTypeDomainWhoisObfuscatorSetResponse
	 */
	public function domainWhoisObfuscatorSet(OvhTypeDomainWhoisObfuscatorSet $_ovhTypeDomainWhoisObfuscatorSet)
	{
		try
		{
			$this->setResult(new OvhTypeDomainWhoisObfuscatorSetResponse(self::getSoapClient()->domainWhoisObfuscatorSet($_ovhTypeDomainWhoisObfuscatorSet->getSession(),$_ovhTypeDomainWhoisObfuscatorSet->getDomain(),$_ovhTypeDomainWhoisObfuscatorSet->getField())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainResellerSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainResellerSet::getSession()
	 * @uses OvhTypeDomainResellerSet::getDomain()
	 * @uses OvhTypeDomainResellerSet::getProfile()
	 * @param OvhTypeDomainResellerSet DomainResellerSet
	 * @return OvhTypeDomainResellerSetResponse
	 */
	public function domainResellerSet(OvhTypeDomainResellerSet $_ovhTypeDomainResellerSet)
	{
		try
		{
			$this->setResult(new OvhTypeDomainResellerSetResponse(self::getSoapClient()->domainResellerSet($_ovhTypeDomainResellerSet->getSession(),$_ovhTypeDomainResellerSet->getDomain(),$_ovhTypeDomainResellerSet->getProfile())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainOperationRelaunch
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainOperationRelaunch::getSession()
	 * @uses OvhTypeDomainOperationRelaunch::getId()
	 * @param OvhTypeDomainOperationRelaunch DomainOperationRelaunch
	 * @return OvhTypeDomainOperationRelaunchResponse
	 */
	public function domainOperationRelaunch(OvhTypeDomainOperationRelaunch $_ovhTypeDomainOperationRelaunch)
	{
		try
		{
			$this->setResult(new OvhTypeDomainOperationRelaunchResponse(self::getSoapClient()->domainOperationRelaunch($_ovhTypeDomainOperationRelaunch->getSession(),$_ovhTypeDomainOperationRelaunch->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainCapabilities
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainCapabilities::getSession()
	 * @uses OvhTypeDomainCapabilities::getDomain()
	 * @param OvhTypeDomainCapabilities DomainCapabilities
	 * @return OvhTypeDomainCapabilitiesResponse
	 */
	public function domainCapabilities(OvhTypeDomainCapabilities $_ovhTypeDomainCapabilities)
	{
		try
		{
			$this->setResult(new OvhTypeDomainCapabilitiesResponse(self::getSoapClient()->domainCapabilities($_ovhTypeDomainCapabilities->getSession(),$_ovhTypeDomainCapabilities->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainDnsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainDnsList::getSession()
	 * @uses OvhTypeDomainDnsList::getDomain()
	 * @param OvhTypeDomainDnsList DomainDnsList
	 * @return OvhTypeDomainDnsListResponse
	 */
	public function domainDnsList(OvhTypeDomainDnsList $_ovhTypeDomainDnsList)
	{
		try
		{
			$this->setResult(new OvhTypeDomainDnsListResponse(self::getSoapClient()->domainDnsList($_ovhTypeDomainDnsList->getSession(),$_ovhTypeDomainDnsList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainOperationInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainOperationInfo::getSession()
	 * @uses OvhTypeDomainOperationInfo::getId()
	 * @param OvhTypeDomainOperationInfo DomainOperationInfo
	 * @return OvhTypeDomainOperationInfoResponse
	 */
	public function domainOperationInfo(OvhTypeDomainOperationInfo $_ovhTypeDomainOperationInfo)
	{
		try
		{
			$this->setResult(new OvhTypeDomainOperationInfoResponse(self::getSoapClient()->domainOperationInfo($_ovhTypeDomainOperationInfo->getSession(),$_ovhTypeDomainOperationInfo->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainDnsUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainDnsUpdate::getSession()
	 * @uses OvhTypeDomainDnsUpdate::getDomain()
	 * @uses OvhTypeDomainDnsUpdate::getDns1()
	 * @uses OvhTypeDomainDnsUpdate::getIp1()
	 * @uses OvhTypeDomainDnsUpdate::getDns2()
	 * @uses OvhTypeDomainDnsUpdate::getIp2()
	 * @uses OvhTypeDomainDnsUpdate::getDns3()
	 * @uses OvhTypeDomainDnsUpdate::getIp3()
	 * @uses OvhTypeDomainDnsUpdate::getDns4()
	 * @uses OvhTypeDomainDnsUpdate::getIp4()
	 * @uses OvhTypeDomainDnsUpdate::getDns5()
	 * @uses OvhTypeDomainDnsUpdate::getIp5()
	 * @param OvhTypeDomainDnsUpdate DomainDnsUpdate
	 * @return OvhTypeDomainDnsUpdateResponse
	 */
	public function domainDnsUpdate(OvhTypeDomainDnsUpdate $_ovhTypeDomainDnsUpdate)
	{
		try
		{
			$this->setResult(new OvhTypeDomainDnsUpdateResponse(self::getSoapClient()->domainDnsUpdate($_ovhTypeDomainDnsUpdate->getSession(),$_ovhTypeDomainDnsUpdate->getDomain(),$_ovhTypeDomainDnsUpdate->getDns1(),$_ovhTypeDomainDnsUpdate->getIp1(),$_ovhTypeDomainDnsUpdate->getDns2(),$_ovhTypeDomainDnsUpdate->getIp2(),$_ovhTypeDomainDnsUpdate->getDns3(),$_ovhTypeDomainDnsUpdate->getIp3(),$_ovhTypeDomainDnsUpdate->getDns4(),$_ovhTypeDomainDnsUpdate->getIp4(),$_ovhTypeDomainDnsUpdate->getDns5(),$_ovhTypeDomainDnsUpdate->getIp5())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainResellerDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainResellerDel::getSession()
	 * @uses OvhTypeDomainResellerDel::getDomain()
	 * @param OvhTypeDomainResellerDel DomainResellerDel
	 * @return OvhTypeDomainResellerDelResponse
	 */
	public function domainResellerDel(OvhTypeDomainResellerDel $_ovhTypeDomainResellerDel)
	{
		try
		{
			$this->setResult(new OvhTypeDomainResellerDelResponse(self::getSoapClient()->domainResellerDel($_ovhTypeDomainResellerDel->getSession(),$_ovhTypeDomainResellerDel->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainDnsGetOvhDefault
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainDnsGetOvhDefault::getSession()
	 * @param OvhTypeDomainDnsGetOvhDefault DomainDnsGetOvhDefault
	 * @return OvhTypeDomainDnsGetOvhDefaultResponse
	 */
	public function domainDnsGetOvhDefault(OvhTypeDomainDnsGetOvhDefault $_ovhTypeDomainDnsGetOvhDefault)
	{
		try
		{
			$this->setResult(new OvhTypeDomainDnsGetOvhDefaultResponse(self::getSoapClient()->domainDnsGetOvhDefault($_ovhTypeDomainDnsGetOvhDefault->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainWhoisObfuscatorUnset
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainWhoisObfuscatorUnset::getSession()
	 * @uses OvhTypeDomainWhoisObfuscatorUnset::getDomain()
	 * @uses OvhTypeDomainWhoisObfuscatorUnset::getField()
	 * @param OvhTypeDomainWhoisObfuscatorUnset DomainWhoisObfuscatorUnset
	 * @return OvhTypeDomainWhoisObfuscatorUnsetResponse
	 */
	public function domainWhoisObfuscatorUnset(OvhTypeDomainWhoisObfuscatorUnset $_ovhTypeDomainWhoisObfuscatorUnset)
	{
		try
		{
			$this->setResult(new OvhTypeDomainWhoisObfuscatorUnsetResponse(self::getSoapClient()->domainWhoisObfuscatorUnset($_ovhTypeDomainWhoisObfuscatorUnset->getSession(),$_ovhTypeDomainWhoisObfuscatorUnset->getDomain(),$_ovhTypeDomainWhoisObfuscatorUnset->getField())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainHostDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainHostDel::getSession()
	 * @uses OvhTypeDomainHostDel::getDomain()
	 * @uses OvhTypeDomainHostDel::getHost()
	 * @param OvhTypeDomainHostDel DomainHostDel
	 * @return OvhTypeDomainHostDelResponse
	 */
	public function domainHostDel(OvhTypeDomainHostDel $_ovhTypeDomainHostDel)
	{
		try
		{
			$this->setResult(new OvhTypeDomainHostDelResponse(self::getSoapClient()->domainHostDel($_ovhTypeDomainHostDel->getSession(),$_ovhTypeDomainHostDel->getDomain(),$_ovhTypeDomainHostDel->getHost())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainInfo::getSession()
	 * @uses OvhTypeDomainInfo::getDomain()
	 * @param OvhTypeDomainInfo DomainInfo
	 * @return OvhTypeDomainInfoResponse
	 */
	public function domainInfo(OvhTypeDomainInfo $_ovhTypeDomainInfo)
	{
		try
		{
			$this->setResult(new OvhTypeDomainInfoResponse(self::getSoapClient()->domainInfo($_ovhTypeDomainInfo->getSession(),$_ovhTypeDomainInfo->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainHostList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainHostList::getSession()
	 * @uses OvhTypeDomainHostList::getDomain()
	 * @param OvhTypeDomainHostList DomainHostList
	 * @return OvhTypeDomainHostListResponse
	 */
	public function domainHostList(OvhTypeDomainHostList $_ovhTypeDomainHostList)
	{
		try
		{
			$this->setResult(new OvhTypeDomainHostListResponse(self::getSoapClient()->domainHostList($_ovhTypeDomainHostList->getSession(),$_ovhTypeDomainHostList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainLockStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainLockStatus::getSession()
	 * @uses OvhTypeDomainLockStatus::getDomain()
	 * @param OvhTypeDomainLockStatus DomainLockStatus
	 * @return OvhTypeDomainLockStatusResponse
	 */
	public function domainLockStatus(OvhTypeDomainLockStatus $_ovhTypeDomainLockStatus)
	{
		try
		{
			$this->setResult(new OvhTypeDomainLockStatusResponse(self::getSoapClient()->domainLockStatus($_ovhTypeDomainLockStatus->getSession(),$_ovhTypeDomainLockStatus->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainLock
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainLock::getSession()
	 * @uses OvhTypeDomainLock::getDomain()
	 * @param OvhTypeDomainLock DomainLock
	 * @return OvhTypeDomainLockResponse
	 */
	public function domainLock(OvhTypeDomainLock $_ovhTypeDomainLock)
	{
		try
		{
			$this->setResult(new OvhTypeDomainLockResponse(self::getSoapClient()->domainLock($_ovhTypeDomainLock->getSession(),$_ovhTypeDomainLock->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainOperationCancel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainOperationCancel::getSession()
	 * @uses OvhTypeDomainOperationCancel::getId()
	 * @param OvhTypeDomainOperationCancel DomainOperationCancel
	 * @return OvhTypeDomainOperationCancelResponse
	 */
	public function domainOperationCancel(OvhTypeDomainOperationCancel $_ovhTypeDomainOperationCancel)
	{
		try
		{
			$this->setResult(new OvhTypeDomainOperationCancelResponse(self::getSoapClient()->domainOperationCancel($_ovhTypeDomainOperationCancel->getSession(),$_ovhTypeDomainOperationCancel->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainHostAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainHostAdd::getSession()
	 * @uses OvhTypeDomainHostAdd::getDomain()
	 * @uses OvhTypeDomainHostAdd::getHost()
	 * @uses OvhTypeDomainHostAdd::getIp()
	 * @param OvhTypeDomainHostAdd DomainHostAdd
	 * @return OvhTypeDomainHostAddResponse
	 */
	public function domainHostAdd(OvhTypeDomainHostAdd $_ovhTypeDomainHostAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDomainHostAddResponse(self::getSoapClient()->domainHostAdd($_ovhTypeDomainHostAdd->getSession(),$_ovhTypeDomainHostAdd->getDomain(),$_ovhTypeDomainHostAdd->getHost(),$_ovhTypeDomainHostAdd->getIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainWhoisObfuscatorUnsetAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainWhoisObfuscatorUnsetAll::getSession()
	 * @param OvhTypeDomainWhoisObfuscatorUnsetAll DomainWhoisObfuscatorUnsetAll
	 * @return OvhTypeDomainWhoisObfuscatorUnsetAllResponse
	 */
	public function domainWhoisObfuscatorUnsetAll(OvhTypeDomainWhoisObfuscatorUnsetAll $_ovhTypeDomainWhoisObfuscatorUnsetAll)
	{
		try
		{
			$this->setResult(new OvhTypeDomainWhoisObfuscatorUnsetAllResponse(self::getSoapClient()->domainWhoisObfuscatorUnsetAll($_ovhTypeDomainWhoisObfuscatorUnsetAll->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainOperationList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainOperationList::getSession()
	 * @uses OvhTypeDomainOperationList::getDomain()
	 * @uses OvhTypeDomainOperationList::getStatus()
	 * @param OvhTypeDomainOperationList DomainOperationList
	 * @return OvhTypeDomainOperationListResponse
	 */
	public function domainOperationList(OvhTypeDomainOperationList $_ovhTypeDomainOperationList)
	{
		try
		{
			$this->setResult(new OvhTypeDomainOperationListResponse(self::getSoapClient()->domainOperationList($_ovhTypeDomainOperationList->getSession(),$_ovhTypeDomainOperationList->getDomain(),$_ovhTypeDomainOperationList->getStatus())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainWhoisObfuscatorList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainWhoisObfuscatorList::getSession()
	 * @param OvhTypeDomainWhoisObfuscatorList DomainWhoisObfuscatorList
	 * @return OvhTypeDomainWhoisObfuscatorListResponse
	 */
	public function domainWhoisObfuscatorList(OvhTypeDomainWhoisObfuscatorList $_ovhTypeDomainWhoisObfuscatorList)
	{
		try
		{
			$this->setResult(new OvhTypeDomainWhoisObfuscatorListResponse(self::getSoapClient()->domainWhoisObfuscatorList($_ovhTypeDomainWhoisObfuscatorList->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call domainHostInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDomainHostInfo::getSession()
	 * @uses OvhTypeDomainHostInfo::getDomain()
	 * @uses OvhTypeDomainHostInfo::getHost()
	 * @param OvhTypeDomainHostInfo DomainHostInfo
	 * @return OvhTypeDomainHostInfoResponse
	 */
	public function domainHostInfo(OvhTypeDomainHostInfo $_ovhTypeDomainHostInfo)
	{
		try
		{
			$this->setResult(new OvhTypeDomainHostInfoResponse(self::getSoapClient()->domainHostInfo($_ovhTypeDomainHostInfo->getSession(),$_ovhTypeDomainHostInfo->getDomain(),$_ovhTypeDomainHostInfo->getHost())));
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
	 * @return OvhTypeDomainHostInfoResponse
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