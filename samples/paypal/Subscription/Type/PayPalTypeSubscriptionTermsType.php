<?php
/**
 * Class file for PayPalTypeSubscriptionTermsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSubscriptionTermsType
 * Documentation : SubscriptionTermsType Terms of a PayPal subscription.
 * @date 14/07/2012
 */
class PayPalTypeSubscriptionTermsType extends PayPalWsdlClass
{
	/**
	 * The Amount
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The period
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $period;
	/**
	 * Constructor
	 * @param PayPalTypeBasicAmountType Amount
	 * @param string period
	 * @return PayPalTypeSubscriptionTermsType
	 */
	public function __construct($_Amount = null,$_period = null)
	{
		parent::__construct(array('Amount'=>$_Amount,'period'=>$_period));
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
	 * Set period
	 * @param string period
	 * @return string
	 */
	public function setPeriod($_period)
	{
		return ($this->period = $_period);
	}
	/**
	 * Get period
	 * @return string
	 */
	public function getPeriod()
	{
		return $this->period;
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