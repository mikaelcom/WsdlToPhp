<?php
/**
 * Class file for PayPalServiceBMM
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceBMM
 * @date 14/07/2012
 */
class PayPalServiceBMM extends PayPalWsdlClass
{
	/**
	 * Method to call BMManageButtonStatus
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeBMManageButtonStatusReq::getBMManageButtonStatusRequest()
	 * @param PayPalTypeBMManageButtonStatusReq BMManageButtonStatusReq
	 * @return PayPalTypeBMManageButtonStatusResponseType
	 */
	public function BMManageButtonStatus(PayPalTypeBMManageButtonStatusReq $_PayPalTypeBMManageButtonStatusReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BMManageButtonStatus(array('BMManageButtonStatusRequest'=>$_PayPalTypeBMManageButtonStatusReq->getBMManageButtonStatusRequest())));
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
	 * @return PayPalTypeBMManageButtonStatusResponseType
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