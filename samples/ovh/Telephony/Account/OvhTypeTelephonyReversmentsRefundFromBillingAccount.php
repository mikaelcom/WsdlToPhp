<?php
/**
 * Class file for OvhTypeTelephonyReversmentsRefundFromBillingAccount
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyReversmentsRefundFromBillingAccount
 * @date 02/07/2012
 */
class OvhTypeTelephonyReversmentsRefundFromBillingAccount extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string billingAccount
	 * @return OvhTypeTelephonyReversmentsRefundFromBillingAccount
	 */
	public function __construct($_session = null,$_billingAccount = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>