<?php
/**
 * Class file for XWebCheckOutServiceDelete
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutServiceDelete
 * @date 09/07/2012
 */
class XWebCheckOutServiceDelete extends XWebCheckOutWsdlClass
{
	/**
	 * Method to call DeleteOrder
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @uses XWebCheckOutTypeDeleteOrderRequest::getOrder_ID()
	 * @param XWebCheckOutTypeDeleteOrderRequest DeleteOrderRequest
	 * @return XWebCheckOutTypeUNKNOWN
	 */
	public function DeleteOrder(XWebCheckOutTypeDeleteOrderRequest $_XWebCheckOutTypeDeleteOrderRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteOrder(array('Order_ID'=>$_XWebCheckOutTypeDeleteOrderRequest->getOrder_ID())));
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