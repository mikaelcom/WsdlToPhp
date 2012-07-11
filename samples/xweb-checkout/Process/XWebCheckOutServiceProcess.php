<?php
/**
 * Class file for XWebCheckOutServiceProcess
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutServiceProcess
 * @date 09/07/2012
 */
class XWebCheckOutServiceProcess extends XWebCheckOutWsdlClass
{
	/**
	 * Method to call ProcessOrder
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @uses XWebCheckOutTypeProcessOrderRequest::getOrder()
	 * @param XWebCheckOutTypeProcessOrderRequest ProcessOrderRequest
	 * @return XWebCheckOutTypeUNKNOWN
	 */
	public function ProcessOrder(XWebCheckOutTypeProcessOrderRequest $_XWebCheckOutTypeProcessOrderRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ProcessOrder(array('Order'=>$_XWebCheckOutTypeProcessOrderRequest->getOrder())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ProcessPaymentLSPG
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @uses XWebCheckOutTypeProcessPaymentLSPGRequest::getOrder()
	 * @uses XWebCheckOutTypeProcessPaymentLSPGRequest::getEnviroment()
	 * @param XWebCheckOutTypeProcessPaymentLSPGRequest ProcessPaymentLSPGRequest
	 * @return XWebCheckOutTypeProcessPaymentLSPGResponse
	 */
	public function ProcessPaymentLSPG(XWebCheckOutTypeProcessPaymentLSPGRequest $_XWebCheckOutTypeProcessPaymentLSPGRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ProcessPaymentLSPG(array('Order'=>$_XWebCheckOutTypeProcessPaymentLSPGRequest->getOrder(),'Enviroment'=>$_XWebCheckOutTypeProcessPaymentLSPGRequest->getEnviroment())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ProcessPaymentCybersource
	 * @uses XWebCheckOutWsdlClass::getSoapClient()
	 * @uses XWebCheckOutWsdlClass::setResult()
	 * @uses XWebCheckOutWsdlClass::getResult()
	 * @uses XWebCheckOutWsdlClass::saveLastError()
	 * @uses XWebCheckOutTypeProcessPaymentCybersourceRequest::getOrder()
	 * @param XWebCheckOutTypeProcessPaymentCybersourceRequest ProcessPaymentCybersourceRequest
	 * @return XWebCheckOutTypeProcessPaymentCybersourceResponse
	 */
	public function ProcessPaymentCybersource(XWebCheckOutTypeProcessPaymentCybersourceRequest $_XWebCheckOutTypeProcessPaymentCybersourceRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ProcessPaymentCybersource(array('Order'=>$_XWebCheckOutTypeProcessPaymentCybersourceRequest->getOrder())));
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
	 * @return XWebCheckOutTypeProcessPaymentCybersourceResponse
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