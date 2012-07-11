<?php
/**
 * Class file for SOEmailValidationServiceValidate
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationServiceValidate
 * @date 08/07/2012
 */
class SOEmailValidationServiceValidate extends SOEmailValidationWsdlClass
{
	/**
	 * Method to call ValidateEmailFastNoNames
	 * Meta informations :
	 * 	- documentation : Validates an email address using looser SMTP checking methods. Does not return possible names.
	 * @uses SOEmailValidationWsdlClass::getSoapClient()
	 * @uses SOEmailValidationWsdlClass::setResult()
	 * @uses SOEmailValidationWsdlClass::getResult()
	 * @uses SOEmailValidationWsdlClass::saveLastError()
	 * @uses SOEmailValidationTypeValidateEmailFastNoNames::getEmailAddress()
	 * @uses SOEmailValidationTypeValidateEmailFastNoNames::getLicenseKey()
	 * @param SOEmailValidationTypeValidateEmailFastNoNames ValidateEmailFastNoNames
	 * @return SOEmailValidationTypeValidateEmailFastNoNamesResponse
	 */
	public function ValidateEmailFastNoNames(SOEmailValidationTypeValidateEmailFastNoNames $_SOEmailValidationTypeValidateEmailFastNoNames)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateEmailFastNoNames(array('EmailAddress'=>$_SOEmailValidationTypeValidateEmailFastNoNames->getEmailAddress(),'LicenseKey'=>$_SOEmailValidationTypeValidateEmailFastNoNames->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateEmailFast
	 * Meta informations :
	 * 	- documentation : Validates an email address using looser SMTP checking methods.
	 * @uses SOEmailValidationWsdlClass::getSoapClient()
	 * @uses SOEmailValidationWsdlClass::setResult()
	 * @uses SOEmailValidationWsdlClass::getResult()
	 * @uses SOEmailValidationWsdlClass::saveLastError()
	 * @uses SOEmailValidationTypeValidateEmailFast::getEmailAddress()
	 * @uses SOEmailValidationTypeValidateEmailFast::getLicenseKey()
	 * @param SOEmailValidationTypeValidateEmailFast ValidateEmailFast
	 * @return SOEmailValidationTypeValidateEmailFastResponse
	 */
	public function ValidateEmailFast(SOEmailValidationTypeValidateEmailFast $_SOEmailValidationTypeValidateEmailFast)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateEmailFast(array('EmailAddress'=>$_SOEmailValidationTypeValidateEmailFast->getEmailAddress(),'LicenseKey'=>$_SOEmailValidationTypeValidateEmailFast->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateEmailFull
	 * Meta informations :
	 * 	- documentation : Validates an email address using stricter SMTP checking methods.
	 * @uses SOEmailValidationWsdlClass::getSoapClient()
	 * @uses SOEmailValidationWsdlClass::setResult()
	 * @uses SOEmailValidationWsdlClass::getResult()
	 * @uses SOEmailValidationWsdlClass::saveLastError()
	 * @uses SOEmailValidationTypeValidateEmailFull::getEmailAddress()
	 * @uses SOEmailValidationTypeValidateEmailFull::getLicenseKey()
	 * @param SOEmailValidationTypeValidateEmailFull ValidateEmailFull
	 * @return SOEmailValidationTypeValidateEmailFullResponse
	 */
	public function ValidateEmailFull(SOEmailValidationTypeValidateEmailFull $_SOEmailValidationTypeValidateEmailFull)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateEmailFull(array('EmailAddress'=>$_SOEmailValidationTypeValidateEmailFull->getEmailAddress(),'LicenseKey'=>$_SOEmailValidationTypeValidateEmailFull->getLicenseKey())));
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
	 * @return SOEmailValidationTypeValidateEmailFullResponse
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