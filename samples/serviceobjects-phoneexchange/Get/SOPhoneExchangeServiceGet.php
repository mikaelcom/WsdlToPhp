<?php
/**
 * Class file for SOPhoneExchangeServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOPhoneExchangeServiceGet
 * @date 08/07/2012
 */
class SOPhoneExchangeServiceGet extends SOPhoneExchangeWsdlClass
{
	/**
	 * Method to call GetExchangeInfo
	 * Meta informations :
	 * 	- documentation : Returns the geographic location and carrier of any phone number in the US.
	 * @uses SOPhoneExchangeWsdlClass::getSoapClient()
	 * @uses SOPhoneExchangeWsdlClass::setResult()
	 * @uses SOPhoneExchangeWsdlClass::getResult()
	 * @uses SOPhoneExchangeWsdlClass::saveLastError()
	 * @uses SOPhoneExchangeTypeGetExchangeInfo::getPhoneNumbers()
	 * @uses SOPhoneExchangeTypeGetExchangeInfo::getLicenseKey()
	 * @param SOPhoneExchangeTypeGetExchangeInfo GetExchangeInfo
	 * @return SOPhoneExchangeTypeGetExchangeInfoResponse
	 */
	public function GetExchangeInfo(SOPhoneExchangeTypeGetExchangeInfo $_SOPhoneExchangeTypeGetExchangeInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeInfo(array('PhoneNumbers'=>$_SOPhoneExchangeTypeGetExchangeInfo->getPhoneNumbers(),'LicenseKey'=>$_SOPhoneExchangeTypeGetExchangeInfo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSMSInfo
	 * Meta informations :
	 * 	- documentation : Returns the geographic location and carrier of any phone number along with SMS contact information for wireless numbers.
	 * @uses SOPhoneExchangeWsdlClass::getSoapClient()
	 * @uses SOPhoneExchangeWsdlClass::setResult()
	 * @uses SOPhoneExchangeWsdlClass::getResult()
	 * @uses SOPhoneExchangeWsdlClass::saveLastError()
	 * @uses SOPhoneExchangeTypeGetSMSInfo::getPhoneNumbers()
	 * @uses SOPhoneExchangeTypeGetSMSInfo::getLicenseKey()
	 * @param SOPhoneExchangeTypeGetSMSInfo GetSMSInfo
	 * @return SOPhoneExchangeTypeGetSMSInfoResponse
	 */
	public function GetSMSInfo(SOPhoneExchangeTypeGetSMSInfo $_SOPhoneExchangeTypeGetSMSInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSMSInfo(array('PhoneNumbers'=>$_SOPhoneExchangeTypeGetSMSInfo->getPhoneNumbers(),'LicenseKey'=>$_SOPhoneExchangeTypeGetSMSInfo->getLicenseKey())));
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
	 * @return SOPhoneExchangeTypeGetSMSInfoResponse
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