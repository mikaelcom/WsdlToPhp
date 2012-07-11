<?php
/**
 * Class file for EbayTradingTypeAccountSummaryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAccountSummaryType
 * Documentation : Summary data for the requesting user's seller account as a whole. This includes a balance for the account, any past due amount and date, and defining data for additional accounts (if the user has changed country of residency while having an active eBay account).
 * @date 04/07/2012
 */
class EbayTradingTypeAccountSummaryType extends EbayTradingWsdlClass
{
	/**
	 * The AccountState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the current state of the account (such as active or inactive). Possible values are enumerated in the AccountStateCodeType code list.
	 * @var EbayTradingTypeAccountStateCodeType
	 */
	public $AccountState;
	/**
	 * The InvoicePayment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies payment made since the previous invoice, but is returned only if AccountHistorySelection is LastInvoice or Specified Invoice. The value is positive for debits and negative for credits.
	 * @var EbayTradingTypeAmountType
	 */
	public $InvoicePayment;
	/**
	 * The InvoiceCredit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies credits granted since the previous invoice, but is only returned AccountHistorySelection is LastInvoice or Specified Invoice. The value is positive for debits and negative for credits.
	 * @var EbayTradingTypeAmountType
	 */
	public $InvoiceCredit;
	/**
	 * The InvoiceNewFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies fees incurred since the last invoice, including tax if applicable. Returned only if AccountHistorySelection is LastInvoice or Specified Invoice. The value is positive for debits and negative for credits.
	 * @var EbayTradingTypeAmountType
	 */
	public $InvoiceNewFee;
	/**
	 * The AdditionalAccount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the data for one additional account. An AccountSummaryType object may return zero, one, or multiple additional accounts. See the schema documentation for AdditionalAccountType for details on additional accounts. The value is positive for debits and negative for credits.
	 * @var EbayTradingTypeAdditionalAccountType
	 */
	public $AdditionalAccount;
	/**
	 * The AmountPastDue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount past due, 0.00 if not past due. The value is positive for debits and negative for credits.
	 * @var EbayTradingTypeAmountType
	 */
	public $AmountPastDue;
	/**
	 * The BankAccountInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : First four digits of the bank account the user associated with the seller account (with remainder Xed-out). This may be an empty string depending upon the payment type the user selected for the account (e.g., if no debit-card specified).
	 * @var string
	 */
	public $BankAccountInfo;
	/**
	 * The BankModifyDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the date and time BankAccountInfo was last modified, in GMT. (Also see the Data Types appendix for more information on how GMT dates are handled in SOAP.) This may be an empty string depending upon the payment type the user selected for the account (e.g., if no debit-card specified).
	 * @var dateTime
	 */
	public $BankModifyDate;
	/**
	 * The BillingCycleDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the billing cycle in which eBay sends a billing invoice to the user. A value of 0 (zero) indicates an invoice sent on the last day of the month. A value of 15 indicates an invoice sent on the 15th day of the month.
	 * @var int
	 */
	public $BillingCycleDate;
	/**
	 * The CreditCardExpiration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Expiration date for the credit card selected by the user as payment method for the account, in GMT. (Also see the Data Types appendix for more information on how GMT dates are handled in SOAP.) Empty string if no credit card is on file or if the account is inactive - even if there is a credit card on file.
	 * @var dateTime
	 */
	public $CreditCardExpiration;
	/**
	 * The CreditCardInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Last four digits of the credit card the user selected as payment method for the account. Empty string if no credit is on file.
	 * @var string
	 */
	public $CreditCardInfo;
	/**
	 * The CreditCardModifyDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the date and time credit card or credit card expiration date was last modified, in GMT. (Also see the Data Types appendix for more information on how GMT dates are handled in SOAP.) This may be an empty string depending on the payment method the user selected for the account (e.g., Empty string if no credit card is on file.)
	 * @var dateTime
	 */
	public $CreditCardModifyDate;
	/**
	 * The CurrentBalance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Current balance for the account. Can be 0.00, positive, or negative. The value is positive for debits and negative for credits.
	 * @var EbayTradingTypeAmountType
	 */
	public $CurrentBalance;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (out) Email address for the user. You cannot retrieve an email address for any user with whom you do not have a transactional relationship, regardless of site. Email is only returned for applicable calls when you are retrieving your own user data OR when you and the other user are in a transactional relationship and the call is being executed within a certain amount of time after the transaction is created.
	 * @var string
	 */
	public $Email;
	/**
	 * The InvoiceBalance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of last invoice. 0.00 if account not yet invoiced. The value is positive for debits and negative for credits.
	 * @var EbayTradingTypeAmountType
	 */
	public $InvoiceBalance;
	/**
	 * The InvoiceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date of last invoice sent by eBay to the user, in GMT. (Also see the Data Types appendix for more information on how GMT dates are handled in SOAP.) Empty string if this account has not been invoiced yet.
	 * @var dateTime
	 */
	public $InvoiceDate;
	/**
	 * The LastAmountPaid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of last payment posted, 0.00 if no payments posted. The value is positive for debits and negative for credits.
	 * @var EbayTradingTypeAmountType
	 */
	public $LastAmountPaid;
	/**
	 * The LastPaymentDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date of last payment by the user to eBay, in GMT. (Also see the Data Types appendix for more information on how GMT dates are handled in SOAP.) Empty string if no payments have been posted.
	 * @var dateTime
	 */
	public $LastPaymentDate;
	/**
	 * The PastDue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the account has past due amounts outstanding. A value of true indicates that the account is past due. A value of false indicates the account is current.
	 * @var boolean
	 */
	public $PastDue;
	/**
	 * The PaymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the method the user selected to pay eBay with for the account. The values for PaymentMethod vary from one global eBay site to the next. Payment methods are enumerated in the SellerPaymentMethodCodeType code list.
	 * @var EbayTradingTypeSellerPaymentMethodCodeType
	 */
	public $PaymentMethod;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAccountStateCodeType AccountState
	 * @param EbayTradingTypeAmountType InvoicePayment
	 * @param EbayTradingTypeAmountType InvoiceCredit
	 * @param EbayTradingTypeAmountType InvoiceNewFee
	 * @param EbayTradingTypeAdditionalAccountType AdditionalAccount
	 * @param EbayTradingTypeAmountType AmountPastDue
	 * @param string BankAccountInfo
	 * @param dateTime BankModifyDate
	 * @param int BillingCycleDate
	 * @param dateTime CreditCardExpiration
	 * @param string CreditCardInfo
	 * @param dateTime CreditCardModifyDate
	 * @param EbayTradingTypeAmountType CurrentBalance
	 * @param string Email
	 * @param EbayTradingTypeAmountType InvoiceBalance
	 * @param dateTime InvoiceDate
	 * @param EbayTradingTypeAmountType LastAmountPaid
	 * @param dateTime LastPaymentDate
	 * @param boolean PastDue
	 * @param EbayTradingTypeSellerPaymentMethodCodeType PaymentMethod
	 * @param DOMDocument any
	 * @return EbayTradingTypeAccountSummaryType
	 */
	public function __construct($_AccountState = null,$_InvoicePayment = null,$_InvoiceCredit = null,$_InvoiceNewFee = null,$_AdditionalAccount = null,$_AmountPastDue = null,$_BankAccountInfo = null,$_BankModifyDate = null,$_BillingCycleDate = null,$_CreditCardExpiration = null,$_CreditCardInfo = null,$_CreditCardModifyDate = null,$_CurrentBalance = null,$_Email = null,$_InvoiceBalance = null,$_InvoiceDate = null,$_LastAmountPaid = null,$_LastPaymentDate = null,$_PastDue = null,$_PaymentMethod = null,$_any = null)
	{
		parent::__construct(array('AccountState'=>$_AccountState,'InvoicePayment'=>$_InvoicePayment,'InvoiceCredit'=>$_InvoiceCredit,'InvoiceNewFee'=>$_InvoiceNewFee,'AdditionalAccount'=>$_AdditionalAccount,'AmountPastDue'=>$_AmountPastDue,'BankAccountInfo'=>$_BankAccountInfo,'BankModifyDate'=>$_BankModifyDate,'BillingCycleDate'=>$_BillingCycleDate,'CreditCardExpiration'=>$_CreditCardExpiration,'CreditCardInfo'=>$_CreditCardInfo,'CreditCardModifyDate'=>$_CreditCardModifyDate,'CurrentBalance'=>$_CurrentBalance,'Email'=>$_Email,'InvoiceBalance'=>$_InvoiceBalance,'InvoiceDate'=>$_InvoiceDate,'LastAmountPaid'=>$_LastAmountPaid,'LastPaymentDate'=>$_LastPaymentDate,'PastDue'=>$_PastDue,'PaymentMethod'=>$_PaymentMethod,'any'=>$_any));
	}
	/**
	 * Set AccountState
	 * @param AccountStateCodeType AccountState
	 * @return AccountStateCodeType
	 */
	public function setAccountState($_AccountState)
	{
		return ($this->AccountState = EbayTradingTypeAccountStateCodeType::valueIsValid($_AccountState)?$_AccountState:null);
	}
	/**
	 * Get AccountState
	 * @return EbayTradingTypeAccountStateCodeType
	 */
	public function getAccountState()
	{
		return $this->AccountState;
	}
	/**
	 * Set InvoicePayment
	 * @param AmountType InvoicePayment
	 * @return AmountType
	 */
	public function setInvoicePayment($_InvoicePayment)
	{
		return ($this->InvoicePayment = $_InvoicePayment);
	}
	/**
	 * Get InvoicePayment
	 * @return EbayTradingTypeAmountType
	 */
	public function getInvoicePayment()
	{
		return $this->InvoicePayment;
	}
	/**
	 * Set InvoiceCredit
	 * @param AmountType InvoiceCredit
	 * @return AmountType
	 */
	public function setInvoiceCredit($_InvoiceCredit)
	{
		return ($this->InvoiceCredit = $_InvoiceCredit);
	}
	/**
	 * Get InvoiceCredit
	 * @return EbayTradingTypeAmountType
	 */
	public function getInvoiceCredit()
	{
		return $this->InvoiceCredit;
	}
	/**
	 * Set InvoiceNewFee
	 * @param AmountType InvoiceNewFee
	 * @return AmountType
	 */
	public function setInvoiceNewFee($_InvoiceNewFee)
	{
		return ($this->InvoiceNewFee = $_InvoiceNewFee);
	}
	/**
	 * Get InvoiceNewFee
	 * @return EbayTradingTypeAmountType
	 */
	public function getInvoiceNewFee()
	{
		return $this->InvoiceNewFee;
	}
	/**
	 * Set AdditionalAccount
	 * @param AdditionalAccountType AdditionalAccount
	 * @return AdditionalAccountType
	 */
	public function setAdditionalAccount($_AdditionalAccount)
	{
		return ($this->AdditionalAccount = $_AdditionalAccount);
	}
	/**
	 * Get AdditionalAccount
	 * @return EbayTradingTypeAdditionalAccountType
	 */
	public function getAdditionalAccount()
	{
		return $this->AdditionalAccount;
	}
	/**
	 * Set AmountPastDue
	 * @param AmountType AmountPastDue
	 * @return AmountType
	 */
	public function setAmountPastDue($_AmountPastDue)
	{
		return ($this->AmountPastDue = $_AmountPastDue);
	}
	/**
	 * Get AmountPastDue
	 * @return EbayTradingTypeAmountType
	 */
	public function getAmountPastDue()
	{
		return $this->AmountPastDue;
	}
	/**
	 * Set BankAccountInfo
	 * @param string BankAccountInfo
	 * @return string
	 */
	public function setBankAccountInfo($_BankAccountInfo)
	{
		return ($this->BankAccountInfo = $_BankAccountInfo);
	}
	/**
	 * Get BankAccountInfo
	 * @return string
	 */
	public function getBankAccountInfo()
	{
		return $this->BankAccountInfo;
	}
	/**
	 * Set BankModifyDate
	 * @param dateTime BankModifyDate
	 * @return dateTime
	 */
	public function setBankModifyDate($_BankModifyDate)
	{
		return ($this->BankModifyDate = $_BankModifyDate);
	}
	/**
	 * Get BankModifyDate
	 * @return dateTime
	 */
	public function getBankModifyDate()
	{
		return $this->BankModifyDate;
	}
	/**
	 * Set BillingCycleDate
	 * @param int BillingCycleDate
	 * @return int
	 */
	public function setBillingCycleDate($_BillingCycleDate)
	{
		return ($this->BillingCycleDate = $_BillingCycleDate);
	}
	/**
	 * Get BillingCycleDate
	 * @return int
	 */
	public function getBillingCycleDate()
	{
		return $this->BillingCycleDate;
	}
	/**
	 * Set CreditCardExpiration
	 * @param dateTime CreditCardExpiration
	 * @return dateTime
	 */
	public function setCreditCardExpiration($_CreditCardExpiration)
	{
		return ($this->CreditCardExpiration = $_CreditCardExpiration);
	}
	/**
	 * Get CreditCardExpiration
	 * @return dateTime
	 */
	public function getCreditCardExpiration()
	{
		return $this->CreditCardExpiration;
	}
	/**
	 * Set CreditCardInfo
	 * @param string CreditCardInfo
	 * @return string
	 */
	public function setCreditCardInfo($_CreditCardInfo)
	{
		return ($this->CreditCardInfo = $_CreditCardInfo);
	}
	/**
	 * Get CreditCardInfo
	 * @return string
	 */
	public function getCreditCardInfo()
	{
		return $this->CreditCardInfo;
	}
	/**
	 * Set CreditCardModifyDate
	 * @param dateTime CreditCardModifyDate
	 * @return dateTime
	 */
	public function setCreditCardModifyDate($_CreditCardModifyDate)
	{
		return ($this->CreditCardModifyDate = $_CreditCardModifyDate);
	}
	/**
	 * Get CreditCardModifyDate
	 * @return dateTime
	 */
	public function getCreditCardModifyDate()
	{
		return $this->CreditCardModifyDate;
	}
	/**
	 * Set CurrentBalance
	 * @param AmountType CurrentBalance
	 * @return AmountType
	 */
	public function setCurrentBalance($_CurrentBalance)
	{
		return ($this->CurrentBalance = $_CurrentBalance);
	}
	/**
	 * Get CurrentBalance
	 * @return EbayTradingTypeAmountType
	 */
	public function getCurrentBalance()
	{
		return $this->CurrentBalance;
	}
	/**
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set InvoiceBalance
	 * @param AmountType InvoiceBalance
	 * @return AmountType
	 */
	public function setInvoiceBalance($_InvoiceBalance)
	{
		return ($this->InvoiceBalance = $_InvoiceBalance);
	}
	/**
	 * Get InvoiceBalance
	 * @return EbayTradingTypeAmountType
	 */
	public function getInvoiceBalance()
	{
		return $this->InvoiceBalance;
	}
	/**
	 * Set InvoiceDate
	 * @param dateTime InvoiceDate
	 * @return dateTime
	 */
	public function setInvoiceDate($_InvoiceDate)
	{
		return ($this->InvoiceDate = $_InvoiceDate);
	}
	/**
	 * Get InvoiceDate
	 * @return dateTime
	 */
	public function getInvoiceDate()
	{
		return $this->InvoiceDate;
	}
	/**
	 * Set LastAmountPaid
	 * @param AmountType LastAmountPaid
	 * @return AmountType
	 */
	public function setLastAmountPaid($_LastAmountPaid)
	{
		return ($this->LastAmountPaid = $_LastAmountPaid);
	}
	/**
	 * Get LastAmountPaid
	 * @return EbayTradingTypeAmountType
	 */
	public function getLastAmountPaid()
	{
		return $this->LastAmountPaid;
	}
	/**
	 * Set LastPaymentDate
	 * @param dateTime LastPaymentDate
	 * @return dateTime
	 */
	public function setLastPaymentDate($_LastPaymentDate)
	{
		return ($this->LastPaymentDate = $_LastPaymentDate);
	}
	/**
	 * Get LastPaymentDate
	 * @return dateTime
	 */
	public function getLastPaymentDate()
	{
		return $this->LastPaymentDate;
	}
	/**
	 * Set PastDue
	 * @param boolean PastDue
	 * @return boolean
	 */
	public function setPastDue($_PastDue)
	{
		return ($this->PastDue = $_PastDue);
	}
	/**
	 * Get PastDue
	 * @return boolean
	 */
	public function getPastDue()
	{
		return $this->PastDue;
	}
	/**
	 * Set PaymentMethod
	 * @param SellerPaymentMethodCodeType PaymentMethod
	 * @return SellerPaymentMethodCodeType
	 */
	public function setPaymentMethod($_PaymentMethod)
	{
		return ($this->PaymentMethod = EbayTradingTypeSellerPaymentMethodCodeType::valueIsValid($_PaymentMethod)?$_PaymentMethod:null);
	}
	/**
	 * Get PaymentMethod
	 * @return EbayTradingTypeSellerPaymentMethodCodeType
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
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