<?php
/**
 * Class file for PPInvoiceTypeUpdateInvoiceRequest
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeUpdateInvoiceRequest
 * Documentation : The request object for UpdateInvoice.
 * @date 02/07/2012
 */
class PPInvoiceTypeUpdateInvoiceRequest extends PPInvoiceWsdlClass
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
	 * 	- documentation : invoice's ID
	 * @var string
	 */
	public $invoiceID;
	/**
	 * The invoice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Data to populate the newly created invoice.
	 * @var PPInvoiceTypeInvoiceType
	 */
	public $invoice;
	/**
	 * Constructor
	 * @param PPInvoiceTypeRequestEnvelope requestEnvelope
	 * @param string invoiceID
	 * @param PPInvoiceTypeInvoiceType invoice
	 * @return PPInvoiceTypeUpdateInvoiceRequest
	 */
	public function __construct($_requestEnvelope,$_invoiceID,$_invoice)
	{
		parent::__construct(array('requestEnvelope'=>$_requestEnvelope,'invoiceID'=>$_invoiceID,'invoice'=>$_invoice));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>