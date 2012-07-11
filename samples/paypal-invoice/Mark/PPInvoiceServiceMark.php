<?php
/**
 * Class file for PPInvoiceServiceMark
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceServiceMark
 * @date 02/07/2012
 */
class PPInvoiceServiceMark extends PPInvoiceWsdlClass
{
	/**
	 * Method to call MarkInvoiceAsPaid
	 * @uses PPInvoiceWsdlClass::getSoapClient()
	 * @uses PPInvoiceWsdlClass::setResult()
	 * @uses PPInvoiceWsdlClass::getResult()
	 * @uses PPInvoiceWsdlClass::saveLastError()
	 * @uses PPInvoiceTypeMarkInvoiceAsPaidRequest::getRequestEnvelope()
	 * @uses PPInvoiceTypeMarkInvoiceAsPaidRequest::getInvoiceID()
	 * @uses PPInvoiceTypeMarkInvoiceAsPaidRequest::getPayment()
	 * @param PPInvoiceTypeMarkInvoiceAsPaidRequest MarkInvoiceAsPaidRequest
	 * @return PPInvoiceTypeMarkInvoiceAsPaidResponse
	 */
	public function MarkInvoiceAsPaid(PPInvoiceTypeMarkInvoiceAsPaidRequest $_PPInvoiceTypeMarkInvoiceAsPaidRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MarkInvoiceAsPaid(array('requestEnvelope'=>$_PPInvoiceTypeMarkInvoiceAsPaidRequest->getRequestEnvelope(),'invoiceID'=>$_PPInvoiceTypeMarkInvoiceAsPaidRequest->getInvoiceID(),'payment'=>$_PPInvoiceTypeMarkInvoiceAsPaidRequest->getPayment())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call MarkInvoiceAsUnpaid
	 * @uses PPInvoiceWsdlClass::getSoapClient()
	 * @uses PPInvoiceWsdlClass::setResult()
	 * @uses PPInvoiceWsdlClass::getResult()
	 * @uses PPInvoiceWsdlClass::saveLastError()
	 * @uses PPInvoiceTypeMarkInvoiceAsUnpaidRequest::getRequestEnvelope()
	 * @uses PPInvoiceTypeMarkInvoiceAsUnpaidRequest::getInvoiceID()
	 * @param PPInvoiceTypeMarkInvoiceAsUnpaidRequest MarkInvoiceAsUnpaidRequest
	 * @return PPInvoiceTypeMarkInvoiceAsUnpaidResponse
	 */
	public function MarkInvoiceAsUnpaid(PPInvoiceTypeMarkInvoiceAsUnpaidRequest $_PPInvoiceTypeMarkInvoiceAsUnpaidRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MarkInvoiceAsUnpaid(array('requestEnvelope'=>$_PPInvoiceTypeMarkInvoiceAsUnpaidRequest->getRequestEnvelope(),'invoiceID'=>$_PPInvoiceTypeMarkInvoiceAsUnpaidRequest->getInvoiceID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call MarkInvoiceAsRefunded
	 * @uses PPInvoiceWsdlClass::getSoapClient()
	 * @uses PPInvoiceWsdlClass::setResult()
	 * @uses PPInvoiceWsdlClass::getResult()
	 * @uses PPInvoiceWsdlClass::saveLastError()
	 * @uses PPInvoiceTypeMarkInvoiceAsRefundedRequest::getRequestEnvelope()
	 * @uses PPInvoiceTypeMarkInvoiceAsRefundedRequest::getInvoiceID()
	 * @uses PPInvoiceTypeMarkInvoiceAsRefundedRequest::getRefundDetail()
	 * @param PPInvoiceTypeMarkInvoiceAsRefundedRequest MarkInvoiceAsRefundedRequest
	 * @return PPInvoiceTypeMarkInvoiceAsRefundedResponse
	 */
	public function MarkInvoiceAsRefunded(PPInvoiceTypeMarkInvoiceAsRefundedRequest $_PPInvoiceTypeMarkInvoiceAsRefundedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MarkInvoiceAsRefunded(array('requestEnvelope'=>$_PPInvoiceTypeMarkInvoiceAsRefundedRequest->getRequestEnvelope(),'invoiceID'=>$_PPInvoiceTypeMarkInvoiceAsRefundedRequest->getInvoiceID(),'refundDetail'=>$_PPInvoiceTypeMarkInvoiceAsRefundedRequest->getRefundDetail())));
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
	 * @return PPInvoiceTypeMarkInvoiceAsRefundedResponse
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