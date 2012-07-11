<?php
/**
 * Class file for OvhTypeTelephonyListSummationCallsFromBillingAccount
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyListSummationCallsFromBillingAccount
 * @date 02/07/2012
 */
class OvhTypeTelephonyListSummationCallsFromBillingAccount extends OvhWsdlClass
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
	 * The reversableDelay
	 * @var string
	 */
	public $reversableDelay;
	/**
	 * Constructor
	 * @param string session
	 * @param string billingAccount
	 * @param string reversableDelay
	 * @return OvhTypeTelephonyListSummationCallsFromBillingAccount
	 */
	public function __construct($_session = null,$_billingAccount = null,$_reversableDelay = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'reversableDelay'=>$_reversableDelay));
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
	 * Set reversableDelay
	 * @param string reversableDelay
	 * @return string
	 */
	public function setReversableDelay($_reversableDelay)
	{
		return ($this->reversableDelay = $_reversableDelay);
	}
	/**
	 * Get reversableDelay
	 * @return string
	 */
	public function getReversableDelay()
	{
		return $this->reversableDelay;
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