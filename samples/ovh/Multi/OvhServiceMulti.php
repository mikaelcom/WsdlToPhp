<?php
/**
 * Class file for OvhServiceMulti
 * @date 02/07/2012
 */
/**
 * Class OvhServiceMulti
 * @date 02/07/2012
 */
class OvhServiceMulti extends OvhWsdlClass
{
	/**
	 * Method to call multiFtpChangeDirectory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMultiFtpChangeDirectory::getSession()
	 * @uses OvhTypeMultiFtpChangeDirectory::getDomain()
	 * @uses OvhTypeMultiFtpChangeDirectory::getLogin()
	 * @uses OvhTypeMultiFtpChangeDirectory::getDirectory()
	 * @param OvhTypeMultiFtpChangeDirectory MultiFtpChangeDirectory
	 * @return OvhTypeMultiFtpChangeDirectoryResponse
	 */
	public function multiFtpChangeDirectory(OvhTypeMultiFtpChangeDirectory $_ovhTypeMultiFtpChangeDirectory)
	{
		try
		{
			$this->setResult(new OvhTypeMultiFtpChangeDirectoryResponse(self::getSoapClient()->multiFtpChangeDirectory($_ovhTypeMultiFtpChangeDirectory->getSession(),$_ovhTypeMultiFtpChangeDirectory->getDomain(),$_ovhTypeMultiFtpChangeDirectory->getLogin(),$_ovhTypeMultiFtpChangeDirectory->getDirectory())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call multiFtpChangePassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMultiFtpChangePassword::getSession()
	 * @uses OvhTypeMultiFtpChangePassword::getDomain()
	 * @uses OvhTypeMultiFtpChangePassword::getLogin()
	 * @uses OvhTypeMultiFtpChangePassword::getPassword()
	 * @param OvhTypeMultiFtpChangePassword MultiFtpChangePassword
	 * @return OvhTypeMultiFtpChangePasswordResponse
	 */
	public function multiFtpChangePassword(OvhTypeMultiFtpChangePassword $_ovhTypeMultiFtpChangePassword)
	{
		try
		{
			$this->setResult(new OvhTypeMultiFtpChangePasswordResponse(self::getSoapClient()->multiFtpChangePassword($_ovhTypeMultiFtpChangePassword->getSession(),$_ovhTypeMultiFtpChangePassword->getDomain(),$_ovhTypeMultiFtpChangePassword->getLogin(),$_ovhTypeMultiFtpChangePassword->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call multiFtpList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMultiFtpList::getSession()
	 * @uses OvhTypeMultiFtpList::getDomain()
	 * @param OvhTypeMultiFtpList MultiFtpList
	 * @return OvhTypeMultiFtpListResponse
	 */
	public function multiFtpList(OvhTypeMultiFtpList $_ovhTypeMultiFtpList)
	{
		try
		{
			$this->setResult(new OvhTypeMultiFtpListResponse(self::getSoapClient()->multiFtpList($_ovhTypeMultiFtpList->getSession(),$_ovhTypeMultiFtpList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call multiFtpAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMultiFtpAdd::getSession()
	 * @uses OvhTypeMultiFtpAdd::getDomain()
	 * @uses OvhTypeMultiFtpAdd::getSubdir()
	 * @uses OvhTypeMultiFtpAdd::getLoginsuffix()
	 * @uses OvhTypeMultiFtpAdd::getPassword()
	 * @param OvhTypeMultiFtpAdd MultiFtpAdd
	 * @return OvhTypeMultiFtpAddResponse
	 */
	public function multiFtpAdd(OvhTypeMultiFtpAdd $_ovhTypeMultiFtpAdd)
	{
		try
		{
			$this->setResult(new OvhTypeMultiFtpAddResponse(self::getSoapClient()->multiFtpAdd($_ovhTypeMultiFtpAdd->getSession(),$_ovhTypeMultiFtpAdd->getDomain(),$_ovhTypeMultiFtpAdd->getSubdir(),$_ovhTypeMultiFtpAdd->getLoginsuffix(),$_ovhTypeMultiFtpAdd->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call multiDomainList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMultiDomainList::getSession()
	 * @uses OvhTypeMultiDomainList::getDomain()
	 * @param OvhTypeMultiDomainList MultiDomainList
	 * @return OvhTypeMultiDomainListResponse
	 */
	public function multiDomainList(OvhTypeMultiDomainList $_ovhTypeMultiDomainList)
	{
		try
		{
			$this->setResult(new OvhTypeMultiDomainListResponse(self::getSoapClient()->multiDomainList($_ovhTypeMultiDomainList->getSession(),$_ovhTypeMultiDomainList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call multiFtpDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMultiFtpDel::getSession()
	 * @uses OvhTypeMultiFtpDel::getDomain()
	 * @uses OvhTypeMultiFtpDel::getLogin()
	 * @param OvhTypeMultiFtpDel MultiFtpDel
	 * @return OvhTypeMultiFtpDelResponse
	 */
	public function multiFtpDel(OvhTypeMultiFtpDel $_ovhTypeMultiFtpDel)
	{
		try
		{
			$this->setResult(new OvhTypeMultiFtpDelResponse(self::getSoapClient()->multiFtpDel($_ovhTypeMultiFtpDel->getSession(),$_ovhTypeMultiFtpDel->getDomain(),$_ovhTypeMultiFtpDel->getLogin())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call multiDomainAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMultiDomainAdd::getSession()
	 * @uses OvhTypeMultiDomainAdd::getDomain()
	 * @uses OvhTypeMultiDomainAdd::getMultidomain()
	 * @uses OvhTypeMultiDomainAdd::getTarget()
	 * @uses OvhTypeMultiDomainAdd::getCountry()
	 * @uses OvhTypeMultiDomainAdd::getOwnLog()
	 * @param OvhTypeMultiDomainAdd MultiDomainAdd
	 * @return OvhTypeMultiDomainAddResponse
	 */
	public function multiDomainAdd(OvhTypeMultiDomainAdd $_ovhTypeMultiDomainAdd)
	{
		try
		{
			$this->setResult(new OvhTypeMultiDomainAddResponse(self::getSoapClient()->multiDomainAdd($_ovhTypeMultiDomainAdd->getSession(),$_ovhTypeMultiDomainAdd->getDomain(),$_ovhTypeMultiDomainAdd->getMultidomain(),$_ovhTypeMultiDomainAdd->getTarget(),$_ovhTypeMultiDomainAdd->getCountry(),$_ovhTypeMultiDomainAdd->getOwnLog())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call multiDomainModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMultiDomainModify::getSession()
	 * @uses OvhTypeMultiDomainModify::getDomain()
	 * @uses OvhTypeMultiDomainModify::getMultidomain()
	 * @uses OvhTypeMultiDomainModify::getTarget()
	 * @uses OvhTypeMultiDomainModify::getCountry()
	 * @uses OvhTypeMultiDomainModify::getOwnLog()
	 * @param OvhTypeMultiDomainModify MultiDomainModify
	 * @return OvhTypeMultiDomainModifyResponse
	 */
	public function multiDomainModify(OvhTypeMultiDomainModify $_ovhTypeMultiDomainModify)
	{
		try
		{
			$this->setResult(new OvhTypeMultiDomainModifyResponse(self::getSoapClient()->multiDomainModify($_ovhTypeMultiDomainModify->getSession(),$_ovhTypeMultiDomainModify->getDomain(),$_ovhTypeMultiDomainModify->getMultidomain(),$_ovhTypeMultiDomainModify->getTarget(),$_ovhTypeMultiDomainModify->getCountry(),$_ovhTypeMultiDomainModify->getOwnLog())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call multiDomainInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMultiDomainInfo::getSession()
	 * @uses OvhTypeMultiDomainInfo::getDomain()
	 * @uses OvhTypeMultiDomainInfo::getMultidomain()
	 * @param OvhTypeMultiDomainInfo MultiDomainInfo
	 * @return OvhTypeMultiDomainInfoResponse
	 */
	public function multiDomainInfo(OvhTypeMultiDomainInfo $_ovhTypeMultiDomainInfo)
	{
		try
		{
			$this->setResult(new OvhTypeMultiDomainInfoResponse(self::getSoapClient()->multiDomainInfo($_ovhTypeMultiDomainInfo->getSession(),$_ovhTypeMultiDomainInfo->getDomain(),$_ovhTypeMultiDomainInfo->getMultidomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call multiDomainDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMultiDomainDel::getSession()
	 * @uses OvhTypeMultiDomainDel::getDomain()
	 * @uses OvhTypeMultiDomainDel::getMultidomain()
	 * @param OvhTypeMultiDomainDel MultiDomainDel
	 * @return OvhTypeMultiDomainDelResponse
	 */
	public function multiDomainDel(OvhTypeMultiDomainDel $_ovhTypeMultiDomainDel)
	{
		try
		{
			$this->setResult(new OvhTypeMultiDomainDelResponse(self::getSoapClient()->multiDomainDel($_ovhTypeMultiDomainDel->getSession(),$_ovhTypeMultiDomainDel->getDomain(),$_ovhTypeMultiDomainDel->getMultidomain())));
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
	 * @return OvhTypeMultiDomainDelResponse
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