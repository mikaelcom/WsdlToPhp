<?php
/**
 * Class file for PayPalTypeScheduleDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeScheduleDetailsType
 * @date 14/07/2012
 */
class PayPalTypeScheduleDetailsType extends PayPalWsdlClass
{
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Schedule details for the Recurring Payment
	 * @var string
	 */
	public $Description;
	/**
	 * The TrialPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Trial period of this schedule
	 * @var PayPalTypeBillingPeriodDetailsType
	 */
	public $TrialPeriod;
	/**
	 * The PaymentPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBillingPeriodDetailsType
	 */
	public $PaymentPeriod;
	/**
	 * The MaxFailedPayments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The max number of payments the buyer can fail before this Recurring Payments profile is cancelled
	 * @var int
	 */
	public $MaxFailedPayments;
	/**
	 * The ActivationDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeActivationDetailsType
	 */
	public $ActivationDetails;
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
	 * Constructor
	 * @param string Description
	 * @param PayPalTypeBillingPeriodDetailsType TrialPeriod
	 * @param PayPalTypeBillingPeriodDetailsType PaymentPeriod
	 * @param int MaxFailedPayments
	 * @param PayPalTypeActivationDetailsType ActivationDetails
	 * @param PayPalTypeAutoBillType AutoBillOutstandingAmount
	 * @return PayPalTypeScheduleDetailsType
	 */
	public function __construct($_Description,$_TrialPeriod = null,$_PaymentPeriod,$_MaxFailedPayments = null,$_ActivationDetails = null,$_AutoBillOutstandingAmount = null)
	{
		parent::__construct(array('Description'=>$_Description,'TrialPeriod'=>$_TrialPeriod,'PaymentPeriod'=>$_PaymentPeriod,'MaxFailedPayments'=>$_MaxFailedPayments,'ActivationDetails'=>$_ActivationDetails,'AutoBillOutstandingAmount'=>$_AutoBillOutstandingAmount));
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
	 * Set TrialPeriod
	 * @param BillingPeriodDetailsType TrialPeriod
	 * @return BillingPeriodDetailsType
	 */
	public function setTrialPeriod($_TrialPeriod)
	{
		return ($this->TrialPeriod = $_TrialPeriod);
	}
	/**
	 * Get TrialPeriod
	 * @return PayPalTypeBillingPeriodDetailsType
	 */
	public function getTrialPeriod()
	{
		return $this->TrialPeriod;
	}
	/**
	 * Set PaymentPeriod
	 * @param BillingPeriodDetailsType PaymentPeriod
	 * @return BillingPeriodDetailsType
	 */
	public function setPaymentPeriod($_PaymentPeriod)
	{
		return ($this->PaymentPeriod = $_PaymentPeriod);
	}
	/**
	 * Get PaymentPeriod
	 * @return PayPalTypeBillingPeriodDetailsType
	 */
	public function getPaymentPeriod()
	{
		return $this->PaymentPeriod;
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
	 * Set ActivationDetails
	 * @param ActivationDetailsType ActivationDetails
	 * @return ActivationDetailsType
	 */
	public function setActivationDetails($_ActivationDetails)
	{
		return ($this->ActivationDetails = $_ActivationDetails);
	}
	/**
	 * Get ActivationDetails
	 * @return PayPalTypeActivationDetailsType
	 */
	public function getActivationDetails()
	{
		return $this->ActivationDetails;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>