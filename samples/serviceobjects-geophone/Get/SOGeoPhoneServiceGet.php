<?php
/**
 * Class file for SOGeoPhoneServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneServiceGet
 * @date 08/07/2012
 */
class SOGeoPhoneServiceGet extends SOGeoPhoneWsdlClass
{
	/**
	 * Method to call GetPhoneInfo
	 * Meta informations :
	 * 	- documentation : Returns reverse lookup information on a given phone number.
	 * @uses SOGeoPhoneWsdlClass::getSoapClient()
	 * @uses SOGeoPhoneWsdlClass::setResult()
	 * @uses SOGeoPhoneWsdlClass::getResult()
	 * @uses SOGeoPhoneWsdlClass::saveLastError()
	 * @uses SOGeoPhoneTypeGetPhoneInfo::getPhoneNumber()
	 * @uses SOGeoPhoneTypeGetPhoneInfo::getLicenseKey()
	 * @param SOGeoPhoneTypeGetPhoneInfo GetPhoneInfo
	 * @return SOGeoPhoneTypeGetPhoneInfoResponse
	 */
	public function GetPhoneInfo(SOGeoPhoneTypeGetPhoneInfo $_SOGeoPhoneTypeGetPhoneInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPhoneInfo(array('PhoneNumber'=>$_SOGeoPhoneTypeGetPhoneInfo->getPhoneNumber(),'LicenseKey'=>$_SOGeoPhoneTypeGetPhoneInfo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPhoneInfoLastFirst
	 * Meta informations :
	 * 	- documentation : Returns reverse lookup information on a given phone number. This service returns residential contact names in the format: Lastname, Firstname.
	 * @uses SOGeoPhoneWsdlClass::getSoapClient()
	 * @uses SOGeoPhoneWsdlClass::setResult()
	 * @uses SOGeoPhoneWsdlClass::getResult()
	 * @uses SOGeoPhoneWsdlClass::saveLastError()
	 * @uses SOGeoPhoneTypeGetPhoneInfoLastFirst::getPhoneNumber()
	 * @uses SOGeoPhoneTypeGetPhoneInfoLastFirst::getLicenseKey()
	 * @param SOGeoPhoneTypeGetPhoneInfoLastFirst GetPhoneInfoLastFirst
	 * @return SOGeoPhoneTypeGetPhoneInfoLastFirstResponse
	 */
	public function GetPhoneInfoLastFirst(SOGeoPhoneTypeGetPhoneInfoLastFirst $_SOGeoPhoneTypeGetPhoneInfoLastFirst)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPhoneInfoLastFirst(array('PhoneNumber'=>$_SOGeoPhoneTypeGetPhoneInfoLastFirst->getPhoneNumber(),'LicenseKey'=>$_SOGeoPhoneTypeGetPhoneInfoLastFirst->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchangeInfo
	 * Meta informations :
	 * 	- documentation : Returns the geographic location and carrier of any phone number in the US.
	 * @uses SOGeoPhoneWsdlClass::getSoapClient()
	 * @uses SOGeoPhoneWsdlClass::setResult()
	 * @uses SOGeoPhoneWsdlClass::getResult()
	 * @uses SOGeoPhoneWsdlClass::saveLastError()
	 * @uses SOGeoPhoneTypeGetExchangeInfo::getPhoneNumber()
	 * @uses SOGeoPhoneTypeGetExchangeInfo::getLicenseKey()
	 * @param SOGeoPhoneTypeGetExchangeInfo GetExchangeInfo
	 * @return SOGeoPhoneTypeGetExchangeInfoResponse
	 */
	public function GetExchangeInfo(SOGeoPhoneTypeGetExchangeInfo $_SOGeoPhoneTypeGetExchangeInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeInfo(array('PhoneNumber'=>$_SOGeoPhoneTypeGetExchangeInfo->getPhoneNumber(),'LicenseKey'=>$_SOGeoPhoneTypeGetExchangeInfo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetContactInfo
	 * Meta informations :
	 * 	- documentation : Returns the business or person registered to phone number in the US.
	 * @uses SOGeoPhoneWsdlClass::getSoapClient()
	 * @uses SOGeoPhoneWsdlClass::setResult()
	 * @uses SOGeoPhoneWsdlClass::getResult()
	 * @uses SOGeoPhoneWsdlClass::saveLastError()
	 * @uses SOGeoPhoneTypeGetContactInfo::getPhoneNumber()
	 * @uses SOGeoPhoneTypeGetContactInfo::getLicenseKey()
	 * @param SOGeoPhoneTypeGetContactInfo GetContactInfo
	 * @return SOGeoPhoneTypeGetContactInfoResponse
	 */
	public function GetContactInfo(SOGeoPhoneTypeGetContactInfo $_SOGeoPhoneTypeGetContactInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetContactInfo(array('PhoneNumber'=>$_SOGeoPhoneTypeGetContactInfo->getPhoneNumber(),'LicenseKey'=>$_SOGeoPhoneTypeGetContactInfo->getLicenseKey())));
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
	 * @return SOGeoPhoneTypeGetContactInfoResponse
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