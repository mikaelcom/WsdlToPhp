<?php
/**
 * Class file for PPInvoiceServiceUpdate
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceServiceUpdate
 * @date 02/07/2012
 */
class PPInvoiceServiceUpdate extends PPInvoiceWsdlClass
{
	/**
	 * Method to call UpdateInvoice
	 * @uses PPInvoiceWsdlClass::getSoapClient()
	 * @uses PPInvoiceWsdlClass::setResult()
	 * @uses PPInvoiceWsdlClass::getResult()
	 * @uses PPInvoiceWsdlClass::saveLastError()
	 * @uses PPInvoiceTypeUpdateInvoiceRequest::getRequestEnvelope()
	 * @uses PPInvoiceTypeUpdateInvoiceRequest::getInvoiceID()
	 * @uses PPInvoiceTypeUpdateInvoiceRequest::getInvoice()
	 * @param PPInvoiceTypeUpdateInvoiceRequest UpdateInvoiceRequest
	 * @return PPInvoiceTypeUpdateInvoiceResponse
	 */
	public function UpdateInvoice(PPInvoiceTypeUpdateInvoiceRequest $_PPInvoiceTypeUpdateInvoiceRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateInvoice(array('requestEnvelope'=>$_PPInvoiceTypeUpdateInvoiceRequest->getRequestEnvelope(),'invoiceID'=>$_PPInvoiceTypeUpdateInvoiceRequest->getInvoiceID(),'invoice'=>$_PPInvoiceTypeUpdateInvoiceRequest->getInvoice())));
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
	 * @return PPInvoiceTypeUpdateInvoiceResponse
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