<?php
/**
 * Class file for PayPalServiceBMC
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceBMC
 * @date 14/07/2012
 */
class PayPalServiceBMC extends PayPalWsdlClass
{
	/**
	 * Method to call BMCreateButton
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeBMCreateButtonReq::getBMCreateButtonRequest()
	 * @param PayPalTypeBMCreateButtonReq BMCreateButtonReq
	 * @return PayPalTypeBMCreateButtonResponseType
	 */
	public function BMCreateButton(PayPalTypeBMCreateButtonReq $_PayPalTypeBMCreateButtonReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BMCreateButton(array('BMCreateButtonRequest'=>$_PayPalTypeBMCreateButtonReq->getBMCreateButtonRequest())));
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
	 * @return PayPalTypeBMCreateButtonResponseType
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