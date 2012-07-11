<?php
/**
 * Class file for PPInvoiceTypeOtherPaymentDetailsType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeOtherPaymentDetailsType
 * Documentation : Offline payment details about the invoice.
 * @date 02/07/2012
 */
class PPInvoiceTypeOtherPaymentDetailsType extends PPInvoiceWsdlClass
{
	/**
	 * The method
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Method used for the offline payment.
	 * @var PPInvoiceTypePaymentMethodsType
	 */
	public $method;
	/**
	 * The note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Optional note associated with the payment.
	 * @var string
	 */
	public $note;
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
	 * @param PPInvoiceTypePaymentMethodsType method
	 * @param string note
	 * @param dateTime date
	 * @param DOMDocument any
	 * @return PPInvoiceTypeOtherPaymentDetailsType
	 */
	public function __construct($_method = null,$_note = null,$_date = null,$_any = null)
	{
		parent::__construct(array('method'=>$_method,'note'=>$_note,'date'=>$_date,'any'=>$_any));
	}
	/**
	 * Set method
	 * @param PaymentMethodsType method
	 * @return PaymentMethodsType
	 */
	public function setMethod($_method)
	{
		return ($this->method = PPInvoiceTypePaymentMethodsType::valueIsValid($_method)?$_method:null);
	}
	/**
	 * Get method
	 * @return PPInvoiceTypePaymentMethodsType
	 */
	public function getMethod()
	{
		return $this->method;
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