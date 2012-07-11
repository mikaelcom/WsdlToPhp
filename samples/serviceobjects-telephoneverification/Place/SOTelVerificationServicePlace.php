<?php
/**
 * Class file for SOTelVerificationServicePlace
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationServicePlace
 * @date 08/07/2012
 */
class SOTelVerificationServicePlace extends SOTelVerificationWsdlClass
{
	/**
	 * Method to call PlaceCall
	 * Meta informations :
	 * 	- documentation : Places a call to a phone number and reads a verification code aloud.
	 * @uses SOTelVerificationWsdlClass::getSoapClient()
	 * @uses SOTelVerificationWsdlClass::setResult()
	 * @uses SOTelVerificationWsdlClass::getResult()
	 * @uses SOTelVerificationWsdlClass::saveLastError()
	 * @uses SOTelVerificationTypePlaceCall::getCountryCode()
	 * @uses SOTelVerificationTypePlaceCall::getPhoneNumber()
	 * @uses SOTelVerificationTypePlaceCall::getExtension()
	 * @uses SOTelVerificationTypePlaceCall::getExtensionPauseTime()
	 * @uses SOTelVerificationTypePlaceCall::getVerificationCode()
	 * @uses SOTelVerificationTypePlaceCall::getCallerID()
	 * @uses SOTelVerificationTypePlaceCall::getLanguage()
	 * @uses SOTelVerificationTypePlaceCall::getLicenseKey()
	 * @param SOTelVerificationTypePlaceCall PlaceCall
	 * @return SOTelVerificationTypePlaceCallResponse
	 */
	public function PlaceCall(SOTelVerificationTypePlaceCall $_SOTelVerificationTypePlaceCall)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PlaceCall(array('CountryCode'=>$_SOTelVerificationTypePlaceCall->getCountryCode(),'PhoneNumber'=>$_SOTelVerificationTypePlaceCall->getPhoneNumber(),'Extension'=>$_SOTelVerificationTypePlaceCall->getExtension(),'ExtensionPauseTime'=>$_SOTelVerificationTypePlaceCall->getExtensionPauseTime(),'VerificationCode'=>$_SOTelVerificationTypePlaceCall->getVerificationCode(),'CallerID'=>$_SOTelVerificationTypePlaceCall->getCallerID(),'Language'=>$_SOTelVerificationTypePlaceCall->getLanguage(),'LicenseKey'=>$_SOTelVerificationTypePlaceCall->getLicenseKey())));
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
	 * @return SOTelVerificationTypePlaceCallResponse
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