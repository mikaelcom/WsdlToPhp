<?php
/**
 * Class file for PPInvoiceTypeSendInvoiceResponse
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeSendInvoiceResponse
 * Documentation : The response object for SendInvoice.
 * @date 02/07/2012
 */
class PPInvoiceTypeSendInvoiceResponse extends PPInvoiceWsdlClass
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
	 * 	- documentation : The sent invoice's ID.
	 * @var string
	 */
	public $invoiceID;
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
	 * @param string invoiceID
	 * @param string invoiceURL
	 * @return PPInvoiceTypeSendInvoiceResponse
	 */
	public function __construct($_responseEnvelope,$_invoiceID,$_invoiceURL)
	{
		parent::__construct(array('responseEnvelope'=>$_responseEnvelope,'invoiceID'=>$_invoiceID,'invoiceURL'=>$_invoiceURL));
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