<?php
/**
 * Class file for PPInvoiceServiceSend
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceServiceSend
 * @date 02/07/2012
 */
class PPInvoiceServiceSend extends PPInvoiceWsdlClass
{
	/**
	 * Method to call SendInvoice
	 * @uses PPInvoiceWsdlClass::getSoapClient()
	 * @uses PPInvoiceWsdlClass::setResult()
	 * @uses PPInvoiceWsdlClass::getResult()
	 * @uses PPInvoiceWsdlClass::saveLastError()
	 * @uses PPInvoiceTypeSendInvoiceRequest::getRequestEnvelope()
	 * @uses PPInvoiceTypeSendInvoiceRequest::getInvoiceID()
	 * @param PPInvoiceTypeSendInvoiceRequest SendInvoiceRequest
	 * @return PPInvoiceTypeSendInvoiceResponse
	 */
	public function SendInvoice(PPInvoiceTypeSendInvoiceRequest $_PPInvoiceTypeSendInvoiceRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SendInvoice(array('requestEnvelope'=>$_PPInvoiceTypeSendInvoiceRequest->getRequestEnvelope(),'invoiceID'=>$_PPInvoiceTypeSendInvoiceRequest->getInvoiceID())));
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
	 * @return PPInvoiceTypeSendInvoiceResponse
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