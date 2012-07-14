<?php
/**
 * Class file for PayPalTypeAccountSummaryType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAccountSummaryType
 * Documentation : Includes account summary for the user.
 * @date 14/07/2012
 */
class PayPalTypeAccountSummaryType extends PayPalWsdlClass
{
	/**
	 * The AccountState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeAccountStateCodeType
	 */
	public $AccountState;
	/**
	 * The AdditionalAccount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeAdditionalAccountType
	 */
	public $AdditionalAccount;
	/**
	 * The AdditionalAccountsCount
	 * Meta informations :
	 * 	- documentation : Number of additional accounts.
	 * @var int
	 */
	public $AdditionalAccountsCount;
	/**
	 * The AmountPastDue
	 * @var PayPalTypeAmountType
	 */
	public $AmountPastDue;
	/**
	 * The BankAccountInfo
	 * Meta informations :
	 * 	- documentation : First four digits (with remainder Xed-out). This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
	 * @var string
	 */
	public $BankAccountInfo;
	/**
	 * The BankModifyDate
	 * Meta informations :
	 * 	- documentation : Last time/day BankAccountInfo and/or BankRoutingInfo was modified, in GMT. This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
	 * @var dateTime
	 */
	public $BankModifyDate;
	/**
	 * The BillingCycleDate
	 * Meta informations :
	 * 	- documentation : Indicates the billing cycle in which eBay sends a billing invoice to the specified user. Possible values: 0 = On the last day of the month. 15 = On the 15th day of the month.
	 * @var dateTime
	 */
	public $BillingCycleDate;
	/**
	 * The CCExp
	 * Meta informations :
	 * 	- documentation : Expiration date for the credit card selected as payment method, in GMT. Empty string if no credit card is on file or if account is inactive -- even if there is a credit card on file.
	 * @var dateTime
	 */
	public $CCExp;
	/**
	 * The CCInfo
	 * Meta informations :
	 * 	- documentation : Last four digits of user's credit card selected as payment type. Empty string if no credit is on file. This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
	 * @var string
	 */
	public $CCInfo;
	/**
	 * The CCModifyDate
	 * Meta informations :
	 * 	- documentation : Last date credit card or credit card expiration date was modified, in GMT. This may be an empty string depending upon the value of the payment type for the user account (e.g, Empty string if no credit card is on file.
	 * @var dateTime
	 */
	public $CCModifyDate;
	/**
	 * The CurrentBalance
	 * @var PayPalTypeAmountType
	 */
	public $CurrentBalance;
	/**
	 * The LastAmountPaid
	 * Meta informations :
	 * 	- documentation : Amount of last payment posted, 0.00 if no payments posted.
	 * @var PayPalTypeAmountType
	 */
	public $LastAmountPaid;
	/**
	 * The LastInvoiceAmount
	 * Meta informations :
	 * 	- documentation : Amount of last invoice. 0.00 if account not yet invoiced.
	 * @var PayPalTypeAmountType
	 */
	public $LastInvoiceAmount;
	/**
	 * The LastInvoiceDate
	 * Meta informations :
	 * 	- documentation : Date of last invoice sent by eBay to the user, in GMT. Empty string if this account has not been invoiced yet.
	 * @var dateTime
	 */
	public $LastInvoiceDate;
	/**
	 * The LastPaymentDate
	 * Meta informations :
	 * 	- documentation : Date of last payment by specified user to eBay, in GMT. Empty string if no payments posted.
	 * @var dateTime
	 */
	public $LastPaymentDate;
	/**
	 * The PastDue
	 * Meta informations :
	 * 	- documentation : Indicates whether the account has past due amounts outstanding. Possible values: true = Account is past due. false = Account is current.
	 * @var boolean
	 */
	public $PastDue;
	/**
	 * The PaymentMethod
	 * Meta informations :
	 * 	- documentation : Indicates the method the specified user selected for paying eBay. The values for PaymentType vary for each SiteID.
	 * @var PayPalTypeSellerPaymentMethodCodeType
	 */
	public $PaymentMethod;
	/**
	 * Constructor
	 * @param PayPalTypeAccountStateCodeType AccountState
	 * @param PayPalTypeAdditionalAccountType AdditionalAccount
	 * @param int AdditionalAccountsCount
	 * @param PayPalTypeAmountType AmountPastDue
	 * @param string BankAccountInfo
	 * @param dateTime BankModifyDate
	 * @param dateTime BillingCycleDate
	 * @param dateTime CCExp
	 * @param string CCInfo
	 * @param dateTime CCModifyDate
	 * @param PayPalTypeAmountType CurrentBalance
	 * @param PayPalTypeAmountType LastAmountPaid
	 * @param PayPalTypeAmountType LastInvoiceAmount
	 * @param dateTime LastInvoiceDate
	 * @param dateTime LastPaymentDate
	 * @param boolean PastDue
	 * @param PayPalTypeSellerPaymentMethodCodeType PaymentMethod
	 * @return PayPalTypeAccountSummaryType
	 */
	public function __construct($_AccountState = null,$_AdditionalAccount = null,$_AdditionalAccountsCount = null,$_AmountPastDue = null,$_BankAccountInfo = null,$_BankModifyDate = null,$_BillingCycleDate = null,$_CCExp = null,$_CCInfo = null,$_CCModifyDate = null,$_CurrentBalance = null,$_LastAmountPaid = null,$_LastInvoiceAmount = null,$_LastInvoiceDate = null,$_LastPaymentDate = null,$_PastDue = null,$_PaymentMethod = null)
	{
		parent::__construct(array('AccountState'=>$_AccountState,'AdditionalAccount'=>$_AdditionalAccount,'AdditionalAccountsCount'=>$_AdditionalAccountsCount,'AmountPastDue'=>$_AmountPastDue,'BankAccountInfo'=>$_BankAccountInfo,'BankModifyDate'=>$_BankModifyDate,'BillingCycleDate'=>$_BillingCycleDate,'CCExp'=>$_CCExp,'CCInfo'=>$_CCInfo,'CCModifyDate'=>$_CCModifyDate,'CurrentBalance'=>$_CurrentBalance,'LastAmountPaid'=>$_LastAmountPaid,'LastInvoiceAmount'=>$_LastInvoiceAmount,'LastInvoiceDate'=>$_LastInvoiceDate,'LastPaymentDate'=>$_LastPaymentDate,'PastDue'=>$_PastDue,'PaymentMethod'=>$_PaymentMethod));
	}
	/**
	 * Set AccountState
	 * @param AccountStateCodeType AccountState
	 * @return AccountStateCodeType
	 */
	public function setAccountState($_AccountState)
	{
		return ($this->AccountState = PayPalTypeAccountStateCodeType::valueIsValid($_AccountState)?$_AccountState:null);
	}
	/**
	 * Get AccountState
	 * @return PayPalTypeAccountStateCodeType
	 */
	public function getAccountState()
	{
		return $this->AccountState;
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
	 * @return PayPalTypeAdditionalAccountType
	 */
	public function getAdditionalAccount()
	{
		return $this->AdditionalAccount;
	}
	/**
	 * Set AdditionalAccountsCount
	 * @param int AdditionalAccountsCount
	 * @return int
	 */
	public function setAdditionalAccountsCount($_AdditionalAccountsCount)
	{
		return ($this->AdditionalAccountsCount = $_AdditionalAccountsCount);
	}
	/**
	 * Get AdditionalAccountsCount
	 * @return int
	 */
	public function getAdditionalAccountsCount()
	{
		return $this->AdditionalAccountsCount;
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
	 * @return PayPalTypeAmountType
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
	 * @param dateTime BillingCycleDate
	 * @return dateTime
	 */
	public function setBillingCycleDate($_BillingCycleDate)
	{
		return ($this->BillingCycleDate = $_BillingCycleDate);
	}
	/**
	 * Get BillingCycleDate
	 * @return dateTime
	 */
	public function getBillingCycleDate()
	{
		return $this->BillingCycleDate;
	}
	/**
	 * Set CCExp
	 * @param dateTime CCExp
	 * @return dateTime
	 */
	public function setCCExp($_CCExp)
	{
		return ($this->CCExp = $_CCExp);
	}
	/**
	 * Get CCExp
	 * @return dateTime
	 */
	public function getCCExp()
	{
		return $this->CCExp;
	}
	/**
	 * Set CCInfo
	 * @param string CCInfo
	 * @return string
	 */
	public function setCCInfo($_CCInfo)
	{
		return ($this->CCInfo = $_CCInfo);
	}
	/**
	 * Get CCInfo
	 * @return string
	 */
	public function getCCInfo()
	{
		return $this->CCInfo;
	}
	/**
	 * Set CCModifyDate
	 * @param dateTime CCModifyDate
	 * @return dateTime
	 */
	public function setCCModifyDate($_CCModifyDate)
	{
		return ($this->CCModifyDate = $_CCModifyDate);
	}
	/**
	 * Get CCModifyDate
	 * @return dateTime
	 */
	public function getCCModifyDate()
	{
		return $this->CCModifyDate;
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
	 * @return PayPalTypeAmountType
	 */
	public function getCurrentBalance()
	{
		return $this->CurrentBalance;
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
	 * @return PayPalTypeAmountType
	 */
	public function getLastAmountPaid()
	{
		return $this->LastAmountPaid;
	}
	/**
	 * Set LastInvoiceAmount
	 * @param AmountType LastInvoiceAmount
	 * @return AmountType
	 */
	public function setLastInvoiceAmount($_LastInvoiceAmount)
	{
		return ($this->LastInvoiceAmount = $_LastInvoiceAmount);
	}
	/**
	 * Get LastInvoiceAmount
	 * @return PayPalTypeAmountType
	 */
	public function getLastInvoiceAmount()
	{
		return $this->LastInvoiceAmount;
	}
	/**
	 * Set LastInvoiceDate
	 * @param dateTime LastInvoiceDate
	 * @return dateTime
	 */
	public function setLastInvoiceDate($_LastInvoiceDate)
	{
		return ($this->LastInvoiceDate = $_LastInvoiceDate);
	}
	/**
	 * Get LastInvoiceDate
	 * @return dateTime
	 */
	public function getLastInvoiceDate()
	{
		return $this->LastInvoiceDate;
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
		return ($this->PaymentMethod = PayPalTypeSellerPaymentMethodCodeType::valueIsValid($_PaymentMethod)?$_PaymentMethod:null);
	}
	/**
	 * Get PaymentMethod
	 * @return PayPalTypeSellerPaymentMethodCodeType
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
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