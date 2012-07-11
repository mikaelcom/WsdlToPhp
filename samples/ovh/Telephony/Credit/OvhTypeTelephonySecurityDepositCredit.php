<?php
/**
 * Class file for OvhTypeTelephonySecurityDepositCredit
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySecurityDepositCredit
 * @date 02/07/2012
 */
class OvhTypeTelephonySecurityDepositCredit extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The billingAccount
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The amount
	 * @var int
	 */
	public $amount;
	/**
	 * Constructor
	 * @param string session
	 * @param string billingAccount
	 * @param int amount
	 * @return OvhTypeTelephonySecurityDepositCredit
	 */
	public function __construct($_session = null,$_billingAccount = null,$_amount = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'amount'=>$_amount));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
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
	 * Set amount
	 * @param int amount
	 * @return int
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Get amount
	 * @return int
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