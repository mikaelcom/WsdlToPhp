<?php
/**
 * Class file for PayPalServiceTransaction
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceTransaction
 * @date 14/07/2012
 */
class PayPalServiceTransaction extends PayPalWsdlClass
{
	/**
	 * Method to call TransactionSearch
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeTransactionSearchReq::getTransactionSearchRequest()
	 * @param PayPalTypeTransactionSearchReq TransactionSearchReq
	 * @return PayPalTypeTransactionSearchResponseType
	 */
	public function TransactionSearch(PayPalTypeTransactionSearchReq $_PayPalTypeTransactionSearchReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->TransactionSearch(array('TransactionSearchRequest'=>$_PayPalTypeTransactionSearchReq->getTransactionSearchRequest())));
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
	 * @return PayPalTypeTransactionSearchResponseType
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