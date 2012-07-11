<?php
/**
 * Class file for SOFraudProtectionServiceValidate
 * @date 08/07/2012
 */
/**
 * Class SOFraudProtectionServiceValidate
 * @date 08/07/2012
 */
class SOFraudProtectionServiceValidate extends SOFraudProtectionWsdlClass
{
	/**
	 * Method to call ValidateForm
	 * Meta informations :
	 * 	- documentation : Validates common input forms and returns a score which indicates likelihood of false information.
	 * @uses SOFraudProtectionWsdlClass::getSoapClient()
	 * @uses SOFraudProtectionWsdlClass::setResult()
	 * @uses SOFraudProtectionWsdlClass::getResult()
	 * @uses SOFraudProtectionWsdlClass::saveLastError()
	 * @uses SOFraudProtectionTypeValidateForm::getName()
	 * @uses SOFraudProtectionTypeValidateForm::getEmail()
	 * @uses SOFraudProtectionTypeValidateForm::getPhoneNumber()
	 * @uses SOFraudProtectionTypeValidateForm::getAddress()
	 * @uses SOFraudProtectionTypeValidateForm::getAddress2()
	 * @uses SOFraudProtectionTypeValidateForm::getCity()
	 * @uses SOFraudProtectionTypeValidateForm::getState()
	 * @uses SOFraudProtectionTypeValidateForm::getPostalCode()
	 * @uses SOFraudProtectionTypeValidateForm::getIPAddress()
	 * @uses SOFraudProtectionTypeValidateForm::getLicenseKey()
	 * @param SOFraudProtectionTypeValidateForm ValidateForm
	 * @return SOFraudProtectionTypeValidateFormResponse
	 */
	public function ValidateForm(SOFraudProtectionTypeValidateForm $_SOFraudProtectionTypeValidateForm)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateForm(array('Name'=>$_SOFraudProtectionTypeValidateForm->getName(),'Email'=>$_SOFraudProtectionTypeValidateForm->getEmail(),'PhoneNumber'=>$_SOFraudProtectionTypeValidateForm->getPhoneNumber(),'Address'=>$_SOFraudProtectionTypeValidateForm->getAddress(),'Address2'=>$_SOFraudProtectionTypeValidateForm->getAddress2(),'City'=>$_SOFraudProtectionTypeValidateForm->getCity(),'State'=>$_SOFraudProtectionTypeValidateForm->getState(),'PostalCode'=>$_SOFraudProtectionTypeValidateForm->getPostalCode(),'IPAddress'=>$_SOFraudProtectionTypeValidateForm->getIPAddress(),'LicenseKey'=>$_SOFraudProtectionTypeValidateForm->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateFormNoSMTP
	 * Meta informations :
	 * 	- documentation : Validates common input forms and returns a score which indicates likelihood of false information. Does not make the time consuming SMTP email validation check.
	 * @uses SOFraudProtectionWsdlClass::getSoapClient()
	 * @uses SOFraudProtectionWsdlClass::setResult()
	 * @uses SOFraudProtectionWsdlClass::getResult()
	 * @uses SOFraudProtectionWsdlClass::saveLastError()
	 * @uses SOFraudProtectionTypeValidateFormNoSMTP::getName()
	 * @uses SOFraudProtectionTypeValidateFormNoSMTP::getEmail()
	 * @uses SOFraudProtectionTypeValidateFormNoSMTP::getPhoneNumber()
	 * @uses SOFraudProtectionTypeValidateFormNoSMTP::getAddress()
	 * @uses SOFraudProtectionTypeValidateFormNoSMTP::getAddress2()
	 * @uses SOFraudProtectionTypeValidateFormNoSMTP::getCity()
	 * @uses SOFraudProtectionTypeValidateFormNoSMTP::getState()
	 * @uses SOFraudProtectionTypeValidateFormNoSMTP::getPostalCode()
	 * @uses SOFraudProtectionTypeValidateFormNoSMTP::getIPAddress()
	 * @uses SOFraudProtectionTypeValidateFormNoSMTP::getLicenseKey()
	 * @param SOFraudProtectionTypeValidateFormNoSMTP ValidateFormNoSMTP
	 * @return SOFraudProtectionTypeValidateFormNoSMTPResponse
	 */
	public function ValidateFormNoSMTP(SOFraudProtectionTypeValidateFormNoSMTP $_SOFraudProtectionTypeValidateFormNoSMTP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateFormNoSMTP(array('Name'=>$_SOFraudProtectionTypeValidateFormNoSMTP->getName(),'Email'=>$_SOFraudProtectionTypeValidateFormNoSMTP->getEmail(),'PhoneNumber'=>$_SOFraudProtectionTypeValidateFormNoSMTP->getPhoneNumber(),'Address'=>$_SOFraudProtectionTypeValidateFormNoSMTP->getAddress(),'Address2'=>$_SOFraudProtectionTypeValidateFormNoSMTP->getAddress2(),'City'=>$_SOFraudProtectionTypeValidateFormNoSMTP->getCity(),'State'=>$_SOFraudProtectionTypeValidateFormNoSMTP->getState(),'PostalCode'=>$_SOFraudProtectionTypeValidateFormNoSMTP->getPostalCode(),'IPAddress'=>$_SOFraudProtectionTypeValidateFormNoSMTP->getIPAddress(),'LicenseKey'=>$_SOFraudProtectionTypeValidateFormNoSMTP->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateFormAllOptional
	 * Meta informations :
	 * 	- documentation : Validates common input forms and returns a score which indicates likelihood of false information. All fields are optional, missing fields do not lower the score.
	 * @uses SOFraudProtectionWsdlClass::getSoapClient()
	 * @uses SOFraudProtectionWsdlClass::setResult()
	 * @uses SOFraudProtectionWsdlClass::getResult()
	 * @uses SOFraudProtectionWsdlClass::saveLastError()
	 * @uses SOFraudProtectionTypeValidateFormAllOptional::getName()
	 * @uses SOFraudProtectionTypeValidateFormAllOptional::getEmail()
	 * @uses SOFraudProtectionTypeValidateFormAllOptional::getPhoneNumber()
	 * @uses SOFraudProtectionTypeValidateFormAllOptional::getAddress()
	 * @uses SOFraudProtectionTypeValidateFormAllOptional::getAddress2()
	 * @uses SOFraudProtectionTypeValidateFormAllOptional::getCity()
	 * @uses SOFraudProtectionTypeValidateFormAllOptional::getState()
	 * @uses SOFraudProtectionTypeValidateFormAllOptional::getPostalCode()
	 * @uses SOFraudProtectionTypeValidateFormAllOptional::getIPAddress()
	 * @uses SOFraudProtectionTypeValidateFormAllOptional::getLicenseKey()
	 * @param SOFraudProtectionTypeValidateFormAllOptional ValidateFormAllOptional
	 * @return SOFraudProtectionTypeValidateFormAllOptionalResponse
	 */
	public function ValidateFormAllOptional(SOFraudProtectionTypeValidateFormAllOptional $_SOFraudProtectionTypeValidateFormAllOptional)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateFormAllOptional(array('Name'=>$_SOFraudProtectionTypeValidateFormAllOptional->getName(),'Email'=>$_SOFraudProtectionTypeValidateFormAllOptional->getEmail(),'PhoneNumber'=>$_SOFraudProtectionTypeValidateFormAllOptional->getPhoneNumber(),'Address'=>$_SOFraudProtectionTypeValidateFormAllOptional->getAddress(),'Address2'=>$_SOFraudProtectionTypeValidateFormAllOptional->getAddress2(),'City'=>$_SOFraudProtectionTypeValidateFormAllOptional->getCity(),'State'=>$_SOFraudProtectionTypeValidateFormAllOptional->getState(),'PostalCode'=>$_SOFraudProtectionTypeValidateFormAllOptional->getPostalCode(),'IPAddress'=>$_SOFraudProtectionTypeValidateFormAllOptional->getIPAddress(),'LicenseKey'=>$_SOFraudProtectionTypeValidateFormAllOptional->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateFormAllOptionalNoSMTP
	 * Meta informations :
	 * 	- documentation : Validates common input forms and returns a score which indicates likelihood of false information. Does not make the time consuming SMTP email validation check. All fields are optional, missing fields do not lower the score.
	 * @uses SOFraudProtectionWsdlClass::getSoapClient()
	 * @uses SOFraudProtectionWsdlClass::setResult()
	 * @uses SOFraudProtectionWsdlClass::getResult()
	 * @uses SOFraudProtectionWsdlClass::saveLastError()
	 * @uses SOFraudProtectionTypeValidateFormAllOptionalNoSMTP::getName()
	 * @uses SOFraudProtectionTypeValidateFormAllOptionalNoSMTP::getEmail()
	 * @uses SOFraudProtectionTypeValidateFormAllOptionalNoSMTP::getPhoneNumber()
	 * @uses SOFraudProtectionTypeValidateFormAllOptionalNoSMTP::getAddress()
	 * @uses SOFraudProtectionTypeValidateFormAllOptionalNoSMTP::getAddress2()
	 * @uses SOFraudProtectionTypeValidateFormAllOptionalNoSMTP::getCity()
	 * @uses SOFraudProtectionTypeValidateFormAllOptionalNoSMTP::getState()
	 * @uses SOFraudProtectionTypeValidateFormAllOptionalNoSMTP::getPostalCode()
	 * @uses SOFraudProtectionTypeValidateFormAllOptionalNoSMTP::getIPAddress()
	 * @uses SOFraudProtectionTypeValidateFormAllOptionalNoSMTP::getLicenseKey()
	 * @param SOFraudProtectionTypeValidateFormAllOptionalNoSMTP ValidateFormAllOptionalNoSMTP
	 * @return SOFraudProtectionTypeValidateFormAllOptionalNoSMTPResponse
	 */
	public function ValidateFormAllOptionalNoSMTP(SOFraudProtectionTypeValidateFormAllOptionalNoSMTP $_SOFraudProtectionTypeValidateFormAllOptionalNoSMTP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateFormAllOptionalNoSMTP(array('Name'=>$_SOFraudProtectionTypeValidateFormAllOptionalNoSMTP->getName(),'Email'=>$_SOFraudProtectionTypeValidateFormAllOptionalNoSMTP->getEmail(),'PhoneNumber'=>$_SOFraudProtectionTypeValidateFormAllOptionalNoSMTP->getPhoneNumber(),'Address'=>$_SOFraudProtectionTypeValidateFormAllOptionalNoSMTP->getAddress(),'Address2'=>$_SOFraudProtectionTypeValidateFormAllOptionalNoSMTP->getAddress2(),'City'=>$_SOFraudProtectionTypeValidateFormAllOptionalNoSMTP->getCity(),'State'=>$_SOFraudProtectionTypeValidateFormAllOptionalNoSMTP->getState(),'PostalCode'=>$_SOFraudProtectionTypeValidateFormAllOptionalNoSMTP->getPostalCode(),'IPAddress'=>$_SOFraudProtectionTypeValidateFormAllOptionalNoSMTP->getIPAddress(),'LicenseKey'=>$_SOFraudProtectionTypeValidateFormAllOptionalNoSMTP->getLicenseKey())));
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
	 * @return SOFraudProtectionTypeValidateFormAllOptionalNoSMTPResponse
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