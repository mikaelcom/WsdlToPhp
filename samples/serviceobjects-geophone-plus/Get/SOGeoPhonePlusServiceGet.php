<?php
/**
 * Class file for SOGeoPhonePlusServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhonePlusServiceGet
 * @date 08/07/2012
 */
class SOGeoPhonePlusServiceGet extends SOGeoPhonePlusWsdlClass
{
	/**
	 * Method to call GetPhoneInfo
	 * Meta informations :
	 * 	- documentation : This service is a complete solution for all phone numbers: Landlines, Wireless and Tollfree.
	 * @uses SOGeoPhonePlusWsdlClass::getSoapClient()
	 * @uses SOGeoPhonePlusWsdlClass::setResult()
	 * @uses SOGeoPhonePlusWsdlClass::getResult()
	 * @uses SOGeoPhonePlusWsdlClass::saveLastError()
	 * @uses SOGeoPhonePlusTypeGetPhoneInfo::getPhoneNumber()
	 * @uses SOGeoPhonePlusTypeGetPhoneInfo::getTestType()
	 * @uses SOGeoPhonePlusTypeGetPhoneInfo::getLicenseKey()
	 * @param SOGeoPhonePlusTypeGetPhoneInfo GetPhoneInfo
	 * @return SOGeoPhonePlusTypeGetPhoneInfoResponse
	 */
	public function GetPhoneInfo(SOGeoPhonePlusTypeGetPhoneInfo $_SOGeoPhonePlusTypeGetPhoneInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPhoneInfo(array('PhoneNumber'=>$_SOGeoPhonePlusTypeGetPhoneInfo->getPhoneNumber(),'TestType'=>$_SOGeoPhonePlusTypeGetPhoneInfo->getTestType(),'LicenseKey'=>$_SOGeoPhonePlusTypeGetPhoneInfo->getLicenseKey())));
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
	 * @return SOGeoPhonePlusTypeGetPhoneInfoResponse
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