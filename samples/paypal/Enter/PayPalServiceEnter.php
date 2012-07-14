<?php
/**
 * Class file for PayPalServiceEnter
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceEnter
 * @date 14/07/2012
 */
class PayPalServiceEnter extends PayPalWsdlClass
{
	/**
	 * Method to call EnterBoarding
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeEnterBoardingReq::getEnterBoardingRequest()
	 * @param PayPalTypeEnterBoardingReq EnterBoardingReq
	 * @return PayPalTypeEnterBoardingResponseType
	 */
	public function EnterBoarding(PayPalTypeEnterBoardingReq $_PayPalTypeEnterBoardingReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EnterBoarding(array('EnterBoardingRequest'=>$_PayPalTypeEnterBoardingReq->getEnterBoardingRequest())));
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
	 * @return PayPalTypeEnterBoardingResponseType
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