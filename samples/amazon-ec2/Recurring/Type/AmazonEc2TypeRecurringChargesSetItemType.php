<?php
/**
 * Class file for AmazonEc2TypeRecurringChargesSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeRecurringChargesSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeRecurringChargesSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The frequency
	 * @var string
	 */
	public $frequency;
	/**
	 * The amount
	 * @var double
	 */
	public $amount;
	/**
	 * Constructor
	 * @param string frequency
	 * @param double amount
	 * @return AmazonEc2TypeRecurringChargesSetItemType
	 */
	public function __construct($_frequency = null,$_amount = null)
	{
		parent::__construct(array('frequency'=>$_frequency,'amount'=>$_amount));
	}
	/**
	 * Set frequency
	 * @param string frequency
	 * @return string
	 */
	public function setFrequency($_frequency)
	{
		return ($this->frequency = $_frequency);
	}
	/**
	 * Get frequency
	 * @return string
	 */
	public function getFrequency()
	{
		return $this->frequency;
	}
	/**
	 * Set amount
	 * @param double amount
	 * @return double
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Get amount
	 * @return double
	 */
	public function getAmount()
	{
		return $this->amount;
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