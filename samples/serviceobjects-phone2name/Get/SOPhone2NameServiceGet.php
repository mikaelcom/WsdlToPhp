<?php
/**
 * Class file for SOPhone2NameServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOPhone2NameServiceGet
 * @date 08/07/2012
 */
class SOPhone2NameServiceGet extends SOPhone2NameWsdlClass
{
	/**
	 * Method to call GetNameFromPhone
	 * Meta informations :
	 * 	- documentation : Returns a name from a phone number.
	 * @uses SOPhone2NameWsdlClass::getSoapClient()
	 * @uses SOPhone2NameWsdlClass::setResult()
	 * @uses SOPhone2NameWsdlClass::getResult()
	 * @uses SOPhone2NameWsdlClass::saveLastError()
	 * @uses SOPhone2NameTypeGetNameFromPhone::getPhoneNumber()
	 * @uses SOPhone2NameTypeGetNameFromPhone::getLicenseKey()
	 * @param SOPhone2NameTypeGetNameFromPhone GetNameFromPhone
	 * @return SOPhone2NameTypeGetNameFromPhoneResponse
	 */
	public function GetNameFromPhone(SOPhone2NameTypeGetNameFromPhone $_SOPhone2NameTypeGetNameFromPhone)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNameFromPhone(array('PhoneNumber'=>$_SOPhone2NameTypeGetNameFromPhone->getPhoneNumber(),'LicenseKey'=>$_SOPhone2NameTypeGetNameFromPhone->getLicenseKey())));
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
	 * @return SOPhone2NameTypeGetNameFromPhoneResponse
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