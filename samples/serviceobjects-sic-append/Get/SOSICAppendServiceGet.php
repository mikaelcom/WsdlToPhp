<?php
/**
 * Class file for SOSICAppendServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOSICAppendServiceGet
 * @date 08/07/2012
 */
class SOSICAppendServiceGet extends SOSICAppendWsdlClass
{
	/**
	 * Method to call GetSICCodeByCompanyAddress
	 * Meta informations :
	 * 	- documentation : Returns a SIC code for the company at the given address.
	 * @uses SOSICAppendWsdlClass::getSoapClient()
	 * @uses SOSICAppendWsdlClass::setResult()
	 * @uses SOSICAppendWsdlClass::getResult()
	 * @uses SOSICAppendWsdlClass::saveLastError()
	 * @uses SOSICAppendTypeGetSICCodeByCompanyAddress::getAddress()
	 * @uses SOSICAppendTypeGetSICCodeByCompanyAddress::getCity()
	 * @uses SOSICAppendTypeGetSICCodeByCompanyAddress::getState()
	 * @uses SOSICAppendTypeGetSICCodeByCompanyAddress::getPostalCode()
	 * @uses SOSICAppendTypeGetSICCodeByCompanyAddress::getLicenseKey()
	 * @param SOSICAppendTypeGetSICCodeByCompanyAddress GetSICCodeByCompanyAddress
	 * @return SOSICAppendTypeGetSICCodeByCompanyAddressResponse
	 */
	public function GetSICCodeByCompanyAddress(SOSICAppendTypeGetSICCodeByCompanyAddress $_SOSICAppendTypeGetSICCodeByCompanyAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSICCodeByCompanyAddress(array('Address'=>$_SOSICAppendTypeGetSICCodeByCompanyAddress->getAddress(),'City'=>$_SOSICAppendTypeGetSICCodeByCompanyAddress->getCity(),'State'=>$_SOSICAppendTypeGetSICCodeByCompanyAddress->getState(),'PostalCode'=>$_SOSICAppendTypeGetSICCodeByCompanyAddress->getPostalCode(),'LicenseKey'=>$_SOSICAppendTypeGetSICCodeByCompanyAddress->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSICCodeByPhoneNumber
	 * Meta informations :
	 * 	- documentation : Returns a SIC code for the company at the given phone number.
	 * @uses SOSICAppendWsdlClass::getSoapClient()
	 * @uses SOSICAppendWsdlClass::setResult()
	 * @uses SOSICAppendWsdlClass::getResult()
	 * @uses SOSICAppendWsdlClass::saveLastError()
	 * @uses SOSICAppendTypeGetSICCodeByPhoneNumber::getPhone()
	 * @uses SOSICAppendTypeGetSICCodeByPhoneNumber::getLicenseKey()
	 * @param SOSICAppendTypeGetSICCodeByPhoneNumber GetSICCodeByPhoneNumber
	 * @return SOSICAppendTypeGetSICCodeByPhoneNumberResponse
	 */
	public function GetSICCodeByPhoneNumber(SOSICAppendTypeGetSICCodeByPhoneNumber $_SOSICAppendTypeGetSICCodeByPhoneNumber)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSICCodeByPhoneNumber(array('Phone'=>$_SOSICAppendTypeGetSICCodeByPhoneNumber->getPhone(),'LicenseKey'=>$_SOSICAppendTypeGetSICCodeByPhoneNumber->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSICNameBySICCode
	 * Meta informations :
	 * 	- documentation : Returns a SIC name for the given SIC code.
	 * @uses SOSICAppendWsdlClass::getSoapClient()
	 * @uses SOSICAppendWsdlClass::setResult()
	 * @uses SOSICAppendWsdlClass::getResult()
	 * @uses SOSICAppendWsdlClass::saveLastError()
	 * @uses SOSICAppendTypeGetSICNameBySICCode::getSICCode()
	 * @uses SOSICAppendTypeGetSICNameBySICCode::getLicenseKey()
	 * @param SOSICAppendTypeGetSICNameBySICCode GetSICNameBySICCode
	 * @return SOSICAppendTypeGetSICNameBySICCodeResponse
	 */
	public function GetSICNameBySICCode(SOSICAppendTypeGetSICNameBySICCode $_SOSICAppendTypeGetSICNameBySICCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSICNameBySICCode(array('SICCode'=>$_SOSICAppendTypeGetSICNameBySICCode->getSICCode(),'LicenseKey'=>$_SOSICAppendTypeGetSICNameBySICCode->getLicenseKey())));
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
	 * @return SOSICAppendTypeGetSICNameBySICCodeResponse
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