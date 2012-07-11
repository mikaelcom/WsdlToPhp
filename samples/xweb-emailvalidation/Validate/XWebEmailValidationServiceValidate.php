<?php
/**
 * Class file for XWebEmailValidationServiceValidate
 * @date 09/07/2012
 */
/**
 * Class XWebEmailValidationServiceValidate
 * @date 09/07/2012
 */
class XWebEmailValidationServiceValidate extends XWebEmailValidationWsdlClass
{
	/**
	 * Method to call ValidateEmail
	 * Meta informations :
	 * 	- documentation : Validates a specific Email address in real-time.
	 * @uses XWebEmailValidationWsdlClass::getSoapClient()
	 * @uses XWebEmailValidationWsdlClass::setResult()
	 * @uses XWebEmailValidationWsdlClass::getResult()
	 * @uses XWebEmailValidationWsdlClass::saveLastError()
	 * @uses XWebEmailValidationTypeValidateEmailRequest::getEmail()
	 * @param XWebEmailValidationTypeValidateEmailRequest ValidateEmailRequest
	 * @return XWebEmailValidationTypeValidateEmailResponse
	 */
	public function ValidateEmail(XWebEmailValidationTypeValidateEmailRequest $_XWebEmailValidationTypeValidateEmailRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateEmail(array('Email'=>$_XWebEmailValidationTypeValidateEmailRequest->getEmail())));
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
	 * @return XWebEmailValidationTypeValidateEmailResponse
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