<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountConsumptionCSVByMail
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountConsumptionCSVByMail
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountConsumptionCSVByMail extends OvhWsdlClass
{
	/**
	 * The billingAccount
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * Constructor
	 * @param string billingAccount
	 * @param string date
	 * @return OvhTypeTelephonyBillingAccountConsumptionCSVByMail
	 */
	public function __construct($_billingAccount = null,$_date = null)
	{
		parent::__construct(array('billingAccount'=>$_billingAccount,'date'=>$_date));
	}
	/**
	 * Set billingAccount
	 * @param string billingAccount
	 * @return string
	 */
	public function setBillingAccount($_billingAccount)
	{
		return ($this->billingAccount = $_billingAccount);
	}
	/**
	 * Get billingAccount
	 * @return string
	 */
	public function getBillingAccount()
	{
		return $this->billingAccount;
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
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