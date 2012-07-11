<?php
/**
 * Class file for PPInvoiceTypeInvoiceType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeInvoiceType
 * Documentation : Invoice details about the merchant, payer, totals and terms.
 * @date 02/07/2012
 */
class PPInvoiceTypeInvoiceType extends PPInvoiceWsdlClass
{
	/**
	 * The merchantEmail
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Merchant's email.
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
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Unique identifier for the invoice.
	 * @var string
	 */
	public $number;
	/**
	 * The merchantInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Company contact information of the merchant company sending the invoice.
	 * @var PPInvoiceTypeBusinessInfoType
	 */
	public $merchantInfo;
	/**
	 * The itemList
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : List of items included in this invoice.
	 * @var PPInvoiceTypeInvoiceItemListType
	 */
	public $itemList;
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
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date on which the invoice will be enabled.
	 * @var dateTime
	 */
	public $invoiceDate;
	/**
	 * The dueDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date on which the invoice payment is due.
	 * @var dateTime
	 */
	public $dueDate;
	/**
	 * The paymentTerms
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Terms by which the invoice payment is due.
	 * @var PPInvoiceTypePaymentTermsType
	 */
	public $paymentTerms;
	/**
	 * The discountPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : A discount percent applied to the invoice, if any.
	 * @var decimal
	 */
	public $discountPercent;
	/**
	 * The discountAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : A discount amount applied to the invoice, if any. If DiscountPercent is provided, DiscountAmount is ignored.
	 * @var decimal
	 */
	public $discountAmount;
	/**
	 * The terms
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : General terms for the invoice.
	 * @var string
	 */
	public $terms;
	/**
	 * The note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Note to the payer company.
	 * @var string
	 */
	public $note;
	/**
	 * The merchantMemo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Memo for book keeping that is private to the Merchant.
	 * @var string
	 */
	public $merchantMemo;
	/**
	 * The billingInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Billing information for the payer.
	 * @var PPInvoiceTypeBusinessInfoType
	 */
	public $billingInfo;
	/**
	 * The shippingInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Shipping information for the payer.
	 * @var PPInvoiceTypeBusinessInfoType
	 */
	public $shippingInfo;
	/**
	 * The shippingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Cost of shipping.
	 * @var decimal
	 */
	public $shippingAmount;
	/**
	 * The shippingTaxName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Name of the applicable tax on shipping cost, if any.
	 * @var string
	 */
	public $shippingTaxName;
	/**
	 * The shippingTaxRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Rate of the applicable tax on shipping cost, if any.
	 * @var decimal
	 */
	public $shippingTaxRate;
	/**
	 * The logoUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The external image URL of the invoice's logo, if any
	 * @var string
	 */
	public $logoUrl;
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
	 * The customAmountLabel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Label used to display custom amount value. If a value is entered for customAmountLabel, then customAmountValue cannot be empty.
	 * @var string
	 */
	public $customAmountLabel;
	/**
	 * The customAmountValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Value of custom amount. If a value is entered for customAmountValue, then customAmountLabel cannot be empty.
	 * @var decimal
	 */
	public $customAmountValue;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string merchantEmail
	 * @param string payerEmail
	 * @param string number
	 * @param PPInvoiceTypeBusinessInfoType merchantInfo
	 * @param PPInvoiceTypeInvoiceItemListType itemList
	 * @param string currencyCode
	 * @param dateTime invoiceDate
	 * @param dateTime dueDate
	 * @param PPInvoiceTypePaymentTermsType paymentTerms
	 * @param decimal discountPercent
	 * @param decimal discountAmount
	 * @param string terms
	 * @param string note
	 * @param string merchantMemo
	 * @param PPInvoiceTypeBusinessInfoType billingInfo
	 * @param PPInvoiceTypeBusinessInfoType shippingInfo
	 * @param decimal shippingAmount
	 * @param string shippingTaxName
	 * @param decimal shippingTaxRate
	 * @param string logoUrl
	 * @param PPInvoiceTypeReferrerCode referrerCode
	 * @param string customAmountLabel
	 * @param decimal customAmountValue
	 * @param DOMDocument any
	 * @return PPInvoiceTypeInvoiceType
	 */
	public function __construct($_merchantEmail,$_payerEmail,$_number = null,$_merchantInfo = null,$_itemList,$_currencyCode,$_invoiceDate = null,$_dueDate = null,$_paymentTerms,$_discountPercent = null,$_discountAmount = null,$_terms = null,$_note = null,$_merchantMemo = null,$_billingInfo = null,$_shippingInfo = null,$_shippingAmount = null,$_shippingTaxName = null,$_shippingTaxRate = null,$_logoUrl = null,$_referrerCode = null,$_customAmountLabel = null,$_customAmountValue = null,$_any = null)
	{
		parent::__construct(array('merchantEmail'=>$_merchantEmail,'payerEmail'=>$_payerEmail,'number'=>$_number,'merchantInfo'=>$_merchantInfo,'itemList'=>$_itemList,'currencyCode'=>$_currencyCode,'invoiceDate'=>$_invoiceDate,'dueDate'=>$_dueDate,'paymentTerms'=>$_paymentTerms,'discountPercent'=>$_discountPercent,'discountAmount'=>$_discountAmount,'terms'=>$_terms,'note'=>$_note,'merchantMemo'=>$_merchantMemo,'billingInfo'=>$_billingInfo,'shippingInfo'=>$_shippingInfo,'shippingAmount'=>$_shippingAmount,'shippingTaxName'=>$_shippingTaxName,'shippingTaxRate'=>$_shippingTaxRate,'logoUrl'=>$_logoUrl,'referrerCode'=>$_referrerCode,'customAmountLabel'=>$_customAmountLabel,'customAmountValue'=>$_customAmountValue,'any'=>$_any));
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
	 * Set merchantInfo
	 * @param BusinessInfoType merchantInfo
	 * @return BusinessInfoType
	 */
	public function setMerchantInfo($_merchantInfo)
	{
		return ($this->merchantInfo = $_merchantInfo);
	}
	/**
	 * Get merchantInfo
	 * @return PPInvoiceTypeBusinessInfoType
	 */
	public function getMerchantInfo()
	{
		return $this->merchantInfo;
	}
	/**
	 * Set itemList
	 * @param InvoiceItemListType itemList
	 * @return InvoiceItemListType
	 */
	public function setItemList($_itemList)
	{
		return ($this->itemList = $_itemList);
	}
	/**
	 * Get itemList
	 * @return PPInvoiceTypeInvoiceItemListType
	 */
	public function getItemList()
	{
		return $this->itemList;
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
	 * Set paymentTerms
	 * @param PaymentTermsType paymentTerms
	 * @return PaymentTermsType
	 */
	public function setPaymentTerms($_paymentTerms)
	{
		return ($this->paymentTerms = PPInvoiceTypePaymentTermsType::valueIsValid($_paymentTerms)?$_paymentTerms:null);
	}
	/**
	 * Get paymentTerms
	 * @return PPInvoiceTypePaymentTermsType
	 */
	public function getPaymentTerms()
	{
		return $this->paymentTerms;
	}
	/**
	 * Set discountPercent
	 * @param decimal discountPercent
	 * @return decimal
	 */
	public function setDiscountPercent($_discountPercent)
	{
		return ($this->discountPercent = $_discountPercent);
	}
	/**
	 * Get discountPercent
	 * @return decimal
	 */
	public function getDiscountPercent()
	{
		return $this->discountPercent;
	}
	/**
	 * Set discountAmount
	 * @param decimal discountAmount
	 * @return decimal
	 */
	public function setDiscountAmount($_discountAmount)
	{
		return ($this->discountAmount = $_discountAmount);
	}
	/**
	 * Get discountAmount
	 * @return decimal
	 */
	public function getDiscountAmount()
	{
		return $this->discountAmount;
	}
	/**
	 * Set terms
	 * @param string terms
	 * @return string
	 */
	public function setTerms($_terms)
	{
		return ($this->terms = $_terms);
	}
	/**
	 * Get terms
	 * @return string
	 */
	public function getTerms()
	{
		return $this->terms;
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
	 * Set merchantMemo
	 * @param string merchantMemo
	 * @return string
	 */
	public function setMerchantMemo($_merchantMemo)
	{
		return ($this->merchantMemo = $_merchantMemo);
	}
	/**
	 * Get merchantMemo
	 * @return string
	 */
	public function getMerchantMemo()
	{
		return $this->merchantMemo;
	}
	/**
	 * Set billingInfo
	 * @param BusinessInfoType billingInfo
	 * @return BusinessInfoType
	 */
	public function setBillingInfo($_billingInfo)
	{
		return ($this->billingInfo = $_billingInfo);
	}
	/**
	 * Get billingInfo
	 * @return PPInvoiceTypeBusinessInfoType
	 */
	public function getBillingInfo()
	{
		return $this->billingInfo;
	}
	/**
	 * Set shippingInfo
	 * @param BusinessInfoType shippingInfo
	 * @return BusinessInfoType
	 */
	public function setShippingInfo($_shippingInfo)
	{
		return ($this->shippingInfo = $_shippingInfo);
	}
	/**
	 * Get shippingInfo
	 * @return PPInvoiceTypeBusinessInfoType
	 */
	public function getShippingInfo()
	{
		return $this->shippingInfo;
	}
	/**
	 * Set shippingAmount
	 * @param decimal shippingAmount
	 * @return decimal
	 */
	public function setShippingAmount($_shippingAmount)
	{
		return ($this->shippingAmount = $_shippingAmount);
	}
	/**
	 * Get shippingAmount
	 * @return decimal
	 */
	public function getShippingAmount()
	{
		return $this->shippingAmount;
	}
	/**
	 * Set shippingTaxName
	 * @param string shippingTaxName
	 * @return string
	 */
	public function setShippingTaxName($_shippingTaxName)
	{
		return ($this->shippingTaxName = $_shippingTaxName);
	}
	/**
	 * Get shippingTaxName
	 * @return string
	 */
	public function getShippingTaxName()
	{
		return $this->shippingTaxName;
	}
	/**
	 * Set shippingTaxRate
	 * @param decimal shippingTaxRate
	 * @return decimal
	 */
	public function setShippingTaxRate($_shippingTaxRate)
	{
		return ($this->shippingTaxRate = $_shippingTaxRate);
	}
	/**
	 * Get shippingTaxRate
	 * @return decimal
	 */
	public function getShippingTaxRate()
	{
		return $this->shippingTaxRate;
	}
	/**
	 * Set logoUrl
	 * @param string logoUrl
	 * @return string
	 */
	public function setLogoUrl($_logoUrl)
	{
		return ($this->logoUrl = $_logoUrl);
	}
	/**
	 * Get logoUrl
	 * @return string
	 */
	public function getLogoUrl()
	{
		return $this->logoUrl;
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
	 * Set customAmountLabel
	 * @param string customAmountLabel
	 * @return string
	 */
	public function setCustomAmountLabel($_customAmountLabel)
	{
		return ($this->customAmountLabel = $_customAmountLabel);
	}
	/**
	 * Get customAmountLabel
	 * @return string
	 */
	public function getCustomAmountLabel()
	{
		return $this->customAmountLabel;
	}
	/**
	 * Set customAmountValue
	 * @param decimal customAmountValue
	 * @return decimal
	 */
	public function setCustomAmountValue($_customAmountValue)
	{
		return ($this->customAmountValue = $_customAmountValue);
	}
	/**
	 * Get customAmountValue
	 * @return decimal
	 */
	public function getCustomAmountValue()
	{
		return $this->customAmountValue;
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