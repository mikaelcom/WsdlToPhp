<?php
/**
 * Class file for OvhTypeTelephonyDepositMovementModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDepositMovementModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyDepositMovementModify extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The billingAccountSource
	 * @var string
	 */
	public $billingAccountSource;
	/**
	 * The billingAccountDestination
	 * @var string
	 */
	public $billingAccountDestination;
	/**
	 * The amount
	 * @var int
	 */
	public $amount;
	/**
	 * Constructor
	 * @param string session
	 * @param string billingAccountSource
	 * @param string billingAccountDestination
	 * @param int amount
	 * @return OvhTypeTelephonyDepositMovementModify
	 */
	public function __construct($_session = null,$_billingAccountSource = null,$_billingAccountDestination = null,$_amount = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccountSource'=>$_billingAccountSource,'billingAccountDestination'=>$_billingAccountDestination,'amount'=>$_amount));
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
	 * Set billingAccountSource
	 * @param string billingAccountSource
	 * @return string
	 */
	public function setBillingAccountSource($_billingAccountSource)
	{
		return ($this->billingAccountSource = $_billingAccountSource);
	}
	/**
	 * Get billingAccountSource
	 * @return string
	 */
	public function getBillingAccountSource()
	{
		return $this->billingAccountSource;
	}
	/**
	 * Set billingAccountDestination
	 * @param string billingAccountDestination
	 * @return string
	 */
	public function setBillingAccountDestination($_billingAccountDestination)
	{
		return ($this->billingAccountDestination = $_billingAccountDestination);
	}
	/**
	 * Get billingAccountDestination
	 * @return string
	 */
	public function getBillingAccountDestination()
	{
		return $this->billingAccountDestination;
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