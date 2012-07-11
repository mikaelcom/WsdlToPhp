<?php
/**
 * Class file for EccEmailValidateServiceValidate
 * @date 03/07/2012
 */
/**
 * Class EccEmailValidateServiceValidate
 * @date 03/07/2012
 */
class EccEmailValidateServiceValidate extends EccEmailValidateWsdlClass
{
	/**
	 * Method to call ValidateEmail
	 * Meta informations :
	 * 	- documentation : The email validate service is used to chat the user's mail server if his address is valid.
	 * @uses EccEmailValidateWsdlClass::getSoapClient()
	 * @uses EccEmailValidateWsdlClass::setResult()
	 * @uses EccEmailValidateWsdlClass::getResult()
	 * @uses EccEmailValidateWsdlClass::saveLastError()
	 * @uses EccEmailValidateTypeValidateEmail::getKeyID()
	 * @uses EccEmailValidateTypeValidateEmail::getDomainID()
	 * @uses EccEmailValidateTypeValidateEmail::getEmail()
	 * @param EccEmailValidateTypeValidateEmail ValidateEmail
	 * @return EccEmailValidateTypeValidateEmailResponse
	 */
	public function ValidateEmail(EccEmailValidateTypeValidateEmail $_EccEmailValidateTypeValidateEmail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateEmail(array('KeyID'=>$_EccEmailValidateTypeValidateEmail->getKeyID(),'DomainID'=>$_EccEmailValidateTypeValidateEmail->getDomainID(),'Email'=>$_EccEmailValidateTypeValidateEmail->getEmail())));
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
	 * @return EccEmailValidateTypeValidateEmailResponse
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