<?php
/**
 * Class file for OvhServiceNic
 * @date 02/07/2012
 */
/**
 * Class OvhServiceNic
 * @date 02/07/2012
 */
class OvhServiceNic extends OvhWsdlClass
{
	/**
	 * Method to call nicModifyInfos
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicModifyInfos::getSession()
	 * @uses OvhTypeNicModifyInfos::getName()
	 * @uses OvhTypeNicModifyInfos::getFirstname()
	 * @uses OvhTypeNicModifyInfos::getLegalform()
	 * @uses OvhTypeNicModifyInfos::getOrganisation()
	 * @uses OvhTypeNicModifyInfos::getAddress()
	 * @uses OvhTypeNicModifyInfos::getZip()
	 * @uses OvhTypeNicModifyInfos::getCity()
	 * @uses OvhTypeNicModifyInfos::getCountry()
	 * @uses OvhTypeNicModifyInfos::getPhone()
	 * @uses OvhTypeNicModifyInfos::getFax()
	 * @uses OvhTypeNicModifyInfos::getEmail()
	 * @uses OvhTypeNicModifyInfos::getSpareEmail()
	 * @uses OvhTypeNicModifyInfos::getLanguage()
	 * @uses OvhTypeNicModifyInfos::getVat()
	 * @uses OvhTypeNicModifyInfos::getArea()
	 * @param OvhTypeNicModifyInfos NicModifyInfos
	 * @return OvhTypeNicModifyInfosResponse
	 */
	public function nicModifyInfos(OvhTypeNicModifyInfos $_ovhTypeNicModifyInfos)
	{
		try
		{
			$this->setResult(new OvhTypeNicModifyInfosResponse(self::getSoapClient()->nicModifyInfos($_ovhTypeNicModifyInfos->getSession(),$_ovhTypeNicModifyInfos->getName(),$_ovhTypeNicModifyInfos->getFirstname(),$_ovhTypeNicModifyInfos->getLegalform(),$_ovhTypeNicModifyInfos->getOrganisation(),$_ovhTypeNicModifyInfos->getAddress(),$_ovhTypeNicModifyInfos->getZip(),$_ovhTypeNicModifyInfos->getCity(),$_ovhTypeNicModifyInfos->getCountry(),$_ovhTypeNicModifyInfos->getPhone(),$_ovhTypeNicModifyInfos->getFax(),$_ovhTypeNicModifyInfos->getEmail(),$_ovhTypeNicModifyInfos->getSpareEmail(),$_ovhTypeNicModifyInfos->getLanguage(),$_ovhTypeNicModifyInfos->getVat(),$_ovhTypeNicModifyInfos->getArea())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNic::getSession()
	 * @param OvhTypeNic Nic
	 * @return OvhTypeNicResponse
	 */
	public function nic(OvhTypeNic $_ovhTypeNic)
	{
		try
		{
			$this->setResult(new OvhTypeNicResponse(self::getSoapClient()->nic($_ovhTypeNic->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nicTldEligibility
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicTldEligibility::getSession()
	 * @uses OvhTypeNicTldEligibility::getNic()
	 * @uses OvhTypeNicTldEligibility::getTld()
	 * @param OvhTypeNicTldEligibility NicTldEligibility
	 * @return OvhTypeNicTldEligibilityResponse
	 */
	public function nicTldEligibility(OvhTypeNicTldEligibility $_ovhTypeNicTldEligibility)
	{
		try
		{
			$this->setResult(new OvhTypeNicTldEligibilityResponse(self::getSoapClient()->nicTldEligibility($_ovhTypeNicTldEligibility->getSession(),$_ovhTypeNicTldEligibility->getNic(),$_ovhTypeNicTldEligibility->getTld())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nicModifyLanguage
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicModifyLanguage::getSession()
	 * @uses OvhTypeNicModifyLanguage::getNic()
	 * @uses OvhTypeNicModifyLanguage::getLanguage()
	 * @param OvhTypeNicModifyLanguage NicModifyLanguage
	 * @return OvhTypeNicModifyLanguageResponse
	 */
	public function nicModifyLanguage(OvhTypeNicModifyLanguage $_ovhTypeNicModifyLanguage)
	{
		try
		{
			$this->setResult(new OvhTypeNicModifyLanguageResponse(self::getSoapClient()->nicModifyLanguage($_ovhTypeNicModifyLanguage->getSession(),$_ovhTypeNicModifyLanguage->getNic(),$_ovhTypeNicModifyLanguage->getLanguage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nicCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicCreate::getSession()
	 * @uses OvhTypeNicCreate::getName()
	 * @uses OvhTypeNicCreate::getFirstname()
	 * @uses OvhTypeNicCreate::getPassword()
	 * @uses OvhTypeNicCreate::getEmail()
	 * @uses OvhTypeNicCreate::getPhone()
	 * @uses OvhTypeNicCreate::getFax()
	 * @uses OvhTypeNicCreate::getAddress()
	 * @uses OvhTypeNicCreate::getCity()
	 * @uses OvhTypeNicCreate::getArea()
	 * @uses OvhTypeNicCreate::getZip()
	 * @uses OvhTypeNicCreate::getCountry()
	 * @uses OvhTypeNicCreate::getLanguage()
	 * @uses OvhTypeNicCreate::getIsOwner()
	 * @uses OvhTypeNicCreate::getLegalform()
	 * @uses OvhTypeNicCreate::getOrganisation()
	 * @uses OvhTypeNicCreate::getLegalName()
	 * @uses OvhTypeNicCreate::getLegalNumber()
	 * @uses OvhTypeNicCreate::getVat()
	 * @param OvhTypeNicCreate NicCreate
	 * @return OvhTypeNicCreateResponse
	 */
	public function nicCreate(OvhTypeNicCreate $_ovhTypeNicCreate)
	{
		try
		{
			$this->setResult(new OvhTypeNicCreateResponse(self::getSoapClient()->nicCreate($_ovhTypeNicCreate->getSession(),$_ovhTypeNicCreate->getName(),$_ovhTypeNicCreate->getFirstname(),$_ovhTypeNicCreate->getPassword(),$_ovhTypeNicCreate->getEmail(),$_ovhTypeNicCreate->getPhone(),$_ovhTypeNicCreate->getFax(),$_ovhTypeNicCreate->getAddress(),$_ovhTypeNicCreate->getCity(),$_ovhTypeNicCreate->getArea(),$_ovhTypeNicCreate->getZip(),$_ovhTypeNicCreate->getCountry(),$_ovhTypeNicCreate->getLanguage(),$_ovhTypeNicCreate->getIsOwner(),$_ovhTypeNicCreate->getLegalform(),$_ovhTypeNicCreate->getOrganisation(),$_ovhTypeNicCreate->getLegalName(),$_ovhTypeNicCreate->getLegalNumber(),$_ovhTypeNicCreate->getVat())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nicInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicInfo::getSession()
	 * @uses OvhTypeNicInfo::getNic()
	 * @param OvhTypeNicInfo NicInfo
	 * @return OvhTypeNicInfoResponse
	 */
	public function nicInfo(OvhTypeNicInfo $_ovhTypeNicInfo)
	{
		try
		{
			$this->setResult(new OvhTypeNicInfoResponse(self::getSoapClient()->nicInfo($_ovhTypeNicInfo->getSession(),$_ovhTypeNicInfo->getNic())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nicModifyInfosIT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicModifyInfosIT::getSession()
	 * @uses OvhTypeNicModifyInfosIT::getName()
	 * @uses OvhTypeNicModifyInfosIT::getFirstname()
	 * @uses OvhTypeNicModifyInfosIT::getSex()
	 * @uses OvhTypeNicModifyInfosIT::getLegalform()
	 * @uses OvhTypeNicModifyInfosIT::getOrganisation()
	 * @uses OvhTypeNicModifyInfosIT::getAddress()
	 * @uses OvhTypeNicModifyInfosIT::getArea()
	 * @uses OvhTypeNicModifyInfosIT::getZip()
	 * @uses OvhTypeNicModifyInfosIT::getCity()
	 * @uses OvhTypeNicModifyInfosIT::getCountry()
	 * @uses OvhTypeNicModifyInfosIT::getPhone()
	 * @uses OvhTypeNicModifyInfosIT::getFax()
	 * @uses OvhTypeNicModifyInfosIT::getEmail()
	 * @uses OvhTypeNicModifyInfosIT::getSpareEmail()
	 * @uses OvhTypeNicModifyInfosIT::getLanguage()
	 * @uses OvhTypeNicModifyInfosIT::getVat()
	 * @uses OvhTypeNicModifyInfosIT::getBirthDay()
	 * @uses OvhTypeNicModifyInfosIT::getBirthCity()
	 * @uses OvhTypeNicModifyInfosIT::getNationalIdentificationNumber()
	 * @uses OvhTypeNicModifyInfosIT::getCompanyNationalIdentificationNumber()
	 * @uses OvhTypeNicModifyInfosIT::getCorporationType()
	 * @param OvhTypeNicModifyInfosIT NicModifyInfosIT
	 * @return OvhTypeNicModifyInfosITResponse
	 */
	public function nicModifyInfosIT(OvhTypeNicModifyInfosIT $_ovhTypeNicModifyInfosIT)
	{
		try
		{
			$this->setResult(new OvhTypeNicModifyInfosITResponse(self::getSoapClient()->nicModifyInfosIT($_ovhTypeNicModifyInfosIT->getSession(),$_ovhTypeNicModifyInfosIT->getName(),$_ovhTypeNicModifyInfosIT->getFirstname(),$_ovhTypeNicModifyInfosIT->getSex(),$_ovhTypeNicModifyInfosIT->getLegalform(),$_ovhTypeNicModifyInfosIT->getOrganisation(),$_ovhTypeNicModifyInfosIT->getAddress(),$_ovhTypeNicModifyInfosIT->getArea(),$_ovhTypeNicModifyInfosIT->getZip(),$_ovhTypeNicModifyInfosIT->getCity(),$_ovhTypeNicModifyInfosIT->getCountry(),$_ovhTypeNicModifyInfosIT->getPhone(),$_ovhTypeNicModifyInfosIT->getFax(),$_ovhTypeNicModifyInfosIT->getEmail(),$_ovhTypeNicModifyInfosIT->getSpareEmail(),$_ovhTypeNicModifyInfosIT->getLanguage(),$_ovhTypeNicModifyInfosIT->getVat(),$_ovhTypeNicModifyInfosIT->getBirthDay(),$_ovhTypeNicModifyInfosIT->getBirthCity(),$_ovhTypeNicModifyInfosIT->getNationalIdentificationNumber(),$_ovhTypeNicModifyInfosIT->getCompanyNationalIdentificationNumber(),$_ovhTypeNicModifyInfosIT->getCorporationType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nicPublicInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicPublicInfo::getSession()
	 * @uses OvhTypeNicPublicInfo::getNic()
	 * @param OvhTypeNicPublicInfo NicPublicInfo
	 * @return OvhTypeNicPublicInfoResponse
	 */
	public function nicPublicInfo(OvhTypeNicPublicInfo $_ovhTypeNicPublicInfo)
	{
		try
		{
			$this->setResult(new OvhTypeNicPublicInfoResponse(self::getSoapClient()->nicPublicInfo($_ovhTypeNicPublicInfo->getSession(),$_ovhTypeNicPublicInfo->getNic())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nicChangePassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicChangePassword::getSession()
	 * @uses OvhTypeNicChangePassword::getNic()
	 * @uses OvhTypeNicChangePassword::getPassword()
	 * @param OvhTypeNicChangePassword NicChangePassword
	 * @return OvhTypeNicChangePasswordResponse
	 */
	public function nicChangePassword(OvhTypeNicChangePassword $_ovhTypeNicChangePassword)
	{
		try
		{
			$this->setResult(new OvhTypeNicChangePasswordResponse(self::getSoapClient()->nicChangePassword($_ovhTypeNicChangePassword->getSession(),$_ovhTypeNicChangePassword->getNic(),$_ovhTypeNicChangePassword->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nicCreateIT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicCreateIT::getSession()
	 * @uses OvhTypeNicCreateIT::getName()
	 * @uses OvhTypeNicCreateIT::getFirstname()
	 * @uses OvhTypeNicCreateIT::getSex()
	 * @uses OvhTypeNicCreateIT::getPassword()
	 * @uses OvhTypeNicCreateIT::getEmail()
	 * @uses OvhTypeNicCreateIT::getPhone()
	 * @uses OvhTypeNicCreateIT::getFax()
	 * @uses OvhTypeNicCreateIT::getAddress()
	 * @uses OvhTypeNicCreateIT::getCity()
	 * @uses OvhTypeNicCreateIT::getArea()
	 * @uses OvhTypeNicCreateIT::getZip()
	 * @uses OvhTypeNicCreateIT::getCountry()
	 * @uses OvhTypeNicCreateIT::getLanguage()
	 * @uses OvhTypeNicCreateIT::getIsOwner()
	 * @uses OvhTypeNicCreateIT::getLegalform()
	 * @uses OvhTypeNicCreateIT::getOrganisation()
	 * @uses OvhTypeNicCreateIT::getLegalName()
	 * @uses OvhTypeNicCreateIT::getLegalNumber()
	 * @uses OvhTypeNicCreateIT::getVat()
	 * @uses OvhTypeNicCreateIT::getBirthDay()
	 * @uses OvhTypeNicCreateIT::getBirthCity()
	 * @uses OvhTypeNicCreateIT::getNationalIdentificationNumber()
	 * @uses OvhTypeNicCreateIT::getCompanyNationalIdentificationNumber()
	 * @uses OvhTypeNicCreateIT::getCorporationType()
	 * @param OvhTypeNicCreateIT NicCreateIT
	 * @return OvhTypeNicCreateITResponse
	 */
	public function nicCreateIT(OvhTypeNicCreateIT $_ovhTypeNicCreateIT)
	{
		try
		{
			$this->setResult(new OvhTypeNicCreateITResponse(self::getSoapClient()->nicCreateIT($_ovhTypeNicCreateIT->getSession(),$_ovhTypeNicCreateIT->getName(),$_ovhTypeNicCreateIT->getFirstname(),$_ovhTypeNicCreateIT->getSex(),$_ovhTypeNicCreateIT->getPassword(),$_ovhTypeNicCreateIT->getEmail(),$_ovhTypeNicCreateIT->getPhone(),$_ovhTypeNicCreateIT->getFax(),$_ovhTypeNicCreateIT->getAddress(),$_ovhTypeNicCreateIT->getCity(),$_ovhTypeNicCreateIT->getArea(),$_ovhTypeNicCreateIT->getZip(),$_ovhTypeNicCreateIT->getCountry(),$_ovhTypeNicCreateIT->getLanguage(),$_ovhTypeNicCreateIT->getIsOwner(),$_ovhTypeNicCreateIT->getLegalform(),$_ovhTypeNicCreateIT->getOrganisation(),$_ovhTypeNicCreateIT->getLegalName(),$_ovhTypeNicCreateIT->getLegalNumber(),$_ovhTypeNicCreateIT->getVat(),$_ovhTypeNicCreateIT->getBirthDay(),$_ovhTypeNicCreateIT->getBirthCity(),$_ovhTypeNicCreateIT->getNationalIdentificationNumber(),$_ovhTypeNicCreateIT->getCompanyNationalIdentificationNumber(),$_ovhTypeNicCreateIT->getCorporationType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nicModifyEmail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicModifyEmail::getSession()
	 * @uses OvhTypeNicModifyEmail::getNic()
	 * @uses OvhTypeNicModifyEmail::getEmail()
	 * @param OvhTypeNicModifyEmail NicModifyEmail
	 * @return OvhTypeNicModifyEmailResponse
	 */
	public function nicModifyEmail(OvhTypeNicModifyEmail $_ovhTypeNicModifyEmail)
	{
		try
		{
			$this->setResult(new OvhTypeNicModifyEmailResponse(self::getSoapClient()->nicModifyEmail($_ovhTypeNicModifyEmail->getSession(),$_ovhTypeNicModifyEmail->getNic(),$_ovhTypeNicModifyEmail->getEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nicUpdateIT
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicUpdateIT::getSession()
	 * @uses OvhTypeNicUpdateIT::getNic()
	 * @uses OvhTypeNicUpdateIT::getName()
	 * @uses OvhTypeNicUpdateIT::getFirstname()
	 * @uses OvhTypeNicUpdateIT::getSex()
	 * @uses OvhTypeNicUpdateIT::getLegalForm()
	 * @uses OvhTypeNicUpdateIT::getOrganisation()
	 * @uses OvhTypeNicUpdateIT::getLegalName()
	 * @uses OvhTypeNicUpdateIT::getLegalNumber()
	 * @uses OvhTypeNicUpdateIT::getVat()
	 * @uses OvhTypeNicUpdateIT::getBirthDay()
	 * @uses OvhTypeNicUpdateIT::getBirthCity()
	 * @uses OvhTypeNicUpdateIT::getNationalIdentificationNumber()
	 * @uses OvhTypeNicUpdateIT::getCompanyNationalIdentificationNumber()
	 * @uses OvhTypeNicUpdateIT::getCorporationType()
	 * @param OvhTypeNicUpdateIT NicUpdateIT
	 * @return OvhTypeNicUpdateITResponse
	 */
	public function nicUpdateIT(OvhTypeNicUpdateIT $_ovhTypeNicUpdateIT)
	{
		try
		{
			$this->setResult(new OvhTypeNicUpdateITResponse(self::getSoapClient()->nicUpdateIT($_ovhTypeNicUpdateIT->getSession(),$_ovhTypeNicUpdateIT->getNic(),$_ovhTypeNicUpdateIT->getName(),$_ovhTypeNicUpdateIT->getFirstname(),$_ovhTypeNicUpdateIT->getSex(),$_ovhTypeNicUpdateIT->getLegalForm(),$_ovhTypeNicUpdateIT->getOrganisation(),$_ovhTypeNicUpdateIT->getLegalName(),$_ovhTypeNicUpdateIT->getLegalNumber(),$_ovhTypeNicUpdateIT->getVat(),$_ovhTypeNicUpdateIT->getBirthDay(),$_ovhTypeNicUpdateIT->getBirthCity(),$_ovhTypeNicUpdateIT->getNationalIdentificationNumber(),$_ovhTypeNicUpdateIT->getCompanyNationalIdentificationNumber(),$_ovhTypeNicUpdateIT->getCorporationType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call nicUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNicUpdate::getSession()
	 * @uses OvhTypeNicUpdate::getNic()
	 * @uses OvhTypeNicUpdate::getName()
	 * @uses OvhTypeNicUpdate::getFirstname()
	 * @uses OvhTypeNicUpdate::getLegalForm()
	 * @uses OvhTypeNicUpdate::getOrganisation()
	 * @uses OvhTypeNicUpdate::getLegalName()
	 * @uses OvhTypeNicUpdate::getLegalNumber()
	 * @uses OvhTypeNicUpdate::getVat()
	 * @param OvhTypeNicUpdate NicUpdate
	 * @return OvhTypeNicUpdateResponse
	 */
	public function nicUpdate(OvhTypeNicUpdate $_ovhTypeNicUpdate)
	{
		try
		{
			$this->setResult(new OvhTypeNicUpdateResponse(self::getSoapClient()->nicUpdate($_ovhTypeNicUpdate->getSession(),$_ovhTypeNicUpdate->getNic(),$_ovhTypeNicUpdate->getName(),$_ovhTypeNicUpdate->getFirstname(),$_ovhTypeNicUpdate->getLegalForm(),$_ovhTypeNicUpdate->getOrganisation(),$_ovhTypeNicUpdate->getLegalName(),$_ovhTypeNicUpdate->getLegalNumber(),$_ovhTypeNicUpdate->getVat())));
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
	 * @return OvhTypeNicUpdateResponse
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