<?php
/**
 * Class file for PPInvoiceServiceSearch
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceServiceSearch
 * @date 02/07/2012
 */
class PPInvoiceServiceSearch extends PPInvoiceWsdlClass
{
	/**
	 * Method to call SearchInvoices
	 * @uses PPInvoiceWsdlClass::getSoapClient()
	 * @uses PPInvoiceWsdlClass::setResult()
	 * @uses PPInvoiceWsdlClass::getResult()
	 * @uses PPInvoiceWsdlClass::saveLastError()
	 * @uses PPInvoiceTypeSearchInvoicesRequest::getRequestEnvelope()
	 * @uses PPInvoiceTypeSearchInvoicesRequest::getMerchantEmail()
	 * @uses PPInvoiceTypeSearchInvoicesRequest::getParameters()
	 * @uses PPInvoiceTypeSearchInvoicesRequest::getPage()
	 * @uses PPInvoiceTypeSearchInvoicesRequest::getPageSize()
	 * @param PPInvoiceTypeSearchInvoicesRequest SearchInvoicesRequest
	 * @return PPInvoiceTypeSearchInvoicesResponse
	 */
	public function SearchInvoices(PPInvoiceTypeSearchInvoicesRequest $_PPInvoiceTypeSearchInvoicesRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchInvoices(array('requestEnvelope'=>$_PPInvoiceTypeSearchInvoicesRequest->getRequestEnvelope(),'merchantEmail'=>$_PPInvoiceTypeSearchInvoicesRequest->getMerchantEmail(),'parameters'=>$_PPInvoiceTypeSearchInvoicesRequest->getParameters(),'page'=>$_PPInvoiceTypeSearchInvoicesRequest->getPage(),'pageSize'=>$_PPInvoiceTypeSearchInvoicesRequest->getPageSize())));
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
	 * @return PPInvoiceTypeSearchInvoicesResponse
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