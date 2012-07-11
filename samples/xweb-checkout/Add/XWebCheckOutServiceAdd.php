<?php
/**
 * Class file for XWebCheckOutServiceAdd
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutServiceAdd
 * @date 09/07/2012
 */
class XWebCheckOutServiceAdd extends XWebCheckOutWsdlClass
{
	/**
	 * Method to call AddOrder
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @uses XWebCheckOutTypeAddOrderRequest::getOrder()
	 * @param XWebCheckOutTypeAddOrderRequest AddOrderRequest
	 * @return XWebCheckOutTypeUNKNOWN
	 */
	public function AddOrder(XWebCheckOutTypeAddOrderRequest $_XWebCheckOutTypeAddOrderRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddOrder(array('Order'=>$_XWebCheckOutTypeAddOrderRequest->getOrder())));
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