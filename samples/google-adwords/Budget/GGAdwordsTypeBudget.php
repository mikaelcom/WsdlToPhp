<?php
/**
 * Class file for GGAdwordsTypeBudget
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBudget
 * Documentation : Budgets are used for managing the amount of money spent on AdWords.
 * @date 03/07/2012
 */
class GGAdwordsTypeBudget extends GGAdwordsWsdlClass
{
	/**
	 * The period
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Period over which to spend the budget. <code>MONTHLY</code> is not available to most users. <span class="constraint Selectable">This field can be selected using the value "Period".</span>
	 * @var GGAdwordsTypeBudgetBudgetPeriod
	 */
	public $period;
	/**
	 * The amount
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of budget in the local currency for the account. <span class="constraint Selectable">This field can be selected using the value "Amount".</span><span class="constraint Filterable">This field can be filtered on.</span> <span class="constraint InRange">This field must be greater than or equal to 1.</span>
	 * @var GGAdwordsTypeMoney
	 */
	public $amount;
	/**
	 * The deliveryMethod
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Delivery method for the budget. <span class="constraint Selectable">This field can be selected using the value "DeliveryMethod".</span>
	 * @var GGAdwordsTypeBudgetBudgetDeliveryMethod
	 */
	public $deliveryMethod;
	/**
	 * Constructor
	 * @param GGAdwordsTypeBudgetBudgetPeriod period
	 * @param GGAdwordsTypeMoney amount
	 * @param GGAdwordsTypeBudgetBudgetDeliveryMethod deliveryMethod
	 * @return GGAdwordsTypeBudget
	 */
	public function __construct($_period = null,$_amount = null,$_deliveryMethod = null)
	{
		parent::__construct(array('period'=>$_period,'amount'=>$_amount,'deliveryMethod'=>$_deliveryMethod));
	}
	/**
	 * Set period
	 * @param BudgetBudgetPeriod period
	 * @return BudgetBudgetPeriod
	 */
	public function setPeriod($_period)
	{
		return ($this->period = GGAdwordsTypeBudgetBudgetPeriod::valueIsValid($_period)?$_period:null);
	}
	/**
	 * Get period
	 * @return GGAdwordsTypeBudgetBudgetPeriod
	 */
	public function getPeriod()
	{
		return $this->period;
	}
	/**
	 * Set amount
	 * @param Money amount
	 * @return Money
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Get amount
	 * @return GGAdwordsTypeMoney
	 */
	public function getAmount()
	{
		return $this->amount;
	}
	/**
	 * Set deliveryMethod
	 * @param BudgetBudgetDeliveryMethod deliveryMethod
	 * @return BudgetBudgetDeliveryMethod
	 */
	public function setDeliveryMethod($_deliveryMethod)
	{
		return ($this->deliveryMethod = GGAdwordsTypeBudgetBudgetDeliveryMethod::valueIsValid($_deliveryMethod)?$_deliveryMethod:null);
	}
	/**
	 * Get deliveryMethod
	 * @return GGAdwordsTypeBudgetBudgetDeliveryMethod
	 */
	public function getDeliveryMethod()
	{
		return $this->deliveryMethod;
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