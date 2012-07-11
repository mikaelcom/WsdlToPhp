<?php
/**
 * Class file for CdyneEmailServiceVerify
 * @date 02/07/2012
 */
/**
 * Class CdyneEmailServiceVerify
 * @date 02/07/2012
 */
class CdyneEmailServiceVerify extends CdyneEmailWsdlClass
{
	/**
	 * Method to call VerifyMXRecord
	 * Meta informations :
	 * 	- documentation : This function will verify the domains DNS (MX) mail entries. If the function returns 0 the persons email domain is invalid. More than 0 will indicate there is mail servers to accept an email. This function is great for quick email domain verification. It is not as powerful as the other email routines. Use a LicenseKey of 0 for testing. A -9999 as a result means that you have tested to many emails. Please try again later if you get this value.
	 * @uses CdyneEmailWsdlClass::getSoapClient()
	 * @uses CdyneEmailWsdlClass::setResult()
	 * @uses CdyneEmailWsdlClass::getResult()
	 * @uses CdyneEmailWsdlClass::saveLastError()
	 * @uses CdyneEmailTypeVerifyMXRecord::getEmail()
	 * @uses CdyneEmailTypeVerifyMXRecord::getLicenseKey()
	 * @param CdyneEmailTypeVerifyMXRecord VerifyMXRecord
	 * @return CdyneEmailTypeVerifyMXRecordResponse
	 */
	public function VerifyMXRecord(CdyneEmailTypeVerifyMXRecord $_CdyneEmailTypeVerifyMXRecord)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VerifyMXRecord(array('email'=>$_CdyneEmailTypeVerifyMXRecord->getEmail(),'LicenseKey'=>$_CdyneEmailTypeVerifyMXRecord->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call VerifyEmail
	 * Meta informations :
	 * 	- documentation : This function allows you to verify an email address against the mail servers it belongs to. This function differs from the advanced function only by it automatically setting a timeout of 5 seconds
	 * @uses CdyneEmailWsdlClass::getSoapClient()
	 * @uses CdyneEmailWsdlClass::setResult()
	 * @uses CdyneEmailWsdlClass::getResult()
	 * @uses CdyneEmailWsdlClass::saveLastError()
	 * @uses CdyneEmailTypeVerifyEmail::getEmail()
	 * @uses CdyneEmailTypeVerifyEmail::getLicenseKey()
	 * @param CdyneEmailTypeVerifyEmail VerifyEmail
	 * @return CdyneEmailTypeVerifyEmailResponse
	 */
	public function VerifyEmail(CdyneEmailTypeVerifyEmail $_CdyneEmailTypeVerifyEmail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VerifyEmail(array('email'=>$_CdyneEmailTypeVerifyEmail->getEmail(),'LicenseKey'=>$_CdyneEmailTypeVerifyEmail->getLicenseKey())));
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
	 * @return CdyneEmailTypeVerifyEmailResponse
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