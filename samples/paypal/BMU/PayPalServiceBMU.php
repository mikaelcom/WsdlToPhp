<?php
/**
 * Class file for PayPalServiceBMU
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceBMU
 * @date 14/07/2012
 */
class PayPalServiceBMU extends PayPalWsdlClass
{
	/**
	 * Method to call BMUpdateButton
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeBMUpdateButtonReq::getBMUpdateButtonRequest()
	 * @param PayPalTypeBMUpdateButtonReq BMUpdateButtonReq
	 * @return PayPalTypeBMUpdateButtonResponseType
	 */
	public function BMUpdateButton(PayPalTypeBMUpdateButtonReq $_PayPalTypeBMUpdateButtonReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BMUpdateButton(array('BMUpdateButtonRequest'=>$_PayPalTypeBMUpdateButtonReq->getBMUpdateButtonRequest())));
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
	 * @return PayPalTypeBMUpdateButtonResponseType
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