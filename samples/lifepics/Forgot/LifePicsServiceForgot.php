<?php
/**
 * Class file for LifePicsServiceForgot
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceForgot
 * @date 02/08/2012
 */
class LifePicsServiceForgot extends LifePicsWsdlClass
{
	/**
	 * Method to call ForgotPassword
	 * Meta informations :
	 * 	- documentation : Used to send a user their password via email
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeForgotPassword::getSessionID()
	 * @uses LifePicsTypeForgotPassword::getEmailAddress()
	 * @param LifePicsTypeForgotPassword ForgotPassword
	 * @return LifePicsTypeForgotPasswordResponse
	 */
	public function ForgotPassword(LifePicsTypeForgotPassword $_LifePicsTypeForgotPassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ForgotPassword(array('SessionID'=>$_LifePicsTypeForgotPassword->getSessionID(),'EmailAddress'=>$_LifePicsTypeForgotPassword->getEmailAddress())));
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
	 * @return LifePicsTypeForgotPasswordResponse
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