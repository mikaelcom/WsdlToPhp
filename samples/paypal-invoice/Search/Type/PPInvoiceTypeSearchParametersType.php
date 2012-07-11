<?php
/**
 * Class file for PPInvoiceTypeSearchParametersType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeSearchParametersType
 * Documentation : Search parameters criteria.
 * @date 02/07/2012
 */
class PPInvoiceTypeSearchParametersType extends PPInvoiceWsdlClass
{
	/**
	 * The email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Email search string.
	 * @var string
	 */
	public $email;
	/**
	 * The recipientName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Recipient search string.
	 * @var string
	 */
	public $recipientName;
	/**
	 * The businessName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Company search string.
	 * @var string
	 */
	public $businessName;
	/**
	 * The invoiceNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice number search string.
	 * @var string
	 */
	public $invoiceNumber;
	/**
	 * The status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 10
	 * 	- documentation : Invoice status search.
	 * @var PPInvoiceTypeStatusType
	 */
	public $status;
	/**
	 * The lowerAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice amount search. Specifies the smallest amount to be returned.
	 * @var decimal
	 */
	public $lowerAmount;
	/**
	 * The upperAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice amount search. Specifies the largest amount to be returned.
	 * @var decimal
	 */
	public $upperAmount;
	/**
	 * The currencyCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Currency used for lower and upper amounts. Required when lowerAmount or upperAmount is specified.
	 * @var string
	 */
	public $currencyCode;
	/**
	 * The memo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice memo search string.
	 * @var string
	 */
	public $memo;
	/**
	 * The origin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Whether the invoice was created via the website or via an API call.
	 * @var PPInvoiceTypeOriginType
	 */
	public $origin;
	/**
	 * The invoiceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice date range filter.
	 * @var PPInvoiceTypeDateRangeType
	 */
	public $invoiceDate;
	/**
	 * The dueDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice due date range filter.
	 * @var PPInvoiceTypeDateRangeType
	 */
	public $dueDate;
	/**
	 * The paymentDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice payment date range filter.
	 * @var PPInvoiceTypeDateRangeType
	 */
	public $paymentDate;
	/**
	 * The creationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice creation date range filter.
	 * @var PPInvoiceTypeDateRangeType
	 */
	public $creationDate;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string email
	 * @param string recipientName
	 * @param string businessName
	 * @param string invoiceNumber
	 * @param PPInvoiceTypeStatusType status
	 * @param decimal lowerAmount
	 * @param decimal upperAmount
	 * @param string currencyCode
	 * @param string memo
	 * @param PPInvoiceTypeOriginType origin
	 * @param PPInvoiceTypeDateRangeType invoiceDate
	 * @param PPInvoiceTypeDateRangeType dueDate
	 * @param PPInvoiceTypeDateRangeType paymentDate
	 * @param PPInvoiceTypeDateRangeType creationDate
	 * @param DOMDocument any
	 * @return PPInvoiceTypeSearchParametersType
	 */
	public function __construct($_email = null,$_recipientName = null,$_businessName = null,$_invoiceNumber = null,$_status = null,$_lowerAmount = null,$_upperAmount = null,$_currencyCode = null,$_memo = null,$_origin = null,$_invoiceDate = null,$_dueDate = null,$_paymentDate = null,$_creationDate = null,$_any = null)
	{
		parent::__construct(array('email'=>$_email,'recipientName'=>$_recipientName,'businessName'=>$_businessName,'invoiceNumber'=>$_invoiceNumber,'status'=>$_status,'lowerAmount'=>$_lowerAmount,'upperAmount'=>$_upperAmount,'currencyCode'=>$_currencyCode,'memo'=>$_memo,'origin'=>$_origin,'invoiceDate'=>$_invoiceDate,'dueDate'=>$_dueDate,'paymentDate'=>$_paymentDate,'creationDate'=>$_creationDate,'any'=>$_any));
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set recipientName
	 * @param string recipientName
	 * @return string
	 */
	public function setRecipientName($_recipientName)
	{
		return ($this->recipientName = $_recipientName);
	}
	/**
	 * Get recipientName
	 * @return string
	 */
	public function getRecipientName()
	{
		return $this->recipientName;
	}
	/**
	 * Set businessName
	 * @param string businessName
	 * @return string
	 */
	public function setBusinessName($_businessName)
	{
		return ($this->businessName = $_businessName);
	}
	/**
	 * Get businessName
	 * @return string
	 */
	public function getBusinessName()
	{
		return $this->businessName;
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
	 * Set lowerAmount
	 * @param decimal lowerAmount
	 * @return decimal
	 */
	public function setLowerAmount($_lowerAmount)
	{
		return ($this->lowerAmount = $_lowerAmount);
	}
	/**
	 * Get lowerAmount
	 * @return decimal
	 */
	public function getLowerAmount()
	{
		return $this->lowerAmount;
	}
	/**
	 * Set upperAmount
	 * @param decimal upperAmount
	 * @return decimal
	 */
	public function setUpperAmount($_upperAmount)
	{
		return ($this->upperAmount = $_upperAmount);
	}
	/**
	 * Get upperAmount
	 * @return decimal
	 */
	public function getUpperAmount()
	{
		return $this->upperAmount;
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
	 * Set memo
	 * @param string memo
	 * @return string
	 */
	public function setMemo($_memo)
	{
		return ($this->memo = $_memo);
	}
	/**
	 * Get memo
	 * @return string
	 */
	public function getMemo()
	{
		return $this->memo;
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
	 * Set invoiceDate
	 * @param DateRangeType invoiceDate
	 * @return DateRangeType
	 */
	public function setInvoiceDate($_invoiceDate)
	{
		return ($this->invoiceDate = $_invoiceDate);
	}
	/**
	 * Get invoiceDate
	 * @return PPInvoiceTypeDateRangeType
	 */
	public function getInvoiceDate()
	{
		return $this->invoiceDate;
	}
	/**
	 * Set dueDate
	 * @param DateRangeType dueDate
	 * @return DateRangeType
	 */
	public function setDueDate($_dueDate)
	{
		return ($this->dueDate = $_dueDate);
	}
	/**
	 * Get dueDate
	 * @return PPInvoiceTypeDateRangeType
	 */
	public function getDueDate()
	{
		return $this->dueDate;
	}
	/**
	 * Set paymentDate
	 * @param DateRangeType paymentDate
	 * @return DateRangeType
	 */
	public function setPaymentDate($_paymentDate)
	{
		return ($this->paymentDate = $_paymentDate);
	}
	/**
	 * Get paymentDate
	 * @return PPInvoiceTypeDateRangeType
	 */
	public function getPaymentDate()
	{
		return $this->paymentDate;
	}
	/**
	 * Set creationDate
	 * @param DateRangeType creationDate
	 * @return DateRangeType
	 */
	public function setCreationDate($_creationDate)
	{
		return ($this->creationDate = $_creationDate);
	}
	/**
	 * Get creationDate
	 * @return PPInvoiceTypeDateRangeType
	 */
	public function getCreationDate()
	{
		return $this->creationDate;
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