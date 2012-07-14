<?php
/**
 * Class file for PayPalServiceBMG
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceBMG
 * @date 14/07/2012
 */
class PayPalServiceBMG extends PayPalWsdlClass
{
	/**
	 * Method to call BMGetButtonDetails
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeBMGetButtonDetailsReq::getBMGetButtonDetailsRequest()
	 * @param PayPalTypeBMGetButtonDetailsReq BMGetButtonDetailsReq
	 * @return PayPalTypeBMGetButtonDetailsResponseType
	 */
	public function BMGetButtonDetails(PayPalTypeBMGetButtonDetailsReq $_PayPalTypeBMGetButtonDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BMGetButtonDetails(array('BMGetButtonDetailsRequest'=>$_PayPalTypeBMGetButtonDetailsReq->getBMGetButtonDetailsRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call BMGetInventory
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeBMGetInventoryReq::getBMGetInventoryRequest()
	 * @param PayPalTypeBMGetInventoryReq BMGetInventoryReq
	 * @return PayPalTypeBMGetInventoryResponseType
	 */
	public function BMGetInventory(PayPalTypeBMGetInventoryReq $_PayPalTypeBMGetInventoryReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BMGetInventory(array('BMGetInventoryRequest'=>$_PayPalTypeBMGetInventoryReq->getBMGetInventoryRequest())));
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
	 * @return PayPalTypeBMGetInventoryResponseType
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