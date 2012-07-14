<?php
/**
 * Class file for PayPalTypeUpdateRecurringPaymentsProfileRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUpdateRecurringPaymentsProfileRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeUpdateRecurringPaymentsProfileRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ProfileID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $ProfileID;
	/**
	 * The Note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $Note;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $Description;
	/**
	 * The SubscriberName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $SubscriberName;
	/**
	 * The SubscriberShippingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeAddressType
	 */
	public $SubscriberShippingAddress;
	/**
	 * The ProfileReference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $ProfileReference;
	/**
	 * The AdditionalBillingCycles
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var int
	 */
	public $AdditionalBillingCycles;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The ShippingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $ShippingAmount;
	/**
	 * The TaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $TaxAmount;
	/**
	 * The OutstandingBalance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $OutstandingBalance;
	/**
	 * The AutoBillOutstandingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeAutoBillType
	 */
	public $AutoBillOutstandingAmount;
	/**
	 * The MaxFailedPayments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var int
	 */
	public $MaxFailedPayments;
	/**
	 * The CreditCard
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the credit card to be charged (required if Direct Payment)
	 * @var PayPalTypeCreditCardDetailsType
	 */
	public $CreditCard;
	/**
	 * The BillingStartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : When does this Profile begin billing?
	 * @var dateTime
	 */
	public $BillingStartDate;
	/**
	 * The TrialPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Trial period of this schedule
	 * @var PayPalTypeBillingPeriodDetailsType_Update
	 */
	public $TrialPeriod;
	/**
	 * The PaymentPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBillingPeriodDetailsType_Update
	 */
	public $PaymentPeriod;
	/**
	 * Constructor
	 * @param string ProfileID
	 * @param string Note
	 * @param string Description
	 * @param string SubscriberName
	 * @param PayPalTypeAddressType SubscriberShippingAddress
	 * @param string ProfileReference
	 * @param int AdditionalBillingCycles
	 * @param PayPalTypeBasicAmountType Amount
	 * @param PayPalTypeBasicAmountType ShippingAmount
	 * @param PayPalTypeBasicAmountType TaxAmount
	 * @param PayPalTypeBasicAmountType OutstandingBalance
	 * @param PayPalTypeAutoBillType AutoBillOutstandingAmount
	 * @param int MaxFailedPayments
	 * @param PayPalTypeCreditCardDetailsType CreditCard
	 * @param dateTime BillingStartDate
	 * @param PayPalTypeBillingPeriodDetailsType_Update TrialPeriod
	 * @param PayPalTypeBillingPeriodDetailsType_Update PaymentPeriod
	 * @return PayPalTypeUpdateRecurringPaymentsProfileRequestDetailsType
	 */
	public function __construct($_ProfileID,$_Note = null,$_Description = null,$_SubscriberName = null,$_SubscriberShippingAddress = null,$_ProfileReference = null,$_AdditionalBillingCycles = null,$_Amount = null,$_ShippingAmount = null,$_TaxAmount = null,$_OutstandingBalance = null,$_AutoBillOutstandingAmount = null,$_MaxFailedPayments = null,$_CreditCard = null,$_BillingStartDate = null,$_TrialPeriod = null,$_PaymentPeriod = null)
	{
		parent::__construct(array('ProfileID'=>$_ProfileID,'Note'=>$_Note,'Description'=>$_Description,'SubscriberName'=>$_SubscriberName,'SubscriberShippingAddress'=>$_SubscriberShippingAddress,'ProfileReference'=>$_ProfileReference,'AdditionalBillingCycles'=>$_AdditionalBillingCycles,'Amount'=>$_Amount,'ShippingAmount'=>$_ShippingAmount,'TaxAmount'=>$_TaxAmount,'OutstandingBalance'=>$_OutstandingBalance,'AutoBillOutstandingAmount'=>$_AutoBillOutstandingAmount,'MaxFailedPayments'=>$_MaxFailedPayments,'CreditCard'=>$_CreditCard,'BillingStartDate'=>$_BillingStartDate,'TrialPeriod'=>$_TrialPeriod,'PaymentPeriod'=>$_PaymentPeriod));
	}
	/**
	 * Set ProfileID
	 * @param string ProfileID
	 * @return string
	 */
	public function setProfileID($_ProfileID)
	{
		return ($this->ProfileID = $_ProfileID);
	}
	/**
	 * Get ProfileID
	 * @return string
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
	}
	/**
	 * Set Note
	 * @param string Note
	 * @return string
	 */
	public function setNote($_Note)
	{
		return ($this->Note = $_Note);
	}
	/**
	 * Get Note
	 * @return string
	 */
	public function getNote()
	{
		return $this->Note;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set SubscriberName
	 * @param string SubscriberName
	 * @return string
	 */
	public function setSubscriberName($_SubscriberName)
	{
		return ($this->SubscriberName = $_SubscriberName);
	}
	/**
	 * Get SubscriberName
	 * @return string
	 */
	public function getSubscriberName()
	{
		return $this->SubscriberName;
	}
	/**
	 * Set SubscriberShippingAddress
	 * @param AddressType SubscriberShippingAddress
	 * @return AddressType
	 */
	public function setSubscriberShippingAddress($_SubscriberShippingAddress)
	{
		return ($this->SubscriberShippingAddress = $_SubscriberShippingAddress);
	}
	/**
	 * Get SubscriberShippingAddress
	 * @return PayPalTypeAddressType
	 */
	public function getSubscriberShippingAddress()
	{
		return $this->SubscriberShippingAddress;
	}
	/**
	 * Set ProfileReference
	 * @param string ProfileReference
	 * @return string
	 */
	public function setProfileReference($_ProfileReference)
	{
		return ($this->ProfileReference = $_ProfileReference);
	}
	/**
	 * Get ProfileReference
	 * @return string
	 */
	public function getProfileReference()
	{
		return $this->ProfileReference;
	}
	/**
	 * Set AdditionalBillingCycles
	 * @param int AdditionalBillingCycles
	 * @return int
	 */
	public function setAdditionalBillingCycles($_AdditionalBillingCycles)
	{
		return ($this->AdditionalBillingCycles = $_AdditionalBillingCycles);
	}
	/**
	 * Get AdditionalBillingCycles
	 * @return int
	 */
	public function getAdditionalBillingCycles()
	{
		return $this->AdditionalBillingCycles;
	}
	/**
	 * Set Amount
	 * @param BasicAmountType Amount
	 * @return BasicAmountType
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set ShippingAmount
	 * @param BasicAmountType ShippingAmount
	 * @return BasicAmountType
	 */
	public function setShippingAmount($_ShippingAmount)
	{
		return ($this->ShippingAmount = $_ShippingAmount);
	}
	/**
	 * Get ShippingAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getShippingAmount()
	{
		return $this->ShippingAmount;
	}
	/**
	 * Set TaxAmount
	 * @param BasicAmountType TaxAmount
	 * @return BasicAmountType
	 */
	public function setTaxAmount($_TaxAmount)
	{
		return ($this->TaxAmount = $_TaxAmount);
	}
	/**
	 * Get TaxAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTaxAmount()
	{
		return $this->TaxAmount;
	}
	/**
	 * Set OutstandingBalance
	 * @param BasicAmountType OutstandingBalance
	 * @return BasicAmountType
	 */
	public function setOutstandingBalance($_OutstandingBalance)
	{
		return ($this->OutstandingBalance = $_OutstandingBalance);
	}
	/**
	 * Get OutstandingBalance
	 * @return PayPalTypeBasicAmountType
	 */
	public function getOutstandingBalance()
	{
		return $this->OutstandingBalance;
	}
	/**
	 * Set AutoBillOutstandingAmount
	 * @param AutoBillType AutoBillOutstandingAmount
	 * @return AutoBillType
	 */
	public function setAutoBillOutstandingAmount($_AutoBillOutstandingAmount)
	{
		return ($this->AutoBillOutstandingAmount = PayPalTypeAutoBillType::valueIsValid($_AutoBillOutstandingAmount)?$_AutoBillOutstandingAmount:null);
	}
	/**
	 * Get AutoBillOutstandingAmount
	 * @return PayPalTypeAutoBillType
	 */
	public function getAutoBillOutstandingAmount()
	{
		return $this->AutoBillOutstandingAmount;
	}
	/**
	 * Set MaxFailedPayments
	 * @param int MaxFailedPayments
	 * @return int
	 */
	public function setMaxFailedPayments($_MaxFailedPayments)
	{
		return ($this->MaxFailedPayments = $_MaxFailedPayments);
	}
	/**
	 * Get MaxFailedPayments
	 * @return int
	 */
	public function getMaxFailedPayments()
	{
		return $this->MaxFailedPayments;
	}
	/**
	 * Set CreditCard
	 * @param CreditCardDetailsType CreditCard
	 * @return CreditCardDetailsType
	 */
	public function setCreditCard($_CreditCard)
	{
		return ($this->CreditCard = $_CreditCard);
	}
	/**
	 * Get CreditCard
	 * @return PayPalTypeCreditCardDetailsType
	 */
	public function getCreditCard()
	{
		return $this->CreditCard;
	}
	/**
	 * Set BillingStartDate
	 * @param dateTime BillingStartDate
	 * @return dateTime
	 */
	public function setBillingStartDate($_BillingStartDate)
	{
		return ($this->BillingStartDate = $_BillingStartDate);
	}
	/**
	 * Get BillingStartDate
	 * @return dateTime
	 */
	public function getBillingStartDate()
	{
		return $this->BillingStartDate;
	}
	/**
	 * Set TrialPeriod
	 * @param BillingPeriodDetailsType_Update TrialPeriod
	 * @return BillingPeriodDetailsType_Update
	 */
	public function setTrialPeriod($_TrialPeriod)
	{
		return ($this->TrialPeriod = $_TrialPeriod);
	}
	/**
	 * Get TrialPeriod
	 * @return PayPalTypeBillingPeriodDetailsType_Update
	 */
	public function getTrialPeriod()
	{
		return $this->TrialPeriod;
	}
	/**
	 * Set PaymentPeriod
	 * @param BillingPeriodDetailsType_Update PaymentPeriod
	 * @return BillingPeriodDetailsType_Update
	 */
	public function setPaymentPeriod($_PaymentPeriod)
	{
		return ($this->PaymentPeriod = $_PaymentPeriod);
	}
	/**
	 * Get PaymentPeriod
	 * @return PayPalTypeBillingPeriodDetailsType_Update
	 */
	public function getPaymentPeriod()
	{
		return $this->PaymentPeriod;
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