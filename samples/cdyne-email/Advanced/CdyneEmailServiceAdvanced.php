<?php
/**
 * Class file for CdyneEmailServiceAdvanced
 * @date 02/07/2012
 */
/**
 * Class CdyneEmailServiceAdvanced
 * @date 02/07/2012
 */
class CdyneEmailServiceAdvanced extends CdyneEmailWsdlClass
{
	/**
	 * Method to call AdvancedVerifyEmail
	 * Meta informations :
	 * 	- documentation : This function will verify an email address and also includes the ability to timeout the verification process. The Verification can be slowed down by the email server being verified against. <b>Timeout is in seconds</b> Use a licensekey of 0 for testing <br> NOTE: A timeout error (7) does not mean an email will not go through. You should treat this as a good email address.
	 * @uses CdyneEmailWsdlClass::getSoapClient()
	 * @uses CdyneEmailWsdlClass::setResult()
	 * @uses CdyneEmailWsdlClass::getResult()
	 * @uses CdyneEmailWsdlClass::saveLastError()
	 * @uses CdyneEmailTypeAdvancedVerifyEmail::getEmail()
	 * @uses CdyneEmailTypeAdvancedVerifyEmail::getTimeout()
	 * @uses CdyneEmailTypeAdvancedVerifyEmail::getLicenseKey()
	 * @param CdyneEmailTypeAdvancedVerifyEmail AdvancedVerifyEmail
	 * @return CdyneEmailTypeAdvancedVerifyEmailResponse
	 */
	public function AdvancedVerifyEmail(CdyneEmailTypeAdvancedVerifyEmail $_CdyneEmailTypeAdvancedVerifyEmail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AdvancedVerifyEmail(array('email'=>$_CdyneEmailTypeAdvancedVerifyEmail->getEmail(),'timeout'=>$_CdyneEmailTypeAdvancedVerifyEmail->getTimeout(),'LicenseKey'=>$_CdyneEmailTypeAdvancedVerifyEmail->getLicenseKey())));
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
	 * @return CdyneEmailTypeAdvancedVerifyEmailResponse
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