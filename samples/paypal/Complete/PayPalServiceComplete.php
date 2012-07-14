<?php
/**
 * Class file for PayPalServiceComplete
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceComplete
 * @date 14/07/2012
 */
class PayPalServiceComplete extends PayPalWsdlClass
{
	/**
	 * Method to call CompleteRecoup
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeCompleteRecoupReq::getCompleteRecoupRequest()
	 * @param PayPalTypeCompleteRecoupReq CompleteRecoupReq
	 * @return PayPalTypeCompleteRecoupResponseType
	 */
	public function CompleteRecoup(PayPalTypeCompleteRecoupReq $_PayPalTypeCompleteRecoupReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CompleteRecoup(array('CompleteRecoupRequest'=>$_PayPalTypeCompleteRecoupReq->getCompleteRecoupRequest())));
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
	 * @return PayPalTypeCompleteRecoupResponseType
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