<?php
/**
 * Class file for PPInvoiceTypeInvoiceSummaryType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeInvoiceSummaryType
 * Documentation : Summary of invoice information.
 * @date 02/07/2012
 */
class PPInvoiceTypeInvoiceSummaryType extends PPInvoiceWsdlClass
{
	/**
	 * The invoiceID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The created invoice's ID.
	 * @var string
	 */
	public $invoiceID;
	/**
	 * The merchantEmail
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice creator's email.
	 * @var string
	 */
	public $merchantEmail;
	/**
	 * The payerEmail
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Email to which the invoice will be sent.
	 * @var string
	 */
	public $payerEmail;
	/**
	 * The number
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Unique identifier for the invoice.
	 * @var string
	 */
	public $number;
	/**
	 * The billingBusinessName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Business name of the billing info.
	 * @var string
	 */
	public $billingBusinessName;
	/**
	 * The billingFirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : First name of the billing info.
	 * @var string
	 */
	public $billingFirstName;
	/**
	 * The billingLastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Last name of the billing info.
	 * @var string
	 */
	public $billingLastName;
	/**
	 * The shippingBusinessName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Business name of the shipping info.
	 * @var string
	 */
	public $shippingBusinessName;
	/**
	 * The shippingFirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : First name of the shipping info.
	 * @var string
	 */
	public $shippingFirstName;
	/**
	 * The shippingLastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Last name of the shipping info.
	 * @var string
	 */
	public $shippingLastName;
	/**
	 * The totalAmount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Total amount of the invoice.
	 * @var decimal
	 */
	public $totalAmount;
	/**
	 * The currencyCode
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Currency used for all invoice item amounts and totals.
	 * @var string
	 */
	public $currencyCode;
	/**
	 * The invoiceDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Date on which the invoice will be enabled.
	 * @var dateTime
	 */
	public $invoiceDate;
	/**
	 * The dueDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Date on which the invoice payment is due.
	 * @var dateTime
	 */
	public $dueDate;
	/**
	 * The status
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Status of the invoice.
	 * @var PPInvoiceTypeStatusType
	 */
	public $status;
	/**
	 * The origin
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Whether the invoice was created via the website or via an API call.
	 * @var PPInvoiceTypeOriginType
	 */
	public $origin;
	/**
	 * The referrerCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : BN code for tracking transactions with a particular partner.
	 * @var PPInvoiceTypeReferrerCode
	 */
	public $referrerCode;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string invoiceID
	 * @param string merchantEmail
	 * @param string payerEmail
	 * @param string number
	 * @param string billingBusinessName
	 * @param string billingFirstName
	 * @param string billingLastName
	 * @param string shippingBusinessName
	 * @param string shippingFirstName
	 * @param string shippingLastName
	 * @param decimal totalAmount
	 * @param string currencyCode
	 * @param dateTime invoiceDate
	 * @param dateTime dueDate
	 * @param PPInvoiceTypeStatusType status
	 * @param PPInvoiceTypeOriginType origin
	 * @param PPInvoiceTypeReferrerCode referrerCode
	 * @param DOMDocument any
	 * @return PPInvoiceTypeInvoiceSummaryType
	 */
	public function __construct($_invoiceID,$_merchantEmail,$_payerEmail,$_number,$_billingBusinessName = null,$_billingFirstName = null,$_billingLastName = null,$_shippingBusinessName = null,$_shippingFirstName = null,$_shippingLastName = null,$_totalAmount,$_currencyCode,$_invoiceDate,$_dueDate,$_status,$_origin,$_referrerCode = null,$_any = null)
	{
		parent::__construct(array('invoiceID'=>$_invoiceID,'merchantEmail'=>$_merchantEmail,'payerEmail'=>$_payerEmail,'number'=>$_number,'billingBusinessName'=>$_billingBusinessName,'billingFirstName'=>$_billingFirstName,'billingLastName'=>$_billingLastName,'shippingBusinessName'=>$_shippingBusinessName,'shippingFirstName'=>$_shippingFirstName,'shippingLastName'=>$_shippingLastName,'totalAmount'=>$_totalAmount,'currencyCode'=>$_currencyCode,'invoiceDate'=>$_invoiceDate,'dueDate'=>$_dueDate,'status'=>$_status,'origin'=>$_origin,'referrerCode'=>$_referrerCode,'any'=>$_any));
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
	 * Set merchantEmail
	 * @param string merchantEmail
	 * @return string
	 */
	public function setMerchantEmail($_merchantEmail)
	{
		return ($this->merchantEmail = $_merchantEmail);
	}
	/**
	 * Get merchantEmail
	 * @return string
	 */
	public function getMerchantEmail()
	{
		return $this->merchantEmail;
	}
	/**
	 * Set payerEmail
	 * @param string payerEmail
	 * @return string
	 */
	public function setPayerEmail($_payerEmail)
	{
		return ($this->payerEmail = $_payerEmail);
	}
	/**
	 * Get payerEmail
	 * @return string
	 */
	public function getPayerEmail()
	{
		return $this->payerEmail;
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set billingBusinessName
	 * @param string billingBusinessName
	 * @return string
	 */
	public function setBillingBusinessName($_billingBusinessName)
	{
		return ($this->billingBusinessName = $_billingBusinessName);
	}
	/**
	 * Get billingBusinessName
	 * @return string
	 */
	public function getBillingBusinessName()
	{
		return $this->billingBusinessName;
	}
	/**
	 * Set billingFirstName
	 * @param string billingFirstName
	 * @return string
	 */
	public function setBillingFirstName($_billingFirstName)
	{
		return ($this->billingFirstName = $_billingFirstName);
	}
	/**
	 * Get billingFirstName
	 * @return string
	 */
	public function getBillingFirstName()
	{
		return $this->billingFirstName;
	}
	/**
	 * Set billingLastName
	 * @param string billingLastName
	 * @return string
	 */
	public function setBillingLastName($_billingLastName)
	{
		return ($this->billingLastName = $_billingLastName);
	}
	/**
	 * Get billingLastName
	 * @return string
	 */
	public function getBillingLastName()
	{
		return $this->billingLastName;
	}
	/**
	 * Set shippingBusinessName
	 * @param string shippingBusinessName
	 * @return string
	 */
	public function setShippingBusinessName($_shippingBusinessName)
	{
		return ($this->shippingBusinessName = $_shippingBusinessName);
	}
	/**
	 * Get shippingBusinessName
	 * @return string
	 */
	public function getShippingBusinessName()
	{
		return $this->shippingBusinessName;
	}
	/**
	 * Set shippingFirstName
	 * @param string shippingFirstName
	 * @return string
	 */
	public function setShippingFirstName($_shippingFirstName)
	{
		return ($this->shippingFirstName = $_shippingFirstName);
	}
	/**
	 * Get shippingFirstName
	 * @return string
	 */
	public function getShippingFirstName()
	{
		return $this->shippingFirstName;
	}
	/**
	 * Set shippingLastName
	 * @param string shippingLastName
	 * @return string
	 */
	public function setShippingLastName($_shippingLastName)
	{
		return ($this->shippingLastName = $_shippingLastName);
	}
	/**
	 * Get shippingLastName
	 * @return string
	 */
	public function getShippingLastName()
	{
		return $this->shippingLastName;
	}
	/**
	 * Set totalAmount
	 * @param decimal totalAmount
	 * @return decimal
	 */
	public function setTotalAmount($_totalAmount)
	{
		return ($this->totalAmount = $_totalAmount);
	}
	/**
	 * Get totalAmount
	 * @return decimal
	 */
	public function getTotalAmount()
	{
		return $this->totalAmount;
	}
	/**
	 * Set currencyCode
	 * @param string currencyCode
	 * @return string
	 */
	public function setCurrencyCode($_currencyCode)
	{
		return ($this->currencyCode = $_currencyCode);
	}
	/**
	 * Get currencyCode
	 * @return string
	 */
	public function getCurrencyCode()
	{
		return $this->currencyCode;
	}
	/**
	 * Set invoiceDate
	 * @param dateTime invoiceDate
	 * @return dateTime
	 */
	public function setInvoiceDate($_invoiceDate)
	{
		return ($this->invoiceDate = $_invoiceDate);
	}
	/**
	 * Get invoiceDate
	 * @return dateTime
	 */
	public function getInvoiceDate()
	{
		return $this->invoiceDate;
	}
	/**
	 * Set dueDate
	 * @param dateTime dueDate
	 * @return dateTime
	 */
	public function setDueDate($_dueDate)
	{
		return ($this->dueDate = $_dueDate);
	}
	/**
	 * Get dueDate
	 * @return dateTime
	 */
	public function getDueDate()
	{
		return $this->dueDate;
	}
	/**
	 * Set status
	 * @param StatusType status
	 * @return StatusType
	 */
	public function setStatus($_status)
	{
		return ($this->status = PPInvoiceTypeStatusType::valueIsValid($_status)?$_status:null);
	}
	/**
	 * Get status
	 * @return PPInvoiceTypeStatusType
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set origin
	 * @param OriginType origin
	 * @return OriginType
	 */
	public function setOrigin($_origin)
	{
		return ($this->origin = PPInvoiceTypeOriginType::valueIsValid($_origin)?$_origin:null);
	}
	/**
	 * Get origin
	 * @return PPInvoiceTypeOriginType
	 */
	public function getOrigin()
	{
		return $this->origin;
	}
	/**
	 * Set referrerCode
	 * @param ReferrerCode referrerCode
	 * @return ReferrerCode
	 */
	public function setReferrerCode($_referrerCode)
	{
		return ($this->referrerCode = PPInvoiceTypeReferrerCode::valueIsValid($_referrerCode)?$_referrerCode:null);
	}
	/**
	 * Get referrerCode
	 * @return PPInvoiceTypeReferrerCode
	 */
	public function getReferrerCode()
	{
		return $this->referrerCode;
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