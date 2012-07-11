<?php
/**
 * Class file for SOGeoPhoneWirelessServiceValidate
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneWirelessServiceValidate
 * @date 08/07/2012
 */
class SOGeoPhoneWirelessServiceValidate extends SOGeoPhoneWirelessWsdlClass
{
	/**
	 * Method to call ValidateNumber
	 * Meta informations :
	 * 	- documentation : Returns contact information for a wireless number.
	 * @uses SOGeoPhoneWirelessWsdlClass::getSoapClient()
	 * @uses SOGeoPhoneWirelessWsdlClass::setResult()
	 * @uses SOGeoPhoneWirelessWsdlClass::getResult()
	 * @uses SOGeoPhoneWirelessWsdlClass::saveLastError()
	 * @uses SOGeoPhoneWirelessTypeValidateNumber::getPhoneNumber()
	 * @uses SOGeoPhoneWirelessTypeValidateNumber::getLicenseKey()
	 * @param SOGeoPhoneWirelessTypeValidateNumber ValidateNumber
	 * @return SOGeoPhoneWirelessTypeValidateNumberResponse
	 */
	public function ValidateNumber(SOGeoPhoneWirelessTypeValidateNumber $_SOGeoPhoneWirelessTypeValidateNumber)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateNumber(array('PhoneNumber'=>$_SOGeoPhoneWirelessTypeValidateNumber->getPhoneNumber(),'LicenseKey'=>$_SOGeoPhoneWirelessTypeValidateNumber->getLicenseKey())));
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
	 * @return SOGeoPhoneWirelessTypeValidateNumberResponse
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