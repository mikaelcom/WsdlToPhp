<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountSet
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountSet
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountSet extends OvhWsdlClass
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
	 * The numbers
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $numbers;
	/**
	 * Constructor
	 * @param string session
	 * @param string billingAccount
	 * @param OvhTypeMyArrayOfStringType numbers
	 * @return OvhTypeTelephonyBillingAccountSet
	 */
	public function __construct($_session = null,$_billingAccount = null,$_numbers = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'numbers'=>new OvhTypeMyArrayOfStringType($_numbers)));
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
	 * Set numbers
	 * @param MyArrayOfStringType numbers
	 * @return MyArrayOfStringType
	 */
	public function setNumbers($_numbers)
	{
		return ($this->numbers = $_numbers);
	}
	/**
	 * Get numbers
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getNumbers()
	{
		return $this->numbers;
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