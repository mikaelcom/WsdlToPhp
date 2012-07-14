<?php
/**
 * Class file for PayPalServiceBMS
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceBMS
 * @date 14/07/2012
 */
class PayPalServiceBMS extends PayPalWsdlClass
{
	/**
	 * Method to call BMSetInventory
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeBMSetInventoryReq::getBMSetInventoryRequest()
	 * @param PayPalTypeBMSetInventoryReq BMSetInventoryReq
	 * @return PayPalTypeBMSetInventoryResponseType
	 */
	public function BMSetInventory(PayPalTypeBMSetInventoryReq $_PayPalTypeBMSetInventoryReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BMSetInventory(array('BMSetInventoryRequest'=>$_PayPalTypeBMSetInventoryReq->getBMSetInventoryRequest())));
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
	 * @return PayPalTypeBMSetInventoryResponseType
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