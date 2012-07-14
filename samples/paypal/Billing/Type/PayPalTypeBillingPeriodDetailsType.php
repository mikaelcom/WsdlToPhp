<?php
/**
 * Class file for PayPalTypeBillingPeriodDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBillingPeriodDetailsType
 * @date 14/07/2012
 */
class PayPalTypeBillingPeriodDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Unit of meausre for billing cycle
	 * @var PayPalTypeBillingPeriodType
	 */
	public $BillingPeriod;
	/**
	 * The BillingFrequency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Number of BillingPeriod that make up one billing cycle
	 * @var int
	 */
	public $BillingFrequency;
	/**
	 * The TotalBillingCycles
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Total billing cycles in this portion of the schedule
	 * @var int
	 */
	public $TotalBillingCycles;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Amount to charge
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The ShippingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Additional shipping amount to charge
	 * @var PayPalTypeBasicAmountType
	 */
	public $ShippingAmount;
	/**
	 * The TaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Additional tax amount to charge
	 * @var PayPalTypeBasicAmountType
	 */
	public $TaxAmount;
	/**
	 * Constructor
	 * @param PayPalTypeBillingPeriodType BillingPeriod
	 * @param int BillingFrequency
	 * @param int TotalBillingCycles
	 * @param PayPalTypeBasicAmountType Amount
	 * @param PayPalTypeBasicAmountType ShippingAmount
	 * @param PayPalTypeBasicAmountType TaxAmount
	 * @return PayPalTypeBillingPeriodDetailsType
	 */
	public function __construct($_BillingPeriod,$_BillingFrequency,$_TotalBillingCycles = null,$_Amount,$_ShippingAmount = null,$_TaxAmount = null)
	{
		parent::__construct(array('BillingPeriod'=>$_BillingPeriod,'BillingFrequency'=>$_BillingFrequency,'TotalBillingCycles'=>$_TotalBillingCycles,'Amount'=>$_Amount,'ShippingAmount'=>$_ShippingAmount,'TaxAmount'=>$_TaxAmount));
	}
	/**
	 * Set BillingPeriod
	 * @param BillingPeriodType BillingPeriod
	 * @return BillingPeriodType
	 */
	public function setBillingPeriod($_BillingPeriod)
	{
		return ($this->BillingPeriod = PayPalTypeBillingPeriodType::valueIsValid($_BillingPeriod)?$_BillingPeriod:null);
	}
	/**
	 * Get BillingPeriod
	 * @return PayPalTypeBillingPeriodType
	 */
	public function getBillingPeriod()
	{
		return $this->BillingPeriod;
	}
	/**
	 * Set BillingFrequency
	 * @param int BillingFrequency
	 * @return int
	 */
	public function setBillingFrequency($_BillingFrequency)
	{
		return ($this->BillingFrequency = $_BillingFrequency);
	}
	/**
	 * Get BillingFrequency
	 * @return int
	 */
	public function getBillingFrequency()
	{
		return $this->BillingFrequency;
	}
	/**
	 * Set TotalBillingCycles
	 * @param int TotalBillingCycles
	 * @return int
	 */
	public function setTotalBillingCycles($_TotalBillingCycles)
	{
		return ($this->TotalBillingCycles = $_TotalBillingCycles);
	}
	/**
	 * Get TotalBillingCycles
	 * @return int
	 */
	public function getTotalBillingCycles()
	{
		return $this->TotalBillingCycles;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>