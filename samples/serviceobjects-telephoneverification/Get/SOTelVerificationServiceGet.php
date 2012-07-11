<?php
/**
 * Class file for SOTelVerificationServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationServiceGet
 * @date 08/07/2012
 */
class SOTelVerificationServiceGet extends SOTelVerificationWsdlClass
{
	/**
	 * Method to call GetExchangeInfo
	 * Meta informations :
	 * 	- documentation : Returns information on a phone number's exchange, including carrier, line type, city, and state.
	 * @uses SOTelVerificationWsdlClass::getSoapClient()
	 * @uses SOTelVerificationWsdlClass::setResult()
	 * @uses SOTelVerificationWsdlClass::getResult()
	 * @uses SOTelVerificationWsdlClass::saveLastError()
	 * @uses SOTelVerificationTypeGetExchangeInfo::getPhoneNumber()
	 * @uses SOTelVerificationTypeGetExchangeInfo::getLicenseKey()
	 * @param SOTelVerificationTypeGetExchangeInfo GetExchangeInfo
	 * @return SOTelVerificationTypeGetExchangeInfoResponse
	 */
	public function GetExchangeInfo(SOTelVerificationTypeGetExchangeInfo $_SOTelVerificationTypeGetExchangeInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeInfo(array('PhoneNumber'=>$_SOTelVerificationTypeGetExchangeInfo->getPhoneNumber(),'LicenseKey'=>$_SOTelVerificationTypeGetExchangeInfo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPhoneInfo
	 * Meta informations :
	 * 	- documentation : Returns information on a phone number, including the listed contact name, address, city, state; and exchange information including carrier, line type, city, and state.
	 * @uses SOTelVerificationWsdlClass::getSoapClient()
	 * @uses SOTelVerificationWsdlClass::setResult()
	 * @uses SOTelVerificationWsdlClass::getResult()
	 * @uses SOTelVerificationWsdlClass::saveLastError()
	 * @uses SOTelVerificationTypeGetPhoneInfo::getPhoneNumber()
	 * @uses SOTelVerificationTypeGetPhoneInfo::getLicenseKey()
	 * @param SOTelVerificationTypeGetPhoneInfo GetPhoneInfo
	 * @return SOTelVerificationTypeGetPhoneInfoResponse
	 */
	public function GetPhoneInfo(SOTelVerificationTypeGetPhoneInfo $_SOTelVerificationTypeGetPhoneInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPhoneInfo(array('PhoneNumber'=>$_SOTelVerificationTypeGetPhoneInfo->getPhoneNumber(),'LicenseKey'=>$_SOTelVerificationTypeGetPhoneInfo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTransactionDetail
	 * Meta informations :
	 * 	- documentation : Returns detailed information about one transaction.
	 * @uses SOTelVerificationWsdlClass::getSoapClient()
	 * @uses SOTelVerificationWsdlClass::setResult()
	 * @uses SOTelVerificationWsdlClass::getResult()
	 * @uses SOTelVerificationWsdlClass::saveLastError()
	 * @uses SOTelVerificationTypeGetTransactionDetail::getTransactionID()
	 * @uses SOTelVerificationTypeGetTransactionDetail::getLicenseKey()
	 * @param SOTelVerificationTypeGetTransactionDetail GetTransactionDetail
	 * @return SOTelVerificationTypeGetTransactionDetailResponse
	 */
	public function GetTransactionDetail(SOTelVerificationTypeGetTransactionDetail $_SOTelVerificationTypeGetTransactionDetail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTransactionDetail(array('TransactionID'=>$_SOTelVerificationTypeGetTransactionDetail->getTransactionID(),'LicenseKey'=>$_SOTelVerificationTypeGetTransactionDetail->getLicenseKey())));
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
	 * @return SOTelVerificationTypeGetTransactionDetailResponse
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