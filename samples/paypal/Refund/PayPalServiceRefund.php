<?php
/**
 * Class file for PayPalServiceRefund
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceRefund
 * @date 14/07/2012
 */
class PayPalServiceRefund extends PayPalWsdlClass
{
	/**
	 * Method to call RefundTransaction
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeRefundTransactionReq::getRefundTransactionRequest()
	 * @param PayPalTypeRefundTransactionReq RefundTransactionReq
	 * @return PayPalTypeRefundTransactionResponseType
	 */
	public function RefundTransaction(PayPalTypeRefundTransactionReq $_PayPalTypeRefundTransactionReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RefundTransaction(array('RefundTransactionRequest'=>$_PayPalTypeRefundTransactionReq->getRefundTransactionRequest())));
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
	 * @return PayPalTypeRefundTransactionResponseType
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