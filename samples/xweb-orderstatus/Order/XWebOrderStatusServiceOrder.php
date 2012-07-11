<?php
/**
 * Class file for XWebOrderStatusServiceOrder
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusServiceOrder
 * @date 09/07/2012
 */
class XWebOrderStatusServiceOrder extends XWebOrderStatusWsdlClass
{
	/**
	 * Method to call OrderStatus
	 * @uses XWebOrderStatusWsdlClass::getSoapClient()
	 * @uses XWebOrderStatusWsdlClass::setResult()
	 * @uses XWebOrderStatusWsdlClass::getResult()
	 * @uses XWebOrderStatusWsdlClass::saveLastError()
	 * @uses XWebOrderStatusTypeOrderStatusRequest::getRequestOrderStatus()
	 * @param XWebOrderStatusTypeOrderStatusRequest OrderStatusRequest
	 * @return XWebOrderStatusTypeOrderStatusResponse
	 */
	public function OrderStatus(XWebOrderStatusTypeOrderStatusRequest $_XWebOrderStatusTypeOrderStatusRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->OrderStatus(array('RequestOrderStatus'=>$_XWebOrderStatusTypeOrderStatusRequest->getRequestOrderStatus())));
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
	 * @return XWebOrderStatusTypeOrderStatusResponse
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