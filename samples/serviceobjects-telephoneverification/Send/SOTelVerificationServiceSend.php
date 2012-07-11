<?php
/**
 * Class file for SOTelVerificationServiceSend
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationServiceSend
 * @date 08/07/2012
 */
class SOTelVerificationServiceSend extends SOTelVerificationWsdlClass
{
	/**
	 * Method to call SendSMS
	 * Meta informations :
	 * 	- documentation : Sends an SMS text message to a phone number.
	 * @uses SOTelVerificationWsdlClass::getSoapClient()
	 * @uses SOTelVerificationWsdlClass::setResult()
	 * @uses SOTelVerificationWsdlClass::getResult()
	 * @uses SOTelVerificationWsdlClass::saveLastError()
	 * @uses SOTelVerificationTypeSendSMS::getCountryCode()
	 * @uses SOTelVerificationTypeSendSMS::getPhoneNumber()
	 * @uses SOTelVerificationTypeSendSMS::getMessage()
	 * @uses SOTelVerificationTypeSendSMS::getLicenseKey()
	 * @param SOTelVerificationTypeSendSMS SendSMS
	 * @return SOTelVerificationTypeSendSMSResponse
	 */
	public function SendSMS(SOTelVerificationTypeSendSMS $_SOTelVerificationTypeSendSMS)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SendSMS(array('CountryCode'=>$_SOTelVerificationTypeSendSMS->getCountryCode(),'PhoneNumber'=>$_SOTelVerificationTypeSendSMS->getPhoneNumber(),'Message'=>$_SOTelVerificationTypeSendSMS->getMessage(),'LicenseKey'=>$_SOTelVerificationTypeSendSMS->getLicenseKey())));
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
	 * @return SOTelVerificationTypeSendSMSResponse
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