<?php
/**
 * Class file for PPInvoiceTypeMarkInvoiceAsRefundedRequest
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeMarkInvoiceAsRefundedRequest
 * Documentation : The request object for MarkInvoiceAsRefunded.
 * @date 02/07/2012
 */
class PPInvoiceTypeMarkInvoiceAsRefundedRequest extends PPInvoiceWsdlClass
{
	/**
	 * The requestEnvelope
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var PPInvoiceTypeRequestEnvelope
	 */
	public $requestEnvelope;
	/**
	 * The invoiceID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : ID of the invoice to mark as refunded.
	 * @var string
	 */
	public $invoiceID;
	/**
	 * The refundDetail
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Details of the refund made against this invoice.
	 * @var PPInvoiceTypeOtherPaymentRefundDetailsType
	 */
	public $refundDetail;
	/**
	 * Constructor
	 * @param PPInvoiceTypeRequestEnvelope requestEnvelope
	 * @param string invoiceID
	 * @param PPInvoiceTypeOtherPaymentRefundDetailsType refundDetail
	 * @return PPInvoiceTypeMarkInvoiceAsRefundedRequest
	 */
	public function __construct($_requestEnvelope,$_invoiceID,$_refundDetail)
	{
		parent::__construct(array('requestEnvelope'=>$_requestEnvelope,'invoiceID'=>$_invoiceID,'refundDetail'=>$_refundDetail));
	}
	/**
	 * Set requestEnvelope
	 * @param RequestEnvelope requestEnvelope
	 * @return RequestEnvelope
	 */
	public function setRequestEnvelope($_requestEnvelope)
	{
		return ($this->requestEnvelope = $_requestEnvelope);
	}
	/**
	 * Get requestEnvelope
	 * @return PPInvoiceTypeRequestEnvelope
	 */
	public function getRequestEnvelope()
	{
		return $this->requestEnvelope;
	}
	/**
	 * Set invoiceID
	 * @param string invoiceID
	 * @return string
	 */
	public function setInvoiceID($_invoiceID)
	{
		return ($this->invoiceID = $_invoiceID);
	}
	/**
	 * Get invoiceID
	 * @return string
	 */
	public function getInvoiceID()
	{
		return $this->invoiceID;
	}
	/**
	 * Set refundDetail
	 * @param OtherPaymentRefundDetailsType refundDetail
	 * @return OtherPaymentRefundDetailsType
	 */
	public function setRefundDetail($_refundDetail)
	{
		return ($this->refundDetail = $_refundDetail);
	}
	/**
	 * Get refundDetail
	 * @return PPInvoiceTypeOtherPaymentRefundDetailsType
	 */
	public function getRefundDetail()
	{
		return $this->refundDetail;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>