<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountDescriptionModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountDescriptionModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountDescriptionModify extends OvhWsdlClass
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
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param string session
	 * @param string billingAccount
	 * @param string description
	 * @return OvhTypeTelephonyBillingAccountDescriptionModify
	 */
	public function __construct($_session = null,$_billingAccount = null,$_description = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'description'=>$_description));
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
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
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