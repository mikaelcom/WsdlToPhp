<?php
/**
 * Class file for PayPalServiceInitiate
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceInitiate
 * @date 14/07/2012
 */
class PayPalServiceInitiate extends PayPalWsdlClass
{
	/**
	 * Method to call InitiateRecoup
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeInitiateRecoupReq::getInitiateRecoupRequest()
	 * @param PayPalTypeInitiateRecoupReq InitiateRecoupReq
	 * @return PayPalTypeInitiateRecoupResponseType
	 */
	public function InitiateRecoup(PayPalTypeInitiateRecoupReq $_PayPalTypeInitiateRecoupReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->InitiateRecoup(array('InitiateRecoupRequest'=>$_PayPalTypeInitiateRecoupReq->getInitiateRecoupRequest())));
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
	 * @return PayPalTypeInitiateRecoupResponseType
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