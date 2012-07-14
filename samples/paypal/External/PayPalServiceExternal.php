<?php
/**
 * Class file for PayPalServiceExternal
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceExternal
 * @date 14/07/2012
 */
class PayPalServiceExternal extends PayPalWsdlClass
{
	/**
	 * Method to call ExternalRememberMeOptOut
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeExternalRememberMeOptOutReq::getExternalRememberMeOptOutRequest()
	 * @param PayPalTypeExternalRememberMeOptOutReq ExternalRememberMeOptOutReq
	 * @return PayPalTypeExternalRememberMeOptOutResponseType
	 */
	public function ExternalRememberMeOptOut(PayPalTypeExternalRememberMeOptOutReq $_PayPalTypeExternalRememberMeOptOutReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ExternalRememberMeOptOut(array('ExternalRememberMeOptOutRequest'=>$_PayPalTypeExternalRememberMeOptOutReq->getExternalRememberMeOptOutRequest())));
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
	 * @return PayPalTypeExternalRememberMeOptOutResponseType
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