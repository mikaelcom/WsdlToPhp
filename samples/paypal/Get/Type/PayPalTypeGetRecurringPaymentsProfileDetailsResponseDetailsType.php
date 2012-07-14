<?php
/**
 * Class file for PayPalTypeGetRecurringPaymentsProfileDetailsResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetRecurringPaymentsProfileDetailsResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeGetRecurringPaymentsProfileDetailsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The ProfileID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Recurring Billing Profile ID
	 * @var string
	 */
	public $ProfileID;
	/**
	 * The ProfileStatus
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeRecurringPaymentsProfileStatusType
	 */
	public $ProfileStatus;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $Description;
	/**
	 * The AutoBillOutstandingAmount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeAutoBillType
	 */
	public $AutoBillOutstandingAmount;
	/**
	 * The MaxFailedPayments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var int
	 */
	public $MaxFailedPayments;
	/**
	 * The RecurringPaymentsProfileDetails
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeRecurringPaymentsProfileDetailsType
	 */
	public $RecurringPaymentsProfileDetails;
	/**
	 * The CurrentRecurringPaymentsPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBillingPeriodDetailsType
	 */
	public $CurrentRecurringPaymentsPeriod;
	/**
	 * The RecurringPaymentsSummary
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeRecurringPaymentsSummaryType
	 */
	public $RecurringPaymentsSummary;
	/**
	 * The CreditCard
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeCreditCardDetailsType
	 */
	public $CreditCard;
	/**
	 * The TrialRecurringPaymentsPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBillingPeriodDetailsType
	 */
	public $TrialRecurringPaymentsPeriod;
	/**
	 * The RegularRecurringPaymentsPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBillingPeriodDetailsType
	 */
	public $RegularRecurringPaymentsPeriod;
	/**
	 * The TrialAmountPaid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $TrialAmountPaid;
	/**
	 * The RegularAmountPaid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $RegularAmountPaid;
	/**
	 * The AggregateAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $AggregateAmount;
	/**
	 * The AggregateOptionalAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $AggregateOptionalAmount;
	/**
	 * The FinalPaymentDueDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var dateTime
	 */
	public $FinalPaymentDueDate;
	/**
	 * Constructor
	 * @param string ProfileID
	 * @param PayPalTypeRecurringPaymentsProfileStatusType ProfileStatus
	 * @param string Description
	 * @param PayPalTypeAutoBillType AutoBillOutstandingAmount
	 * @param int MaxFailedPayments
	 * @param PayPalTypeRecurringPaymentsProfileDetailsType RecurringPaymentsProfileDetails
	 * @param PayPalTypeBillingPeriodDetailsType CurrentRecurringPaymentsPeriod
	 * @param PayPalTypeRecurringPaymentsSummaryType RecurringPaymentsSummary
	 * @param PayPalTypeCreditCardDetailsType CreditCard
	 * @param PayPalTypeBillingPeriodDetailsType TrialRecurringPaymentsPeriod
	 * @param PayPalTypeBillingPeriodDetailsType RegularRecurringPaymentsPeriod
	 * @param PayPalTypeBasicAmountType TrialAmountPaid
	 * @param PayPalTypeBasicAmountType RegularAmountPaid
	 * @param PayPalTypeBasicAmountType AggregateAmount
	 * @param PayPalTypeBasicAmountType AggregateOptionalAmount
	 * @param dateTime FinalPaymentDueDate
	 * @return PayPalTypeGetRecurringPaymentsProfileDetailsResponseDetailsType
	 */
	public function __construct($_ProfileID,$_ProfileStatus,$_Description,$_AutoBillOutstandingAmount,$_MaxFailedPayments,$_RecurringPaymentsProfileDetails,$_CurrentRecurringPaymentsPeriod = null,$_RecurringPaymentsSummary,$_CreditCard = null,$_TrialRecurringPaymentsPeriod = null,$_RegularRecurringPaymentsPeriod = null,$_TrialAmountPaid = null,$_RegularAmountPaid = null,$_AggregateAmount = null,$_AggregateOptionalAmount = null,$_FinalPaymentDueDate = null)
	{
		parent::__construct(array('ProfileID'=>$_ProfileID,'ProfileStatus'=>$_ProfileStatus,'Description'=>$_Description,'AutoBillOutstandingAmount'=>$_AutoBillOutstandingAmount,'MaxFailedPayments'=>$_MaxFailedPayments,'RecurringPaymentsProfileDetails'=>$_RecurringPaymentsProfileDetails,'CurrentRecurringPaymentsPeriod'=>$_CurrentRecurringPaymentsPeriod,'RecurringPaymentsSummary'=>$_RecurringPaymentsSummary,'CreditCard'=>$_CreditCard,'TrialRecurringPaymentsPeriod'=>$_TrialRecurringPaymentsPeriod,'RegularRecurringPaymentsPeriod'=>$_RegularRecurringPaymentsPeriod,'TrialAmountPaid'=>$_TrialAmountPaid,'RegularAmountPaid'=>$_RegularAmountPaid,'AggregateAmount'=>$_AggregateAmount,'AggregateOptionalAmount'=>$_AggregateOptionalAmount,'FinalPaymentDueDate'=>$_FinalPaymentDueDate));
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
	 * Set ProfileStatus
	 * @param RecurringPaymentsProfileStatusType ProfileStatus
	 * @return RecurringPaymentsProfileStatusType
	 */
	public function setProfileStatus($_ProfileStatus)
	{
		return ($this->ProfileStatus = PayPalTypeRecurringPaymentsProfileStatusType::valueIsValid($_ProfileStatus)?$_ProfileStatus:null);
	}
	/**
	 * Get ProfileStatus
	 * @return PayPalTypeRecurringPaymentsProfileStatusType
	 */
	public function getProfileStatus()
	{
		return $this->ProfileStatus;
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
	 * Set RecurringPaymentsProfileDetails
	 * @param RecurringPaymentsProfileDetailsType RecurringPaymentsProfileDetails
	 * @return RecurringPaymentsProfileDetailsType
	 */
	public function setRecurringPaymentsProfileDetails($_RecurringPaymentsProfileDetails)
	{
		return ($this->RecurringPaymentsProfileDetails = $_RecurringPaymentsProfileDetails);
	}
	/**
	 * Get RecurringPaymentsProfileDetails
	 * @return PayPalTypeRecurringPaymentsProfileDetailsType
	 */
	public function getRecurringPaymentsProfileDetails()
	{
		return $this->RecurringPaymentsProfileDetails;
	}
	/**
	 * Set CurrentRecurringPaymentsPeriod
	 * @param BillingPeriodDetailsType CurrentRecurringPaymentsPeriod
	 * @return BillingPeriodDetailsType
	 */
	public function setCurrentRecurringPaymentsPeriod($_CurrentRecurringPaymentsPeriod)
	{
		return ($this->CurrentRecurringPaymentsPeriod = $_CurrentRecurringPaymentsPeriod);
	}
	/**
	 * Get CurrentRecurringPaymentsPeriod
	 * @return PayPalTypeBillingPeriodDetailsType
	 */
	public function getCurrentRecurringPaymentsPeriod()
	{
		return $this->CurrentRecurringPaymentsPeriod;
	}
	/**
	 * Set RecurringPaymentsSummary
	 * @param RecurringPaymentsSummaryType RecurringPaymentsSummary
	 * @return RecurringPaymentsSummaryType
	 */
	public function setRecurringPaymentsSummary($_RecurringPaymentsSummary)
	{
		return ($this->RecurringPaymentsSummary = $_RecurringPaymentsSummary);
	}
	/**
	 * Get RecurringPaymentsSummary
	 * @return PayPalTypeRecurringPaymentsSummaryType
	 */
	public function getRecurringPaymentsSummary()
	{
		return $this->RecurringPaymentsSummary;
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
	 * Set TrialRecurringPaymentsPeriod
	 * @param BillingPeriodDetailsType TrialRecurringPaymentsPeriod
	 * @return BillingPeriodDetailsType
	 */
	public function setTrialRecurringPaymentsPeriod($_TrialRecurringPaymentsPeriod)
	{
		return ($this->TrialRecurringPaymentsPeriod = $_TrialRecurringPaymentsPeriod);
	}
	/**
	 * Get TrialRecurringPaymentsPeriod
	 * @return PayPalTypeBillingPeriodDetailsType
	 */
	public function getTrialRecurringPaymentsPeriod()
	{
		return $this->TrialRecurringPaymentsPeriod;
	}
	/**
	 * Set RegularRecurringPaymentsPeriod
	 * @param BillingPeriodDetailsType RegularRecurringPaymentsPeriod
	 * @return BillingPeriodDetailsType
	 */
	public function setRegularRecurringPaymentsPeriod($_RegularRecurringPaymentsPeriod)
	{
		return ($this->RegularRecurringPaymentsPeriod = $_RegularRecurringPaymentsPeriod);
	}
	/**
	 * Get RegularRecurringPaymentsPeriod
	 * @return PayPalTypeBillingPeriodDetailsType
	 */
	public function getRegularRecurringPaymentsPeriod()
	{
		return $this->RegularRecurringPaymentsPeriod;
	}
	/**
	 * Set TrialAmountPaid
	 * @param BasicAmountType TrialAmountPaid
	 * @return BasicAmountType
	 */
	public function setTrialAmountPaid($_TrialAmountPaid)
	{
		return ($this->TrialAmountPaid = $_TrialAmountPaid);
	}
	/**
	 * Get TrialAmountPaid
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTrialAmountPaid()
	{
		return $this->TrialAmountPaid;
	}
	/**
	 * Set RegularAmountPaid
	 * @param BasicAmountType RegularAmountPaid
	 * @return BasicAmountType
	 */
	public function setRegularAmountPaid($_RegularAmountPaid)
	{
		return ($this->RegularAmountPaid = $_RegularAmountPaid);
	}
	/**
	 * Get RegularAmountPaid
	 * @return PayPalTypeBasicAmountType
	 */
	public function getRegularAmountPaid()
	{
		return $this->RegularAmountPaid;
	}
	/**
	 * Set AggregateAmount
	 * @param BasicAmountType AggregateAmount
	 * @return BasicAmountType
	 */
	public function setAggregateAmount($_AggregateAmount)
	{
		return ($this->AggregateAmount = $_AggregateAmount);
	}
	/**
	 * Get AggregateAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAggregateAmount()
	{
		return $this->AggregateAmount;
	}
	/**
	 * Set AggregateOptionalAmount
	 * @param BasicAmountType AggregateOptionalAmount
	 * @return BasicAmountType
	 */
	public function setAggregateOptionalAmount($_AggregateOptionalAmount)
	{
		return ($this->AggregateOptionalAmount = $_AggregateOptionalAmount);
	}
	/**
	 * Get AggregateOptionalAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAggregateOptionalAmount()
	{
		return $this->AggregateOptionalAmount;
	}
	/**
	 * Set FinalPaymentDueDate
	 * @param dateTime FinalPaymentDueDate
	 * @return dateTime
	 */
	public function setFinalPaymentDueDate($_FinalPaymentDueDate)
	{
		return ($this->FinalPaymentDueDate = $_FinalPaymentDueDate);
	}
	/**
	 * Get FinalPaymentDueDate
	 * @return dateTime
	 */
	public function getFinalPaymentDueDate()
	{
		return $this->FinalPaymentDueDate;
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