<?php
/**
 * Class file for OvhTypeTelephonyBillDetails
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillDetails
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillDetails extends OvhWsdlClass
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
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * Constructor
	 * @param string session
	 * @param string billingAccount
	 * @param string date
	 * @return OvhTypeTelephonyBillDetails
	 */
	public function __construct($_session = null,$_billingAccount = null,$_date = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'date'=>$_date));
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