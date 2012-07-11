<?php
/**
 * Class file for PPInvoiceTypeMarkInvoiceAsRefundedResponse
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeMarkInvoiceAsRefundedResponse
 * Documentation : The response object for MarkInvoiceAsRefunded.
 * @date 02/07/2012
 */
class PPInvoiceTypeMarkInvoiceAsRefundedResponse extends PPInvoiceWsdlClass
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
	 * The invoiceID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The invoice ID of the invoice that was marked as refunded.
	 * @var string
	 */
	public $invoiceID;
	/**
	 * The invoiceNumber
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The invoice number of the invoice that was marked as refunded.
	 * @var string
	 */
	public $invoiceNumber;
	/**
	 * The invoiceURL
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The URL of the details page of the invoice that was marked as refunded.
	 * @var string
	 */
	public $invoiceURL;
	/**
	 * Constructor
	 * @param PPInvoiceTypeResponseEnvelope responseEnvelope
	 * @param string invoiceID
	 * @param string invoiceNumber
	 * @param string invoiceURL
	 * @return PPInvoiceTypeMarkInvoiceAsRefundedResponse
	 */
	public function __construct($_responseEnvelope,$_invoiceID,$_invoiceNumber,$_invoiceURL)
	{
		parent::__construct(array('responseEnvelope'=>$_responseEnvelope,'invoiceID'=>$_invoiceID,'invoiceNumber'=>$_invoiceNumber,'invoiceURL'=>$_invoiceURL));
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
	 * Set invoiceNumber
	 * @param string invoiceNumber
	 * @return string
	 */
	public function setInvoiceNumber($_invoiceNumber)
	{
		return ($this->invoiceNumber = $_invoiceNumber);
	}
	/**
	 * Get invoiceNumber
	 * @return string
	 */
	public function getInvoiceNumber()
	{
		return $this->invoiceNumber;
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