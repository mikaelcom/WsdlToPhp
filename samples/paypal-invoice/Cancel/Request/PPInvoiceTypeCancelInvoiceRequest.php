<?php
/**
 * Class file for PPInvoiceTypeCancelInvoiceRequest
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeCancelInvoiceRequest
 * Documentation : The request object for CancelInvoice.
 * @date 02/07/2012
 */
class PPInvoiceTypeCancelInvoiceRequest extends PPInvoiceWsdlClass
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
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : invoice's ID
	 * @var string
	 */
	public $invoiceID;
	/**
	 * The subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Subject of the cancellation notification
	 * @var string
	 */
	public $subject;
	/**
	 * The noteForPayer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Note to send payer within the cancellation notification
	 * @var string
	 */
	public $noteForPayer;
	/**
	 * The sendCopyToMerchant
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : send a copy of cancellation notification to merchant
	 * @var boolean
	 */
	public $sendCopyToMerchant;
	/**
	 * Constructor
	 * @param PPInvoiceTypeRequestEnvelope requestEnvelope
	 * @param string invoiceID
	 * @param string subject
	 * @param string noteForPayer
	 * @param boolean sendCopyToMerchant
	 * @return PPInvoiceTypeCancelInvoiceRequest
	 */
	public function __construct($_requestEnvelope,$_invoiceID = null,$_subject = null,$_noteForPayer = null,$_sendCopyToMerchant = null)
	{
		parent::__construct(array('requestEnvelope'=>$_requestEnvelope,'invoiceID'=>$_invoiceID,'subject'=>$_subject,'noteForPayer'=>$_noteForPayer,'sendCopyToMerchant'=>$_sendCopyToMerchant));
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
	 * Set subject
	 * @param string subject
	 * @return string
	 */
	public function setSubject($_subject)
	{
		return ($this->subject = $_subject);
	}
	/**
	 * Get subject
	 * @return string
	 */
	public function getSubject()
	{
		return $this->subject;
	}
	/**
	 * Set noteForPayer
	 * @param string noteForPayer
	 * @return string
	 */
	public function setNoteForPayer($_noteForPayer)
	{
		return ($this->noteForPayer = $_noteForPayer);
	}
	/**
	 * Get noteForPayer
	 * @return string
	 */
	public function getNoteForPayer()
	{
		return $this->noteForPayer;
	}
	/**
	 * Set sendCopyToMerchant
	 * @param boolean sendCopyToMerchant
	 * @return boolean
	 */
	public function setSendCopyToMerchant($_sendCopyToMerchant)
	{
		return ($this->sendCopyToMerchant = $_sendCopyToMerchant);
	}
	/**
	 * Get sendCopyToMerchant
	 * @return boolean
	 */
	public function getSendCopyToMerchant()
	{
		return $this->sendCopyToMerchant;
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