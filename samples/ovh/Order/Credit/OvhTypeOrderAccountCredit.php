<?php
/**
 * Class file for OvhTypeOrderAccountCredit
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOrderAccountCredit
 * @date 02/07/2012
 */
class OvhTypeOrderAccountCredit extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The amount
	 * @var int
	 */
	public $amount;
	/**
	 * Constructor
	 * @param string session
	 * @param int amount
	 * @return OvhTypeOrderAccountCredit
	 */
	public function __construct($_session = null,$_amount = null)
	{
		parent::__construct(array('session'=>$_session,'amount'=>$_amount));
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