<?php
/**
 * Class file for XWebOrderServiceOrder
 * @date 09/07/2012
 */
/**
 * Class XWebOrderServiceOrder
 * @date 09/07/2012
 */
class XWebOrderServiceOrder extends XWebOrderWsdlClass
{
	/**
	 * Method to call Order
	 * @uses XWebOrderWsdlClass::getSoapClient()
	 * @uses XWebOrderWsdlClass::setResult()
	 * @uses XWebOrderWsdlClass::getResult()
	 * @uses XWebOrderWsdlClass::saveLastError()
	 * @uses XWebOrderTypeOrderRequest::getRequestOrder()
	 * @param XWebOrderTypeOrderRequest OrderRequest
	 * @return XWebOrderTypeOrderResponse
	 */
	public function Order(XWebOrderTypeOrderRequest $_XWebOrderTypeOrderRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Order(array('RequestOrder'=>$_XWebOrderTypeOrderRequest->getRequestOrder())));
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
	 * @return XWebOrderTypeOrderResponse
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