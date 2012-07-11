<?php
/**
 * Class file for PPInvoiceServiceCancel
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceServiceCancel
 * @date 02/07/2012
 */
class PPInvoiceServiceCancel extends PPInvoiceWsdlClass
{
	/**
	 * Method to call CancelInvoice
	 * @uses PPInvoiceWsdlClass::getSoapClient()
	 * @uses PPInvoiceWsdlClass::setResult()
	 * @uses PPInvoiceWsdlClass::getResult()
	 * @uses PPInvoiceWsdlClass::saveLastError()
	 * @uses PPInvoiceTypeCancelInvoiceRequest::getRequestEnvelope()
	 * @uses PPInvoiceTypeCancelInvoiceRequest::getInvoiceID()
	 * @uses PPInvoiceTypeCancelInvoiceRequest::getSubject()
	 * @uses PPInvoiceTypeCancelInvoiceRequest::getNoteForPayer()
	 * @uses PPInvoiceTypeCancelInvoiceRequest::getSendCopyToMerchant()
	 * @param PPInvoiceTypeCancelInvoiceRequest CancelInvoiceRequest
	 * @return PPInvoiceTypeCancelInvoiceResponse
	 */
	public function CancelInvoice(PPInvoiceTypeCancelInvoiceRequest $_PPInvoiceTypeCancelInvoiceRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CancelInvoice(array('requestEnvelope'=>$_PPInvoiceTypeCancelInvoiceRequest->getRequestEnvelope(),'invoiceID'=>$_PPInvoiceTypeCancelInvoiceRequest->getInvoiceID(),'subject'=>$_PPInvoiceTypeCancelInvoiceRequest->getSubject(),'noteForPayer'=>$_PPInvoiceTypeCancelInvoiceRequest->getNoteForPayer(),'sendCopyToMerchant'=>$_PPInvoiceTypeCancelInvoiceRequest->getSendCopyToMerchant())));
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
	 * @return PPInvoiceTypeCancelInvoiceResponse
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