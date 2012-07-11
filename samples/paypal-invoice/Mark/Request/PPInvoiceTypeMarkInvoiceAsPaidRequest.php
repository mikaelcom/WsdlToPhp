<?php
/**
 * Class file for PPInvoiceTypeMarkInvoiceAsPaidRequest
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeMarkInvoiceAsPaidRequest
 * Documentation : The request object for MarkInvoiceAsPaid.
 * @date 02/07/2012
 */
class PPInvoiceTypeMarkInvoiceAsPaidRequest extends PPInvoiceWsdlClass
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
	 * 	- documentation : ID of the invoice to mark as paid.
	 * @var string
	 */
	public $invoiceID;
	/**
	 * The payment
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Details of the payment made against this invoice.
	 * @var PPInvoiceTypeOtherPaymentDetailsType
	 */
	public $payment;
	/**
	 * Constructor
	 * @param PPInvoiceTypeRequestEnvelope requestEnvelope
	 * @param string invoiceID
	 * @param PPInvoiceTypeOtherPaymentDetailsType payment
	 * @return PPInvoiceTypeMarkInvoiceAsPaidRequest
	 */
	public function __construct($_requestEnvelope,$_invoiceID,$_payment)
	{
		parent::__construct(array('requestEnvelope'=>$_requestEnvelope,'invoiceID'=>$_invoiceID,'payment'=>$_payment));
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
	 * Set payment
	 * @param OtherPaymentDetailsType payment
	 * @return OtherPaymentDetailsType
	 */
	public function setPayment($_payment)
	{
		return ($this->payment = $_payment);
	}
	/**
	 * Get payment
	 * @return PPInvoiceTypeOtherPaymentDetailsType
	 */
	public function getPayment()
	{
		return $this->payment;
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