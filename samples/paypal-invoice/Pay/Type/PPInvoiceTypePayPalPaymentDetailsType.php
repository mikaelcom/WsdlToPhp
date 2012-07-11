<?php
/**
 * Class file for PPInvoiceTypePayPalPaymentDetailsType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypePayPalPaymentDetailsType
 * Documentation : PayPal payment details about the invoice.
 * @date 02/07/2012
 */
class PPInvoiceTypePayPalPaymentDetailsType extends PPInvoiceWsdlClass
{
	/**
	 * The transactionID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Transaction ID of the PayPal payment.
	 * @var string
	 */
	public $transactionID;
	/**
	 * The date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date when the invoice was paid.
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
	 * @param string transactionID
	 * @param dateTime date
	 * @param DOMDocument any
	 * @return PPInvoiceTypePayPalPaymentDetailsType
	 */
	public function __construct($_transactionID,$_date = null,$_any = null)
	{
		parent::__construct(array('transactionID'=>$_transactionID,'date'=>$_date,'any'=>$_any));
	}
	/**
	 * Set transactionID
	 * @param string transactionID
	 * @return string
	 */
	public function setTransactionID($_transactionID)
	{
		return ($this->transactionID = $_transactionID);
	}
	/**
	 * Get transactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->transactionID;
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