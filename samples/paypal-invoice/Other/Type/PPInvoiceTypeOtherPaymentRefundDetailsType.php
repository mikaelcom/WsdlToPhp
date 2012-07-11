<?php
/**
 * Class file for PPInvoiceTypeOtherPaymentRefundDetailsType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeOtherPaymentRefundDetailsType
 * Documentation : Details of the refund made against this invoice.
 * @date 02/07/2012
 */
class PPInvoiceTypeOtherPaymentRefundDetailsType extends PPInvoiceWsdlClass
{
	/**
	 * The note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Optional note associated with the refund.
	 * @var string
	 */
	public $note;
	/**
	 * The date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date when the invoice was marked as refunded. If the date is not specified, the current date and time is used as a default. In addition, the date must be after the payment date of the invoice.
	 * @var dateTime
	 */
	public $date;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string note
	 * @param dateTime date
	 * @param DOMDocument any
	 * @return PPInvoiceTypeOtherPaymentRefundDetailsType
	 */
	public function __construct($_note = null,$_date = null,$_any = null)
	{
		parent::__construct(array('note'=>$_note,'date'=>$_date,'any'=>$_any));
	}
	/**
	 * Set note
	 * @param string note
	 * @return string
	 */
	public function setNote($_note)
	{
		return ($this->note = $_note);
	}
	/**
	 * Get note
	 * @return string
	 */
	public function getNote()
	{
		return $this->note;
	}
	/**
	 * Set date
	 * @param dateTime date
	 * @return dateTime
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return dateTime
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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