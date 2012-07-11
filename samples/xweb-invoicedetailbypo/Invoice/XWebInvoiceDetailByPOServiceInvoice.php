<?php
/**
 * Class file for XWebInvoiceDetailByPOServiceInvoice
 * @date 09/07/2012
 */
/**
 * Class XWebInvoiceDetailByPOServiceInvoice
 * @date 09/07/2012
 */
class XWebInvoiceDetailByPOServiceInvoice extends XWebInvoiceDetailByPOWsdlClass
{
	/**
	 * Method to call InvoiceDetailByPO
	 * @uses XWebInvoiceDetailByPOWsdlClass::getSoapClient()
	 * @uses XWebInvoiceDetailByPOWsdlClass::setResult()
	 * @uses XWebInvoiceDetailByPOWsdlClass::getResult()
	 * @uses XWebInvoiceDetailByPOWsdlClass::saveLastError()
	 * @uses XWebInvoiceDetailByPOTypeInvoiceDetailByPORequest::getRequestInvoiceDetailByPO()
	 * @param XWebInvoiceDetailByPOTypeInvoiceDetailByPORequest InvoiceDetailByPORequest
	 * @return XWebInvoiceDetailByPOTypeInvoiceDetailByPOResponse
	 */
	public function InvoiceDetailByPO(XWebInvoiceDetailByPOTypeInvoiceDetailByPORequest $_XWebInvoiceDetailByPOTypeInvoiceDetailByPORequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->InvoiceDetailByPO(array('RequestInvoiceDetailByPO'=>$_XWebInvoiceDetailByPOTypeInvoiceDetailByPORequest->getRequestInvoiceDetailByPO())));
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
	 * @return XWebInvoiceDetailByPOTypeInvoiceDetailByPOResponse
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