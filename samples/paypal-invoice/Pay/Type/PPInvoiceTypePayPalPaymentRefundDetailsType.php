<?php
/**
 * Class file for PPInvoiceTypePayPalPaymentRefundDetailsType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypePayPalPaymentRefundDetailsType
 * Documentation : Details of the paypal refund made against this invoice.
 * @date 02/07/2012
 */
class PPInvoiceTypePayPalPaymentRefundDetailsType extends PPInvoiceWsdlClass
{
	/**
	 * The date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date when the invoice was marked as refunded by PayPal.
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
	 * @param dateTime date
	 * @param DOMDocument any
	 * @return PPInvoiceTypePayPalPaymentRefundDetailsType
	 */
	public function __construct($_date = null,$_any = null)
	{
		parent::__construct(array('date'=>$_date,'any'=>$_any));
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