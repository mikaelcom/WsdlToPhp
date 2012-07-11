<?php
/**
 * Class file for CdynePhoneVerifyServiceCheck
 * @date 03/07/2012
 */
/**
 * Class CdynePhoneVerifyServiceCheck
 * @date 03/07/2012
 */
class CdynePhoneVerifyServiceCheck extends CdynePhoneVerifyWsdlClass
{
	/**
	 * Method to call CheckPhoneNumber
	 * Meta informations :
	 * 	- documentation : Insert a phone number and your license key in the fields below to verify the phone number. This method also provides additional information about the phone number which includes the RateCenter, Telecom Address, Wireless, Switch Information, CLLI, LATA, Company, TimeZone, and more.<br /><br />For more information, please visit our <a href='http://wiki.cdyne.com/wiki/index.php?title=Phone_Verification'>wiki</a>.
	 * @uses CdynePhoneVerifyWsdlClass::getSoapClient()
	 * @uses CdynePhoneVerifyWsdlClass::setResult()
	 * @uses CdynePhoneVerifyWsdlClass::getResult()
	 * @uses CdynePhoneVerifyWsdlClass::saveLastError()
	 * @uses CdynePhoneVerifyTypeCheckPhoneNumber::getPhoneNumber()
	 * @uses CdynePhoneVerifyTypeCheckPhoneNumber::getLicenseKey()
	 * @param CdynePhoneVerifyTypeCheckPhoneNumber CheckPhoneNumber
	 * @return CdynePhoneVerifyTypeCheckPhoneNumberResponse
	 */
	public function CheckPhoneNumber(CdynePhoneVerifyTypeCheckPhoneNumber $_CdynePhoneVerifyTypeCheckPhoneNumber)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckPhoneNumber(array('PhoneNumber'=>$_CdynePhoneVerifyTypeCheckPhoneNumber->getPhoneNumber(),'LicenseKey'=>$_CdynePhoneVerifyTypeCheckPhoneNumber->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CheckPhoneNumbers
	 * Meta informations :
	 * 	- documentation : This method is the same as <a href='http://ws.cdyne.com/phoneverify/phoneverify.asmx?op=CheckPhoneNumber'>CheckPhoneNumber</a>, although you are allowed to insert an array of phone numbers to be validated.<br /><br />For more information, please visit our <a href='http://wiki.cdyne.com/wiki/index.php?title=Phone_Verification'>wiki</a>.
	 * @uses CdynePhoneVerifyWsdlClass::getSoapClient()
	 * @uses CdynePhoneVerifyWsdlClass::setResult()
	 * @uses CdynePhoneVerifyWsdlClass::getResult()
	 * @uses CdynePhoneVerifyWsdlClass::saveLastError()
	 * @uses CdynePhoneVerifyTypeCheckPhoneNumbers::getPhoneNumbers()
	 * @uses CdynePhoneVerifyTypeCheckPhoneNumbers::getLicenseKey()
	 * @param CdynePhoneVerifyTypeCheckPhoneNumbers CheckPhoneNumbers
	 * @return CdynePhoneVerifyTypeCheckPhoneNumbersResponse
	 */
	public function CheckPhoneNumbers(CdynePhoneVerifyTypeCheckPhoneNumbers $_CdynePhoneVerifyTypeCheckPhoneNumbers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckPhoneNumbers(array('PhoneNumbers'=>$_CdynePhoneVerifyTypeCheckPhoneNumbers->getPhoneNumbers(),'LicenseKey'=>$_CdynePhoneVerifyTypeCheckPhoneNumbers->getLicenseKey())));
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
	 * @return CdynePhoneVerifyTypeCheckPhoneNumbersResponse
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