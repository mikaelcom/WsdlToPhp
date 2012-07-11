<?php
/**
 * Class file for PaylineWebPaymentServiceGet
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentServiceGet
 * @date 10/07/2012
 */
class PaylineWebPaymentServiceGet extends PaylineWebPaymentWsdlClass
{
	/**
	 * Method to call getWebPaymentDetails
	 * @uses PaylineWebPaymentWsdlClass::getSoapClient()
	 * @uses PaylineWebPaymentWsdlClass::setResult()
	 * @uses PaylineWebPaymentWsdlClass::getResult()
	 * @uses PaylineWebPaymentWsdlClass::saveLastError()
	 * @uses PaylineWebPaymentTypeGetWebPaymentDetailsRequest::getToken()
	 * @param PaylineWebPaymentTypeGetWebPaymentDetailsRequest GetWebPaymentDetailsRequest
	 * @return PaylineWebPaymentTypeGetWebPaymentDetailsResponse
	 */
	public function getWebPaymentDetails(PaylineWebPaymentTypeGetWebPaymentDetailsRequest $_PaylineWebPaymentTypeGetWebPaymentDetailsRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getWebPaymentDetails(array('token'=>$_PaylineWebPaymentTypeGetWebPaymentDetailsRequest->getToken())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getWebWallet
	 * @uses PaylineWebPaymentWsdlClass::getSoapClient()
	 * @uses PaylineWebPaymentWsdlClass::setResult()
	 * @uses PaylineWebPaymentWsdlClass::getResult()
	 * @uses PaylineWebPaymentWsdlClass::saveLastError()
	 * @uses PaylineWebPaymentTypeGetWebWalletRequest::getToken()
	 * @param PaylineWebPaymentTypeGetWebWalletRequest GetWebWalletRequest
	 * @return PaylineWebPaymentTypeGetWebWalletResponse
	 */
	public function getWebWallet(PaylineWebPaymentTypeGetWebWalletRequest $_PaylineWebPaymentTypeGetWebWalletRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getWebWallet(array('token'=>$_PaylineWebPaymentTypeGetWebWalletRequest->getToken())));
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
	 * @return PaylineWebPaymentTypeGetWebWalletResponse
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