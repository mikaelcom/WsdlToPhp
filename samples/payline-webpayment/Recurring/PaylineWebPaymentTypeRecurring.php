<?php
/**
 * Class file for PaylineWebPaymentTypeRecurring
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeRecurring
 * Documentation : This element contains element for recurring operation
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeRecurring extends PaylineWebPaymentWsdlClass
{
	/**
	 * The firstAmount
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $firstAmount;
	/**
	 * The amount
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $amount;
	/**
	 * The billingCycle
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $billingCycle;
	/**
	 * The billingLeft
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $billingLeft;
	/**
	 * The billingDay
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $billingDay;
	/**
	 * The startDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $startDate;
	/**
	 * Constructor
	 * @param string firstAmount
	 * @param string amount
	 * @param string billingCycle
	 * @param string billingLeft
	 * @param string billingDay
	 * @param string startDate
	 * @return PaylineWebPaymentTypeRecurring
	 */
	public function __construct($_firstAmount = null,$_amount = null,$_billingCycle = null,$_billingLeft = null,$_billingDay = null,$_startDate = null)
	{
		parent::__construct(array('firstAmount'=>$_firstAmount,'amount'=>$_amount,'billingCycle'=>$_billingCycle,'billingLeft'=>$_billingLeft,'billingDay'=>$_billingDay,'startDate'=>$_startDate));
	}
	/**
	 * Set firstAmount
	 * @param string firstAmount
	 * @return string
	 */
	public function setFirstAmount($_firstAmount)
	{
		return ($this->firstAmount = $_firstAmount);
	}
	/**
	 * Get firstAmount
	 * @return string
	 */
	public function getFirstAmount()
	{
		return $this->firstAmount;
	}
	/**
	 * Set amount
	 * @param string amount
	 * @return string
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Get amount
	 * @return string
	 */
	public function getAmount()
	{
		return $this->amount;
	}
	/**
	 * Set billingCycle
	 * @param string billingCycle
	 * @return string
	 */
	public function setBillingCycle($_billingCycle)
	{
		return ($this->billingCycle = $_billingCycle);
	}
	/**
	 * Get billingCycle
	 * @return string
	 */
	public function getBillingCycle()
	{
		return $this->billingCycle;
	}
	/**
	 * Set billingLeft
	 * @param string billingLeft
	 * @return string
	 */
	public function setBillingLeft($_billingLeft)
	{
		return ($this->billingLeft = $_billingLeft);
	}
	/**
	 * Get billingLeft
	 * @return string
	 */
	public function getBillingLeft()
	{
		return $this->billingLeft;
	}
	/**
	 * Set billingDay
	 * @param string billingDay
	 * @return string
	 */
	public function setBillingDay($_billingDay)
	{
		return ($this->billingDay = $_billingDay);
	}
	/**
	 * Get billingDay
	 * @return string
	 */
	public function getBillingDay()
	{
		return $this->billingDay;
	}
	/**
	 * Set startDate
	 * @param string startDate
	 * @return string
	 */
	public function setStartDate($_startDate)
	{
		return ($this->startDate = $_startDate);
	}
	/**
	 * Get startDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->startDate;
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