<?php
/**
 * Class file for PPInvoiceTypeSendInvoiceRequest
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeSendInvoiceRequest
 * Documentation : The request object for SendInvoice.
 * @date 02/07/2012
 */
class PPInvoiceTypeSendInvoiceRequest extends PPInvoiceWsdlClass
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
	 * 	- documentation : ID of the invoice to send.
	 * @var string
	 */
	public $invoiceID;
	/**
	 * Constructor
	 * @param PPInvoiceTypeRequestEnvelope requestEnvelope
	 * @param string invoiceID
	 * @return PPInvoiceTypeSendInvoiceRequest
	 */
	public function __construct($_requestEnvelope,$_invoiceID)
	{
		parent::__construct(array('requestEnvelope'=>$_requestEnvelope,'invoiceID'=>$_invoiceID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>