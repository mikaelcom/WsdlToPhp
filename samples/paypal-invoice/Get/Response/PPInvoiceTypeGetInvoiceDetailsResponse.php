<?php
/**
 * Class file for PPInvoiceTypeGetInvoiceDetailsResponse
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeGetInvoiceDetailsResponse
 * Documentation : The response object for CreateInvoice.
 * @date 02/07/2012
 */
class PPInvoiceTypeGetInvoiceDetailsResponse extends PPInvoiceWsdlClass
{
	/**
	 * The responseEnvelope
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var PPInvoiceTypeResponseEnvelope
	 */
	public $responseEnvelope;
	/**
	 * The invoice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The requested invoice.
	 * @var PPInvoiceTypeInvoiceType
	 */
	public $invoice;
	/**
	 * The invoiceDetails
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The requested invoice details.
	 * @var PPInvoiceTypeInvoiceDetailsType
	 */
	public $invoiceDetails;
	/**
	 * The paymentDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The requested invoice payment details.
	 * @var PPInvoiceTypePaymentDetailsType
	 */
	public $paymentDetails;
	/**
	 * The refundDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The requested invoice refund details.
	 * @var PPInvoiceTypePaymentRefundDetailsType
	 */
	public $refundDetails;
	/**
	 * The invoiceURL
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The URL which lead merchant to view the invoice details on web.
	 * @var string
	 */
	public $invoiceURL;
	/**
	 * Constructor
	 * @param PPInvoiceTypeResponseEnvelope responseEnvelope
	 * @param PPInvoiceTypeInvoiceType invoice
	 * @param PPInvoiceTypeInvoiceDetailsType invoiceDetails
	 * @param PPInvoiceTypePaymentDetailsType paymentDetails
	 * @param PPInvoiceTypePaymentRefundDetailsType refundDetails
	 * @param string invoiceURL
	 * @return PPInvoiceTypeGetInvoiceDetailsResponse
	 */
	public function __construct($_responseEnvelope,$_invoice,$_invoiceDetails,$_paymentDetails = null,$_refundDetails = null,$_invoiceURL)
	{
		parent::__construct(array('responseEnvelope'=>$_responseEnvelope,'invoice'=>$_invoice,'invoiceDetails'=>$_invoiceDetails,'paymentDetails'=>$_paymentDetails,'refundDetails'=>$_refundDetails,'invoiceURL'=>$_invoiceURL));
	}
	/**
	 * Set responseEnvelope
	 * @param ResponseEnvelope responseEnvelope
	 * @return ResponseEnvelope
	 */
	public function setResponseEnvelope($_responseEnvelope)
	{
		return ($this->responseEnvelope = $_responseEnvelope);
	}
	/**
	 * Get responseEnvelope
	 * @return PPInvoiceTypeResponseEnvelope
	 */
	public function getResponseEnvelope()
	{
		return $this->responseEnvelope;
	}
	/**
	 * Set invoice
	 * @param InvoiceType invoice
	 * @return InvoiceType
	 */
	public function setInvoice($_invoice)
	{
		return ($this->invoice = $_invoice);
	}
	/**
	 * Get invoice
	 * @return PPInvoiceTypeInvoiceType
	 */
	public function getInvoice()
	{
		return $this->invoice;
	}
	/**
	 * Set invoiceDetails
	 * @param InvoiceDetailsType invoiceDetails
	 * @return InvoiceDetailsType
	 */
	public function setInvoiceDetails($_invoiceDetails)
	{
		return ($this->invoiceDetails = $_invoiceDetails);
	}
	/**
	 * Get invoiceDetails
	 * @return PPInvoiceTypeInvoiceDetailsType
	 */
	public function getInvoiceDetails()
	{
		return $this->invoiceDetails;
	}
	/**
	 * Set paymentDetails
	 * @param PaymentDetailsType paymentDetails
	 * @return PaymentDetailsType
	 */
	public function setPaymentDetails($_paymentDetails)
	{
		return ($this->paymentDetails = $_paymentDetails);
	}
	/**
	 * Get paymentDetails
	 * @return PPInvoiceTypePaymentDetailsType
	 */
	public function getPaymentDetails()
	{
		return $this->paymentDetails;
	}
	/**
	 * Set refundDetails
	 * @param PaymentRefundDetailsType refundDetails
	 * @return PaymentRefundDetailsType
	 */
	public function setRefundDetails($_refundDetails)
	{
		return ($this->refundDetails = $_refundDetails);
	}
	/**
	 * Get refundDetails
	 * @return PPInvoiceTypePaymentRefundDetailsType
	 */
	public function getRefundDetails()
	{
		return $this->refundDetails;
	}
	/**
	 * Set invoiceURL
	 * @param string invoiceURL
	 * @return string
	 */
	public function setInvoiceURL($_invoiceURL)
	{
		return ($this->invoiceURL = $_invoiceURL);
	}
	/**
	 * Get invoiceURL
	 * @return string
	 */
	public function getInvoiceURL()
	{
		return $this->invoiceURL;
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