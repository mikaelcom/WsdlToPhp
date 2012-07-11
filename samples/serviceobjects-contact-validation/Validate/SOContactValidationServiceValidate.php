<?php
/**
 * Class file for SOContactValidationServiceValidate
 * @date 08/07/2012
 */
/**
 * Class SOContactValidationServiceValidate
 * @date 08/07/2012
 */
class SOContactValidationServiceValidate extends SOContactValidationWsdlClass
{
	/**
	 * Method to call ValidateContact
	 * Meta informations :
	 * 	- documentation : Validation of contact information to determine the likelihood of false information, also returns possible alternatives for false information.
	 * @uses SOContactValidationWsdlClass::getSoapClient()
	 * @uses SOContactValidationWsdlClass::setResult()
	 * @uses SOContactValidationWsdlClass::getResult()
	 * @uses SOContactValidationWsdlClass::saveLastError()
	 * @uses SOContactValidationTypeValidateContact::getName()
	 * @uses SOContactValidationTypeValidateContact::getEmail()
	 * @uses SOContactValidationTypeValidateContact::getPhoneNumber()
	 * @uses SOContactValidationTypeValidateContact::getAddress()
	 * @uses SOContactValidationTypeValidateContact::getAddress2()
	 * @uses SOContactValidationTypeValidateContact::getCity()
	 * @uses SOContactValidationTypeValidateContact::getState()
	 * @uses SOContactValidationTypeValidateContact::getPostalCode()
	 * @uses SOContactValidationTypeValidateContact::getIPAddress()
	 * @uses SOContactValidationTypeValidateContact::getLicenseKey()
	 * @param SOContactValidationTypeValidateContact ValidateContact
	 * @return SOContactValidationTypeValidateContactResponse
	 */
	public function ValidateContact(SOContactValidationTypeValidateContact $_SOContactValidationTypeValidateContact)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateContact(array('Name'=>$_SOContactValidationTypeValidateContact->getName(),'Email'=>$_SOContactValidationTypeValidateContact->getEmail(),'PhoneNumber'=>$_SOContactValidationTypeValidateContact->getPhoneNumber(),'Address'=>$_SOContactValidationTypeValidateContact->getAddress(),'Address2'=>$_SOContactValidationTypeValidateContact->getAddress2(),'City'=>$_SOContactValidationTypeValidateContact->getCity(),'State'=>$_SOContactValidationTypeValidateContact->getState(),'PostalCode'=>$_SOContactValidationTypeValidateContact->getPostalCode(),'IPAddress'=>$_SOContactValidationTypeValidateContact->getIPAddress(),'LicenseKey'=>$_SOContactValidationTypeValidateContact->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateContactNoEmailCheck
	 * Meta informations :
	 * 	- documentation : Validation of contact information to determine the likelihood of false information, also returns possible alternatives for false information. Does not do any email checks at all.
	 * @uses SOContactValidationWsdlClass::getSoapClient()
	 * @uses SOContactValidationWsdlClass::setResult()
	 * @uses SOContactValidationWsdlClass::getResult()
	 * @uses SOContactValidationWsdlClass::saveLastError()
	 * @uses SOContactValidationTypeValidateContactNoEmailCheck::getName()
	 * @uses SOContactValidationTypeValidateContactNoEmailCheck::getPhoneNumber()
	 * @uses SOContactValidationTypeValidateContactNoEmailCheck::getAddress()
	 * @uses SOContactValidationTypeValidateContactNoEmailCheck::getAddress2()
	 * @uses SOContactValidationTypeValidateContactNoEmailCheck::getCity()
	 * @uses SOContactValidationTypeValidateContactNoEmailCheck::getState()
	 * @uses SOContactValidationTypeValidateContactNoEmailCheck::getPostalCode()
	 * @uses SOContactValidationTypeValidateContactNoEmailCheck::getIPAddress()
	 * @uses SOContactValidationTypeValidateContactNoEmailCheck::getLicenseKey()
	 * @param SOContactValidationTypeValidateContactNoEmailCheck ValidateContactNoEmailCheck
	 * @return SOContactValidationTypeValidateContactNoEmailCheckResponse
	 */
	public function ValidateContactNoEmailCheck(SOContactValidationTypeValidateContactNoEmailCheck $_SOContactValidationTypeValidateContactNoEmailCheck)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateContactNoEmailCheck(array('Name'=>$_SOContactValidationTypeValidateContactNoEmailCheck->getName(),'PhoneNumber'=>$_SOContactValidationTypeValidateContactNoEmailCheck->getPhoneNumber(),'Address'=>$_SOContactValidationTypeValidateContactNoEmailCheck->getAddress(),'Address2'=>$_SOContactValidationTypeValidateContactNoEmailCheck->getAddress2(),'City'=>$_SOContactValidationTypeValidateContactNoEmailCheck->getCity(),'State'=>$_SOContactValidationTypeValidateContactNoEmailCheck->getState(),'PostalCode'=>$_SOContactValidationTypeValidateContactNoEmailCheck->getPostalCode(),'IPAddress'=>$_SOContactValidationTypeValidateContactNoEmailCheck->getIPAddress(),'LicenseKey'=>$_SOContactValidationTypeValidateContactNoEmailCheck->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateContactNoNameToEmailCheck
	 * Meta informations :
	 * 	- documentation : Validation of contact information to determine the likelihood of false information, also returns possible alternatives for false information. Does not compare the contacts name to the given email.
	 * @uses SOContactValidationWsdlClass::getSoapClient()
	 * @uses SOContactValidationWsdlClass::setResult()
	 * @uses SOContactValidationWsdlClass::getResult()
	 * @uses SOContactValidationWsdlClass::saveLastError()
	 * @uses SOContactValidationTypeValidateContactNoNameToEmailCheck::getName()
	 * @uses SOContactValidationTypeValidateContactNoNameToEmailCheck::getEmail()
	 * @uses SOContactValidationTypeValidateContactNoNameToEmailCheck::getPhoneNumber()
	 * @uses SOContactValidationTypeValidateContactNoNameToEmailCheck::getAddress()
	 * @uses SOContactValidationTypeValidateContactNoNameToEmailCheck::getAddress2()
	 * @uses SOContactValidationTypeValidateContactNoNameToEmailCheck::getCity()
	 * @uses SOContactValidationTypeValidateContactNoNameToEmailCheck::getState()
	 * @uses SOContactValidationTypeValidateContactNoNameToEmailCheck::getPostalCode()
	 * @uses SOContactValidationTypeValidateContactNoNameToEmailCheck::getIPAddress()
	 * @uses SOContactValidationTypeValidateContactNoNameToEmailCheck::getLicenseKey()
	 * @param SOContactValidationTypeValidateContactNoNameToEmailCheck ValidateContactNoNameToEmailCheck
	 * @return SOContactValidationTypeValidateContactNoNameToEmailCheckResponse
	 */
	public function ValidateContactNoNameToEmailCheck(SOContactValidationTypeValidateContactNoNameToEmailCheck $_SOContactValidationTypeValidateContactNoNameToEmailCheck)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateContactNoNameToEmailCheck(array('Name'=>$_SOContactValidationTypeValidateContactNoNameToEmailCheck->getName(),'Email'=>$_SOContactValidationTypeValidateContactNoNameToEmailCheck->getEmail(),'PhoneNumber'=>$_SOContactValidationTypeValidateContactNoNameToEmailCheck->getPhoneNumber(),'Address'=>$_SOContactValidationTypeValidateContactNoNameToEmailCheck->getAddress(),'Address2'=>$_SOContactValidationTypeValidateContactNoNameToEmailCheck->getAddress2(),'City'=>$_SOContactValidationTypeValidateContactNoNameToEmailCheck->getCity(),'State'=>$_SOContactValidationTypeValidateContactNoNameToEmailCheck->getState(),'PostalCode'=>$_SOContactValidationTypeValidateContactNoNameToEmailCheck->getPostalCode(),'IPAddress'=>$_SOContactValidationTypeValidateContactNoNameToEmailCheck->getIPAddress(),'LicenseKey'=>$_SOContactValidationTypeValidateContactNoNameToEmailCheck->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateContactLite
	 * Meta informations :
	 * 	- documentation : Validation of contact information to determine the likelihood of false information. This service is faster than ValidateContact, but it does not check for possible alternative information.
	 * @uses SOContactValidationWsdlClass::getSoapClient()
	 * @uses SOContactValidationWsdlClass::setResult()
	 * @uses SOContactValidationWsdlClass::getResult()
	 * @uses SOContactValidationWsdlClass::saveLastError()
	 * @uses SOContactValidationTypeValidateContactLite::getName()
	 * @uses SOContactValidationTypeValidateContactLite::getEmail()
	 * @uses SOContactValidationTypeValidateContactLite::getPhoneNumber()
	 * @uses SOContactValidationTypeValidateContactLite::getAddress()
	 * @uses SOContactValidationTypeValidateContactLite::getAddress2()
	 * @uses SOContactValidationTypeValidateContactLite::getCity()
	 * @uses SOContactValidationTypeValidateContactLite::getState()
	 * @uses SOContactValidationTypeValidateContactLite::getPostalCode()
	 * @uses SOContactValidationTypeValidateContactLite::getIPAddress()
	 * @uses SOContactValidationTypeValidateContactLite::getLicenseKey()
	 * @param SOContactValidationTypeValidateContactLite ValidateContactLite
	 * @return SOContactValidationTypeValidateContactLiteResponse
	 */
	public function ValidateContactLite(SOContactValidationTypeValidateContactLite $_SOContactValidationTypeValidateContactLite)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateContactLite(array('Name'=>$_SOContactValidationTypeValidateContactLite->getName(),'Email'=>$_SOContactValidationTypeValidateContactLite->getEmail(),'PhoneNumber'=>$_SOContactValidationTypeValidateContactLite->getPhoneNumber(),'Address'=>$_SOContactValidationTypeValidateContactLite->getAddress(),'Address2'=>$_SOContactValidationTypeValidateContactLite->getAddress2(),'City'=>$_SOContactValidationTypeValidateContactLite->getCity(),'State'=>$_SOContactValidationTypeValidateContactLite->getState(),'PostalCode'=>$_SOContactValidationTypeValidateContactLite->getPostalCode(),'IPAddress'=>$_SOContactValidationTypeValidateContactLite->getIPAddress(),'LicenseKey'=>$_SOContactValidationTypeValidateContactLite->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateContactLiteExtraPhone
	 * Meta informations :
	 * 	- documentation : Validation of contact information to determine the likelihood of false information. This service is faster than ValidateContact, but it does not check for possible alternative information. It also allows check on two phone numbers, with the best result being scored.
	 * @uses SOContactValidationWsdlClass::getSoapClient()
	 * @uses SOContactValidationWsdlClass::setResult()
	 * @uses SOContactValidationWsdlClass::getResult()
	 * @uses SOContactValidationWsdlClass::saveLastError()
	 * @uses SOContactValidationTypeValidateContactLiteExtraPhone::getName()
	 * @uses SOContactValidationTypeValidateContactLiteExtraPhone::getEmail()
	 * @uses SOContactValidationTypeValidateContactLiteExtraPhone::getPhoneNumber()
	 * @uses SOContactValidationTypeValidateContactLiteExtraPhone::getPhoneNumber2()
	 * @uses SOContactValidationTypeValidateContactLiteExtraPhone::getAddress()
	 * @uses SOContactValidationTypeValidateContactLiteExtraPhone::getAddress2()
	 * @uses SOContactValidationTypeValidateContactLiteExtraPhone::getCity()
	 * @uses SOContactValidationTypeValidateContactLiteExtraPhone::getState()
	 * @uses SOContactValidationTypeValidateContactLiteExtraPhone::getPostalCode()
	 * @uses SOContactValidationTypeValidateContactLiteExtraPhone::getIPAddress()
	 * @uses SOContactValidationTypeValidateContactLiteExtraPhone::getLicenseKey()
	 * @param SOContactValidationTypeValidateContactLiteExtraPhone ValidateContactLiteExtraPhone
	 * @return SOContactValidationTypeValidateContactLiteExtraPhoneResponse
	 */
	public function ValidateContactLiteExtraPhone(SOContactValidationTypeValidateContactLiteExtraPhone $_SOContactValidationTypeValidateContactLiteExtraPhone)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateContactLiteExtraPhone(array('Name'=>$_SOContactValidationTypeValidateContactLiteExtraPhone->getName(),'Email'=>$_SOContactValidationTypeValidateContactLiteExtraPhone->getEmail(),'PhoneNumber'=>$_SOContactValidationTypeValidateContactLiteExtraPhone->getPhoneNumber(),'PhoneNumber2'=>$_SOContactValidationTypeValidateContactLiteExtraPhone->getPhoneNumber2(),'Address'=>$_SOContactValidationTypeValidateContactLiteExtraPhone->getAddress(),'Address2'=>$_SOContactValidationTypeValidateContactLiteExtraPhone->getAddress2(),'City'=>$_SOContactValidationTypeValidateContactLiteExtraPhone->getCity(),'State'=>$_SOContactValidationTypeValidateContactLiteExtraPhone->getState(),'PostalCode'=>$_SOContactValidationTypeValidateContactLiteExtraPhone->getPostalCode(),'IPAddress'=>$_SOContactValidationTypeValidateContactLiteExtraPhone->getIPAddress(),'LicenseKey'=>$_SOContactValidationTypeValidateContactLiteExtraPhone->getLicenseKey())));
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
	 * @return SOContactValidationTypeValidateContactLiteExtraPhoneResponse
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