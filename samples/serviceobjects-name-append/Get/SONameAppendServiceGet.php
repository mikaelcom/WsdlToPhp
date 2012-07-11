<?php
/**
 * Class file for SONameAppendServiceGet
 * @date 08/07/2012
 */
/**
 * Class SONameAppendServiceGet
 * @date 08/07/2012
 */
class SONameAppendServiceGet extends SONameAppendWsdlClass
{
	/**
	 * Method to call GetNameFromEmail
	 * Meta informations :
	 * 	- documentation : Returns any possible name information from the given email address.
	 * @uses SONameAppendWsdlClass::getSoapClient()
	 * @uses SONameAppendWsdlClass::setResult()
	 * @uses SONameAppendWsdlClass::getResult()
	 * @uses SONameAppendWsdlClass::saveLastError()
	 * @uses SONameAppendTypeGetNameFromEmail::getEmail()
	 * @uses SONameAppendTypeGetNameFromEmail::getLicenseKey()
	 * @param SONameAppendTypeGetNameFromEmail GetNameFromEmail
	 * @return SONameAppendTypeGetNameFromEmailResponse
	 */
	public function GetNameFromEmail(SONameAppendTypeGetNameFromEmail $_SONameAppendTypeGetNameFromEmail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNameFromEmail(array('Email'=>$_SONameAppendTypeGetNameFromEmail->getEmail(),'LicenseKey'=>$_SONameAppendTypeGetNameFromEmail->getLicenseKey())));
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
	 * @return SONameAppendTypeGetNameFromEmailResponse
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