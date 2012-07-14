<?php
/**
 * Class file for PayPalServiceReverse
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceReverse
 * @date 14/07/2012
 */
class PayPalServiceReverse extends PayPalWsdlClass
{
	/**
	 * Method to call ReverseTransaction
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeReverseTransactionReq::getReverseTransactionRequest()
	 * @param PayPalTypeReverseTransactionReq ReverseTransactionReq
	 * @return PayPalTypeReverseTransactionResponseType
	 */
	public function ReverseTransaction(PayPalTypeReverseTransactionReq $_PayPalTypeReverseTransactionReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReverseTransaction(array('ReverseTransactionRequest'=>$_PayPalTypeReverseTransactionReq->getReverseTransactionRequest())));
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
	 * @return PayPalTypeReverseTransactionResponseType
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