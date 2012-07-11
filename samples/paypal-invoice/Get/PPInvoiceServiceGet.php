<?php
/**
 * Class file for PPInvoiceServiceGet
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceServiceGet
 * @date 02/07/2012
 */
class PPInvoiceServiceGet extends PPInvoiceWsdlClass
{
	/**
	 * Method to call GetInvoiceDetails
	 * @uses PPInvoiceWsdlClass::getSoapClient()
	 * @uses PPInvoiceWsdlClass::setResult()
	 * @uses PPInvoiceWsdlClass::getResult()
	 * @uses PPInvoiceWsdlClass::saveLastError()
	 * @uses PPInvoiceTypeGetInvoiceDetailsRequest::getRequestEnvelope()
	 * @uses PPInvoiceTypeGetInvoiceDetailsRequest::getInvoiceID()
	 * @param PPInvoiceTypeGetInvoiceDetailsRequest GetInvoiceDetailsRequest
	 * @return PPInvoiceTypeGetInvoiceDetailsResponse
	 */
	public function GetInvoiceDetails(PPInvoiceTypeGetInvoiceDetailsRequest $_PPInvoiceTypeGetInvoiceDetailsRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetInvoiceDetails(array('requestEnvelope'=>$_PPInvoiceTypeGetInvoiceDetailsRequest->getRequestEnvelope(),'invoiceID'=>$_PPInvoiceTypeGetInvoiceDetailsRequest->getInvoiceID())));
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
	 * @return PPInvoiceTypeGetInvoiceDetailsResponse
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