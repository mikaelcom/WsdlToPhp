<?php
/**
 * Class file for PayPalServiceExecute
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceExecute
 * @date 14/07/2012
 */
class PayPalServiceExecute extends PayPalWsdlClass
{
	/**
	 * Method to call ExecuteCheckoutOperations
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeExecuteCheckoutOperationsReq::getExecuteCheckoutOperationsRequest()
	 * @param PayPalTypeExecuteCheckoutOperationsReq ExecuteCheckoutOperationsReq
	 * @return PayPalTypeExecuteCheckoutOperationsResponseType
	 */
	public function ExecuteCheckoutOperations(PayPalTypeExecuteCheckoutOperationsReq $_PayPalTypeExecuteCheckoutOperationsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ExecuteCheckoutOperations(array('ExecuteCheckoutOperationsRequest'=>$_PayPalTypeExecuteCheckoutOperationsReq->getExecuteCheckoutOperationsRequest())));
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
	 * @return PayPalTypeExecuteCheckoutOperationsResponseType
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