<?php
/**
 * Class file for OvhServiceReseller
 * @date 02/07/2012
 */
/**
 * Class OvhServiceReseller
 * @date 02/07/2012
 */
class OvhServiceReseller extends OvhWsdlClass
{
	/**
	 * Method to call resellerDomainTransferIT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResellerDomainTransferIT::getSession()
	 * @uses OvhTypeResellerDomainTransferIT::getDomain()
	 * @uses OvhTypeResellerDomainTransferIT::getAuthinfo()
	 * @uses OvhTypeResellerDomainTransferIT::getHosting()
	 * @uses OvhTypeResellerDomainTransferIT::getOffer()
	 * @uses OvhTypeResellerDomainTransferIT::getProfile()
	 * @uses OvhTypeResellerDomainTransferIT::getOwo()
	 * @uses OvhTypeResellerDomainTransferIT::getOwner()
	 * @uses OvhTypeResellerDomainTransferIT::getAdmin()
	 * @uses OvhTypeResellerDomainTransferIT::getTech()
	 * @uses OvhTypeResellerDomainTransferIT::getBilling()
	 * @uses OvhTypeResellerDomainTransferIT::getDns1()
	 * @uses OvhTypeResellerDomainTransferIT::getDns2()
	 * @uses OvhTypeResellerDomainTransferIT::getDns3()
	 * @uses OvhTypeResellerDomainTransferIT::getDns4()
	 * @uses OvhTypeResellerDomainTransferIT::getDns5()
	 * @uses OvhTypeResellerDomainTransferIT::getLegalRepresentantFirstName()
	 * @uses OvhTypeResellerDomainTransferIT::getLegalRepresentantLastName()
	 * @uses OvhTypeResellerDomainTransferIT::getLegalNumber()
	 * @uses OvhTypeResellerDomainTransferIT::getVat()
	 * @uses OvhTypeResellerDomainTransferIT::getBirthDate()
	 * @uses OvhTypeResellerDomainTransferIT::getBirthCity()
	 * @uses OvhTypeResellerDomainTransferIT::getBirthDepartement()
	 * @uses OvhTypeResellerDomainTransferIT::getBirthCountry()
	 * @uses OvhTypeResellerDomainTransferIT::getNationality()
	 * @uses OvhTypeResellerDomainTransferIT::getDryRun()
	 * @param OvhTypeResellerDomainTransferIT ResellerDomainTransferIT
	 * @return OvhTypeResellerDomainTransferITResponse
	 */
	public function resellerDomainTransferIT(OvhTypeResellerDomainTransferIT $_ovhTypeResellerDomainTransferIT)
	{
		try
		{
			$this->setResult(new OvhTypeResellerDomainTransferITResponse(self::getSoapClient()->resellerDomainTransferIT($_ovhTypeResellerDomainTransferIT->getSession(),$_ovhTypeResellerDomainTransferIT->getDomain(),$_ovhTypeResellerDomainTransferIT->getAuthinfo(),$_ovhTypeResellerDomainTransferIT->getHosting(),$_ovhTypeResellerDomainTransferIT->getOffer(),$_ovhTypeResellerDomainTransferIT->getProfile(),$_ovhTypeResellerDomainTransferIT->getOwo(),$_ovhTypeResellerDomainTransferIT->getOwner(),$_ovhTypeResellerDomainTransferIT->getAdmin(),$_ovhTypeResellerDomainTransferIT->getTech(),$_ovhTypeResellerDomainTransferIT->getBilling(),$_ovhTypeResellerDomainTransferIT->getDns1(),$_ovhTypeResellerDomainTransferIT->getDns2(),$_ovhTypeResellerDomainTransferIT->getDns3(),$_ovhTypeResellerDomainTransferIT->getDns4(),$_ovhTypeResellerDomainTransferIT->getDns5(),$_ovhTypeResellerDomainTransferIT->getLegalRepresentantFirstName(),$_ovhTypeResellerDomainTransferIT->getLegalRepresentantLastName(),$_ovhTypeResellerDomainTransferIT->getLegalNumber(),$_ovhTypeResellerDomainTransferIT->getVat(),$_ovhTypeResellerDomainTransferIT->getBirthDate(),$_ovhTypeResellerDomainTransferIT->getBirthCity(),$_ovhTypeResellerDomainTransferIT->getBirthDepartement(),$_ovhTypeResellerDomainTransferIT->getBirthCountry(),$_ovhTypeResellerDomainTransferIT->getNationality(),$_ovhTypeResellerDomainTransferIT->getDryRun())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call resellerDomainRestore
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResellerDomainRestore::getSession()
	 * @uses OvhTypeResellerDomainRestore::getDomain()
	 * @uses OvhTypeResellerDomainRestore::getDryRun()
	 * @param OvhTypeResellerDomainRestore ResellerDomainRestore
	 * @return OvhTypeResellerDomainRestoreResponse
	 */
	public function resellerDomainRestore(OvhTypeResellerDomainRestore $_ovhTypeResellerDomainRestore)
	{
		try
		{
			$this->setResult(new OvhTypeResellerDomainRestoreResponse(self::getSoapClient()->resellerDomainRestore($_ovhTypeResellerDomainRestore->getSession(),$_ovhTypeResellerDomainRestore->getDomain(),$_ovhTypeResellerDomainRestore->getDryRun())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call resellerDomainRenew
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResellerDomainRenew::getSession()
	 * @uses OvhTypeResellerDomainRenew::getDomain()
	 * @uses OvhTypeResellerDomainRenew::getDryRun()
	 * @param OvhTypeResellerDomainRenew ResellerDomainRenew
	 * @return OvhTypeResellerDomainRenewResponse
	 */
	public function resellerDomainRenew(OvhTypeResellerDomainRenew $_ovhTypeResellerDomainRenew)
	{
		try
		{
			$this->setResult(new OvhTypeResellerDomainRenewResponse(self::getSoapClient()->resellerDomainRenew($_ovhTypeResellerDomainRenew->getSession(),$_ovhTypeResellerDomainRenew->getDomain(),$_ovhTypeResellerDomainRenew->getDryRun())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call resellerDomainCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResellerDomainCreate::getSession()
	 * @uses OvhTypeResellerDomainCreate::getDomain()
	 * @uses OvhTypeResellerDomainCreate::getHosting()
	 * @uses OvhTypeResellerDomainCreate::getOffer()
	 * @uses OvhTypeResellerDomainCreate::getProfile()
	 * @uses OvhTypeResellerDomainCreate::getOwo()
	 * @uses OvhTypeResellerDomainCreate::getOwner()
	 * @uses OvhTypeResellerDomainCreate::getAdmin()
	 * @uses OvhTypeResellerDomainCreate::getTech()
	 * @uses OvhTypeResellerDomainCreate::getBilling()
	 * @uses OvhTypeResellerDomainCreate::getDns1()
	 * @uses OvhTypeResellerDomainCreate::getDns2()
	 * @uses OvhTypeResellerDomainCreate::getDns3()
	 * @uses OvhTypeResellerDomainCreate::getDns4()
	 * @uses OvhTypeResellerDomainCreate::getDns5()
	 * @uses OvhTypeResellerDomainCreate::getMethod()
	 * @uses OvhTypeResellerDomainCreate::getLegalName()
	 * @uses OvhTypeResellerDomainCreate::getLegalNumber()
	 * @uses OvhTypeResellerDomainCreate::getAfnicIdent()
	 * @uses OvhTypeResellerDomainCreate::getBirthDate()
	 * @uses OvhTypeResellerDomainCreate::getBirthCity()
	 * @uses OvhTypeResellerDomainCreate::getBirthDepartement()
	 * @uses OvhTypeResellerDomainCreate::getBirthCountry()
	 * @uses OvhTypeResellerDomainCreate::getDryRun()
	 * @param OvhTypeResellerDomainCreate ResellerDomainCreate
	 * @return OvhTypeResellerDomainCreateResponse
	 */
	public function resellerDomainCreate(OvhTypeResellerDomainCreate $_ovhTypeResellerDomainCreate)
	{
		try
		{
			$this->setResult(new OvhTypeResellerDomainCreateResponse(self::getSoapClient()->resellerDomainCreate($_ovhTypeResellerDomainCreate->getSession(),$_ovhTypeResellerDomainCreate->getDomain(),$_ovhTypeResellerDomainCreate->getHosting(),$_ovhTypeResellerDomainCreate->getOffer(),$_ovhTypeResellerDomainCreate->getProfile(),$_ovhTypeResellerDomainCreate->getOwo(),$_ovhTypeResellerDomainCreate->getOwner(),$_ovhTypeResellerDomainCreate->getAdmin(),$_ovhTypeResellerDomainCreate->getTech(),$_ovhTypeResellerDomainCreate->getBilling(),$_ovhTypeResellerDomainCreate->getDns1(),$_ovhTypeResellerDomainCreate->getDns2(),$_ovhTypeResellerDomainCreate->getDns3(),$_ovhTypeResellerDomainCreate->getDns4(),$_ovhTypeResellerDomainCreate->getDns5(),$_ovhTypeResellerDomainCreate->getMethod(),$_ovhTypeResellerDomainCreate->getLegalName(),$_ovhTypeResellerDomainCreate->getLegalNumber(),$_ovhTypeResellerDomainCreate->getAfnicIdent(),$_ovhTypeResellerDomainCreate->getBirthDate(),$_ovhTypeResellerDomainCreate->getBirthCity(),$_ovhTypeResellerDomainCreate->getBirthDepartement(),$_ovhTypeResellerDomainCreate->getBirthCountry(),$_ovhTypeResellerDomainCreate->getDryRun())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call resellerDomainCreateIT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResellerDomainCreateIT::getSession()
	 * @uses OvhTypeResellerDomainCreateIT::getDomain()
	 * @uses OvhTypeResellerDomainCreateIT::getHosting()
	 * @uses OvhTypeResellerDomainCreateIT::getOffer()
	 * @uses OvhTypeResellerDomainCreateIT::getProfile()
	 * @uses OvhTypeResellerDomainCreateIT::getOwo()
	 * @uses OvhTypeResellerDomainCreateIT::getOwner()
	 * @uses OvhTypeResellerDomainCreateIT::getAdmin()
	 * @uses OvhTypeResellerDomainCreateIT::getTech()
	 * @uses OvhTypeResellerDomainCreateIT::getBilling()
	 * @uses OvhTypeResellerDomainCreateIT::getDns1()
	 * @uses OvhTypeResellerDomainCreateIT::getDns2()
	 * @uses OvhTypeResellerDomainCreateIT::getDns3()
	 * @uses OvhTypeResellerDomainCreateIT::getDns4()
	 * @uses OvhTypeResellerDomainCreateIT::getDns5()
	 * @uses OvhTypeResellerDomainCreateIT::getLegalRepresentantFirstName()
	 * @uses OvhTypeResellerDomainCreateIT::getLegalRepresentantLastName()
	 * @uses OvhTypeResellerDomainCreateIT::getLegalNumber()
	 * @uses OvhTypeResellerDomainCreateIT::getVat()
	 * @uses OvhTypeResellerDomainCreateIT::getBirthDate()
	 * @uses OvhTypeResellerDomainCreateIT::getBirthCity()
	 * @uses OvhTypeResellerDomainCreateIT::getBirthDepartement()
	 * @uses OvhTypeResellerDomainCreateIT::getBirthCountry()
	 * @uses OvhTypeResellerDomainCreateIT::getNationality()
	 * @uses OvhTypeResellerDomainCreateIT::getDryRun()
	 * @param OvhTypeResellerDomainCreateIT ResellerDomainCreateIT
	 * @return OvhTypeResellerDomainCreateITResponse
	 */
	public function resellerDomainCreateIT(OvhTypeResellerDomainCreateIT $_ovhTypeResellerDomainCreateIT)
	{
		try
		{
			$this->setResult(new OvhTypeResellerDomainCreateITResponse(self::getSoapClient()->resellerDomainCreateIT($_ovhTypeResellerDomainCreateIT->getSession(),$_ovhTypeResellerDomainCreateIT->getDomain(),$_ovhTypeResellerDomainCreateIT->getHosting(),$_ovhTypeResellerDomainCreateIT->getOffer(),$_ovhTypeResellerDomainCreateIT->getProfile(),$_ovhTypeResellerDomainCreateIT->getOwo(),$_ovhTypeResellerDomainCreateIT->getOwner(),$_ovhTypeResellerDomainCreateIT->getAdmin(),$_ovhTypeResellerDomainCreateIT->getTech(),$_ovhTypeResellerDomainCreateIT->getBilling(),$_ovhTypeResellerDomainCreateIT->getDns1(),$_ovhTypeResellerDomainCreateIT->getDns2(),$_ovhTypeResellerDomainCreateIT->getDns3(),$_ovhTypeResellerDomainCreateIT->getDns4(),$_ovhTypeResellerDomainCreateIT->getDns5(),$_ovhTypeResellerDomainCreateIT->getLegalRepresentantFirstName(),$_ovhTypeResellerDomainCreateIT->getLegalRepresentantLastName(),$_ovhTypeResellerDomainCreateIT->getLegalNumber(),$_ovhTypeResellerDomainCreateIT->getVat(),$_ovhTypeResellerDomainCreateIT->getBirthDate(),$_ovhTypeResellerDomainCreateIT->getBirthCity(),$_ovhTypeResellerDomainCreateIT->getBirthDepartement(),$_ovhTypeResellerDomainCreateIT->getBirthCountry(),$_ovhTypeResellerDomainCreateIT->getNationality(),$_ovhTypeResellerDomainCreateIT->getDryRun())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call resellerDomainTransferASIA
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResellerDomainTransferASIA::getSession()
	 * @uses OvhTypeResellerDomainTransferASIA::getDomain()
	 * @uses OvhTypeResellerDomainTransferASIA::getAuthinfo()
	 * @uses OvhTypeResellerDomainTransferASIA::getHosting()
	 * @uses OvhTypeResellerDomainTransferASIA::getOffer()
	 * @uses OvhTypeResellerDomainTransferASIA::getProfile()
	 * @uses OvhTypeResellerDomainTransferASIA::getOwo()
	 * @uses OvhTypeResellerDomainTransferASIA::getOwner()
	 * @uses OvhTypeResellerDomainTransferASIA::getAdmin()
	 * @uses OvhTypeResellerDomainTransferASIA::getTech()
	 * @uses OvhTypeResellerDomainTransferASIA::getBilling()
	 * @uses OvhTypeResellerDomainTransferASIA::getDns1()
	 * @uses OvhTypeResellerDomainTransferASIA::getDns2()
	 * @uses OvhTypeResellerDomainTransferASIA::getDns3()
	 * @uses OvhTypeResellerDomainTransferASIA::getDns4()
	 * @uses OvhTypeResellerDomainTransferASIA::getDns5()
	 * @uses OvhTypeResellerDomainTransferASIA::getCedCea()
	 * @uses OvhTypeResellerDomainTransferASIA::getContactCED()
	 * @uses OvhTypeResellerDomainTransferASIA::getLocalityCity()
	 * @uses OvhTypeResellerDomainTransferASIA::getLocalitySp()
	 * @uses OvhTypeResellerDomainTransferASIA::getCcLocality()
	 * @uses OvhTypeResellerDomainTransferASIA::getLegalEntityType()
	 * @uses OvhTypeResellerDomainTransferASIA::getOtherLEType()
	 * @uses OvhTypeResellerDomainTransferASIA::getIdentForm()
	 * @uses OvhTypeResellerDomainTransferASIA::getOtherIdentForm()
	 * @uses OvhTypeResellerDomainTransferASIA::getIdentNumber()
	 * @uses OvhTypeResellerDomainTransferASIA::getDryRun()
	 * @param OvhTypeResellerDomainTransferASIA ResellerDomainTransferASIA
	 * @return OvhTypeResellerDomainTransferASIAResponse
	 */
	public function resellerDomainTransferASIA(OvhTypeResellerDomainTransferASIA $_ovhTypeResellerDomainTransferASIA)
	{
		try
		{
			$this->setResult(new OvhTypeResellerDomainTransferASIAResponse(self::getSoapClient()->resellerDomainTransferASIA($_ovhTypeResellerDomainTransferASIA->getSession(),$_ovhTypeResellerDomainTransferASIA->getDomain(),$_ovhTypeResellerDomainTransferASIA->getAuthinfo(),$_ovhTypeResellerDomainTransferASIA->getHosting(),$_ovhTypeResellerDomainTransferASIA->getOffer(),$_ovhTypeResellerDomainTransferASIA->getProfile(),$_ovhTypeResellerDomainTransferASIA->getOwo(),$_ovhTypeResellerDomainTransferASIA->getOwner(),$_ovhTypeResellerDomainTransferASIA->getAdmin(),$_ovhTypeResellerDomainTransferASIA->getTech(),$_ovhTypeResellerDomainTransferASIA->getBilling(),$_ovhTypeResellerDomainTransferASIA->getDns1(),$_ovhTypeResellerDomainTransferASIA->getDns2(),$_ovhTypeResellerDomainTransferASIA->getDns3(),$_ovhTypeResellerDomainTransferASIA->getDns4(),$_ovhTypeResellerDomainTransferASIA->getDns5(),$_ovhTypeResellerDomainTransferASIA->getCedCea(),$_ovhTypeResellerDomainTransferASIA->getContactCED(),$_ovhTypeResellerDomainTransferASIA->getLocalityCity(),$_ovhTypeResellerDomainTransferASIA->getLocalitySp(),$_ovhTypeResellerDomainTransferASIA->getCcLocality(),$_ovhTypeResellerDomainTransferASIA->getLegalEntityType(),$_ovhTypeResellerDomainTransferASIA->getOtherLEType(),$_ovhTypeResellerDomainTransferASIA->getIdentForm(),$_ovhTypeResellerDomainTransferASIA->getOtherIdentForm(),$_ovhTypeResellerDomainTransferASIA->getIdentNumber(),$_ovhTypeResellerDomainTransferASIA->getDryRun())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call resellerDomainCreateCAT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResellerDomainCreateCAT::getSession()
	 * @uses OvhTypeResellerDomainCreateCAT::getDomain()
	 * @uses OvhTypeResellerDomainCreateCAT::getHosting()
	 * @uses OvhTypeResellerDomainCreateCAT::getOffer()
	 * @uses OvhTypeResellerDomainCreateCAT::getProfile()
	 * @uses OvhTypeResellerDomainCreateCAT::getOwo()
	 * @uses OvhTypeResellerDomainCreateCAT::getOwner()
	 * @uses OvhTypeResellerDomainCreateCAT::getAdmin()
	 * @uses OvhTypeResellerDomainCreateCAT::getTech()
	 * @uses OvhTypeResellerDomainCreateCAT::getBilling()
	 * @uses OvhTypeResellerDomainCreateCAT::getDns1()
	 * @uses OvhTypeResellerDomainCreateCAT::getDns2()
	 * @uses OvhTypeResellerDomainCreateCAT::getDns3()
	 * @uses OvhTypeResellerDomainCreateCAT::getDns4()
	 * @uses OvhTypeResellerDomainCreateCAT::getDns5()
	 * @uses OvhTypeResellerDomainCreateCAT::getReason()
	 * @uses OvhTypeResellerDomainCreateCAT::getDryRun()
	 * @param OvhTypeResellerDomainCreateCAT ResellerDomainCreateCAT
	 * @return OvhTypeResellerDomainCreateCATResponse
	 */
	public function resellerDomainCreateCAT(OvhTypeResellerDomainCreateCAT $_ovhTypeResellerDomainCreateCAT)
	{
		try
		{
			$this->setResult(new OvhTypeResellerDomainCreateCATResponse(self::getSoapClient()->resellerDomainCreateCAT($_ovhTypeResellerDomainCreateCAT->getSession(),$_ovhTypeResellerDomainCreateCAT->getDomain(),$_ovhTypeResellerDomainCreateCAT->getHosting(),$_ovhTypeResellerDomainCreateCAT->getOffer(),$_ovhTypeResellerDomainCreateCAT->getProfile(),$_ovhTypeResellerDomainCreateCAT->getOwo(),$_ovhTypeResellerDomainCreateCAT->getOwner(),$_ovhTypeResellerDomainCreateCAT->getAdmin(),$_ovhTypeResellerDomainCreateCAT->getTech(),$_ovhTypeResellerDomainCreateCAT->getBilling(),$_ovhTypeResellerDomainCreateCAT->getDns1(),$_ovhTypeResellerDomainCreateCAT->getDns2(),$_ovhTypeResellerDomainCreateCAT->getDns3(),$_ovhTypeResellerDomainCreateCAT->getDns4(),$_ovhTypeResellerDomainCreateCAT->getDns5(),$_ovhTypeResellerDomainCreateCAT->getReason(),$_ovhTypeResellerDomainCreateCAT->getDryRun())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call resellerDomainCreateASIA
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResellerDomainCreateASIA::getSession()
	 * @uses OvhTypeResellerDomainCreateASIA::getDomain()
	 * @uses OvhTypeResellerDomainCreateASIA::getHosting()
	 * @uses OvhTypeResellerDomainCreateASIA::getOffer()
	 * @uses OvhTypeResellerDomainCreateASIA::getProfile()
	 * @uses OvhTypeResellerDomainCreateASIA::getOwo()
	 * @uses OvhTypeResellerDomainCreateASIA::getOwner()
	 * @uses OvhTypeResellerDomainCreateASIA::getAdmin()
	 * @uses OvhTypeResellerDomainCreateASIA::getTech()
	 * @uses OvhTypeResellerDomainCreateASIA::getBilling()
	 * @uses OvhTypeResellerDomainCreateASIA::getDns1()
	 * @uses OvhTypeResellerDomainCreateASIA::getDns2()
	 * @uses OvhTypeResellerDomainCreateASIA::getDns3()
	 * @uses OvhTypeResellerDomainCreateASIA::getDns4()
	 * @uses OvhTypeResellerDomainCreateASIA::getDns5()
	 * @uses OvhTypeResellerDomainCreateASIA::getCedCea()
	 * @uses OvhTypeResellerDomainCreateASIA::getContactCED()
	 * @uses OvhTypeResellerDomainCreateASIA::getLocalityCity()
	 * @uses OvhTypeResellerDomainCreateASIA::getLocalitySp()
	 * @uses OvhTypeResellerDomainCreateASIA::getCcLocality()
	 * @uses OvhTypeResellerDomainCreateASIA::getLegalEntityType()
	 * @uses OvhTypeResellerDomainCreateASIA::getOtherLEType()
	 * @uses OvhTypeResellerDomainCreateASIA::getIdentForm()
	 * @uses OvhTypeResellerDomainCreateASIA::getOtherIdentForm()
	 * @uses OvhTypeResellerDomainCreateASIA::getIdentNumber()
	 * @uses OvhTypeResellerDomainCreateASIA::getDryRun()
	 * @param OvhTypeResellerDomainCreateASIA ResellerDomainCreateASIA
	 * @return OvhTypeResellerDomainCreateASIAResponse
	 */
	public function resellerDomainCreateASIA(OvhTypeResellerDomainCreateASIA $_ovhTypeResellerDomainCreateASIA)
	{
		try
		{
			$this->setResult(new OvhTypeResellerDomainCreateASIAResponse(self::getSoapClient()->resellerDomainCreateASIA($_ovhTypeResellerDomainCreateASIA->getSession(),$_ovhTypeResellerDomainCreateASIA->getDomain(),$_ovhTypeResellerDomainCreateASIA->getHosting(),$_ovhTypeResellerDomainCreateASIA->getOffer(),$_ovhTypeResellerDomainCreateASIA->getProfile(),$_ovhTypeResellerDomainCreateASIA->getOwo(),$_ovhTypeResellerDomainCreateASIA->getOwner(),$_ovhTypeResellerDomainCreateASIA->getAdmin(),$_ovhTypeResellerDomainCreateASIA->getTech(),$_ovhTypeResellerDomainCreateASIA->getBilling(),$_ovhTypeResellerDomainCreateASIA->getDns1(),$_ovhTypeResellerDomainCreateASIA->getDns2(),$_ovhTypeResellerDomainCreateASIA->getDns3(),$_ovhTypeResellerDomainCreateASIA->getDns4(),$_ovhTypeResellerDomainCreateASIA->getDns5(),$_ovhTypeResellerDomainCreateASIA->getCedCea(),$_ovhTypeResellerDomainCreateASIA->getContactCED(),$_ovhTypeResellerDomainCreateASIA->getLocalityCity(),$_ovhTypeResellerDomainCreateASIA->getLocalitySp(),$_ovhTypeResellerDomainCreateASIA->getCcLocality(),$_ovhTypeResellerDomainCreateASIA->getLegalEntityType(),$_ovhTypeResellerDomainCreateASIA->getOtherLEType(),$_ovhTypeResellerDomainCreateASIA->getIdentForm(),$_ovhTypeResellerDomainCreateASIA->getOtherIdentForm(),$_ovhTypeResellerDomainCreateASIA->getIdentNumber(),$_ovhTypeResellerDomainCreateASIA->getDryRun())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call resellerDomainTransfer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResellerDomainTransfer::getSession()
	 * @uses OvhTypeResellerDomainTransfer::getDomain()
	 * @uses OvhTypeResellerDomainTransfer::getAuthinfo()
	 * @uses OvhTypeResellerDomainTransfer::getHosting()
	 * @uses OvhTypeResellerDomainTransfer::getOffer()
	 * @uses OvhTypeResellerDomainTransfer::getProfile()
	 * @uses OvhTypeResellerDomainTransfer::getOwo()
	 * @uses OvhTypeResellerDomainTransfer::getOwner()
	 * @uses OvhTypeResellerDomainTransfer::getAdmin()
	 * @uses OvhTypeResellerDomainTransfer::getTech()
	 * @uses OvhTypeResellerDomainTransfer::getBilling()
	 * @uses OvhTypeResellerDomainTransfer::getDns1()
	 * @uses OvhTypeResellerDomainTransfer::getDns2()
	 * @uses OvhTypeResellerDomainTransfer::getDns3()
	 * @uses OvhTypeResellerDomainTransfer::getDns4()
	 * @uses OvhTypeResellerDomainTransfer::getDns5()
	 * @uses OvhTypeResellerDomainTransfer::getMethod()
	 * @uses OvhTypeResellerDomainTransfer::getLegalName()
	 * @uses OvhTypeResellerDomainTransfer::getLegalNumber()
	 * @uses OvhTypeResellerDomainTransfer::getAfnicIdent()
	 * @uses OvhTypeResellerDomainTransfer::getBirthDate()
	 * @uses OvhTypeResellerDomainTransfer::getBirthCity()
	 * @uses OvhTypeResellerDomainTransfer::getBirthDepartement()
	 * @uses OvhTypeResellerDomainTransfer::getBirthCountry()
	 * @uses OvhTypeResellerDomainTransfer::getDryRun()
	 * @param OvhTypeResellerDomainTransfer ResellerDomainTransfer
	 * @return OvhTypeResellerDomainTransferResponse
	 */
	public function resellerDomainTransfer(OvhTypeResellerDomainTransfer $_ovhTypeResellerDomainTransfer)
	{
		try
		{
			$this->setResult(new OvhTypeResellerDomainTransferResponse(self::getSoapClient()->resellerDomainTransfer($_ovhTypeResellerDomainTransfer->getSession(),$_ovhTypeResellerDomainTransfer->getDomain(),$_ovhTypeResellerDomainTransfer->getAuthinfo(),$_ovhTypeResellerDomainTransfer->getHosting(),$_ovhTypeResellerDomainTransfer->getOffer(),$_ovhTypeResellerDomainTransfer->getProfile(),$_ovhTypeResellerDomainTransfer->getOwo(),$_ovhTypeResellerDomainTransfer->getOwner(),$_ovhTypeResellerDomainTransfer->getAdmin(),$_ovhTypeResellerDomainTransfer->getTech(),$_ovhTypeResellerDomainTransfer->getBilling(),$_ovhTypeResellerDomainTransfer->getDns1(),$_ovhTypeResellerDomainTransfer->getDns2(),$_ovhTypeResellerDomainTransfer->getDns3(),$_ovhTypeResellerDomainTransfer->getDns4(),$_ovhTypeResellerDomainTransfer->getDns5(),$_ovhTypeResellerDomainTransfer->getMethod(),$_ovhTypeResellerDomainTransfer->getLegalName(),$_ovhTypeResellerDomainTransfer->getLegalNumber(),$_ovhTypeResellerDomainTransfer->getAfnicIdent(),$_ovhTypeResellerDomainTransfer->getBirthDate(),$_ovhTypeResellerDomainTransfer->getBirthCity(),$_ovhTypeResellerDomainTransfer->getBirthDepartement(),$_ovhTypeResellerDomainTransfer->getBirthCountry(),$_ovhTypeResellerDomainTransfer->getDryRun())));
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
	 * @return OvhTypeResellerDomainTransferResponse
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