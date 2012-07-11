<?php
/**
 * Class file for PPInvoiceTypeCreateInvoiceRequest
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeCreateInvoiceRequest
 * Documentation : The request object for CreateInvoice.
 * @date 02/07/2012
 */
class PPInvoiceTypeCreateInvoiceRequest extends PPInvoiceWsdlClass
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
	 * @param PPInvoiceTypeInvoiceType invoice
	 * @return PPInvoiceTypeCreateInvoiceRequest
	 */
	public function __construct($_requestEnvelope,$_invoice)
	{
		parent::__construct(array('requestEnvelope'=>$_requestEnvelope,'invoice'=>$_invoice));
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