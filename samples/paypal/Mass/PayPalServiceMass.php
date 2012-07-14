<?php
/**
 * Class file for PayPalServiceMass
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceMass
 * @date 14/07/2012
 */
class PayPalServiceMass extends PayPalWsdlClass
{
	/**
	 * Method to call MassPay
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeMassPayReq::getMassPayRequest()
	 * @param PayPalTypeMassPayReq MassPayReq
	 * @return PayPalTypeMassPayResponseType
	 */
	public function MassPay(PayPalTypeMassPayReq $_PayPalTypeMassPayReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MassPay(array('MassPayRequest'=>$_PayPalTypeMassPayReq->getMassPayRequest())));
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
	 * @return PayPalTypeMassPayResponseType
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