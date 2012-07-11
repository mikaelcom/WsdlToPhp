<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountDel
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountDel extends OvhWsdlClass
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
	 * The cancelDelete
	 * @var boolean
	 */
	public $cancelDelete;
	/**
	 * Constructor
	 * @param string session
	 * @param string billingAccount
	 * @param boolean cancelDelete
	 * @return OvhTypeTelephonyBillingAccountDel
	 */
	public function __construct($_session = null,$_billingAccount = null,$_cancelDelete = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'cancelDelete'=>$_cancelDelete));
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
	 * Set cancelDelete
	 * @param boolean cancelDelete
	 * @return boolean
	 */
	public function setCancelDelete($_cancelDelete)
	{
		return ($this->cancelDelete = $_cancelDelete);
	}
	/**
	 * Get cancelDelete
	 * @return boolean
	 */
	public function getCancelDelete()
	{
		return $this->cancelDelete;
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