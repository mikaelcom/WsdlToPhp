<?php
/**
 * Class file for XWebCheckOutServiceUpdate
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutServiceUpdate
 * @date 09/07/2012
 */
class XWebCheckOutServiceUpdate extends XWebCheckOutWsdlClass
{
	/**
	 * Method to call UpdateOrder
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @uses XWebCheckOutTypeUpdateOrderRequest::getOrder()
	 * @param XWebCheckOutTypeUpdateOrderRequest UpdateOrderRequest
	 * @return XWebCheckOutTypeUNKNOWN
	 */
	public function UpdateOrder(XWebCheckOutTypeUpdateOrderRequest $_XWebCheckOutTypeUpdateOrderRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateOrder(array('Order'=>$_XWebCheckOutTypeUpdateOrderRequest->getOrder())));
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
	 * @return XWebCheckOutTypeUNKNOWN
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