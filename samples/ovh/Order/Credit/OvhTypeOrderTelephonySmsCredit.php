<?php
/**
 * Class file for OvhTypeOrderTelephonySmsCredit
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOrderTelephonySmsCredit
 * @date 02/07/2012
 */
class OvhTypeOrderTelephonySmsCredit extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The quantity
	 * @var string
	 */
	public $quantity;
	/**
	 * The payWithPoints
	 * @var boolean
	 */
	public $payWithPoints;
	/**
	 * Constructor
	 * @param string session
	 * @param string smsAccount
	 * @param string quantity
	 * @param boolean payWithPoints
	 * @return OvhTypeOrderTelephonySmsCredit
	 */
	public function __construct($_session = null,$_smsAccount = null,$_quantity = null,$_payWithPoints = null)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'quantity'=>$_quantity,'payWithPoints'=>$_payWithPoints));
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
	 * Set smsAccount
	 * @param string smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
	}
	/**
	 * Get smsAccount
	 * @return string
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Set quantity
	 * @param string quantity
	 * @return string
	 */
	public function setQuantity($_quantity)
	{
		return ($this->quantity = $_quantity);
	}
	/**
	 * Get quantity
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}
	/**
	 * Set payWithPoints
	 * @param boolean payWithPoints
	 * @return boolean
	 */
	public function setPayWithPoints($_payWithPoints)
	{
		return ($this->payWithPoints = $_payWithPoints);
	}
	/**
	 * Get payWithPoints
	 * @return boolean
	 */
	public function getPayWithPoints()
	{
		return $this->payWithPoints;
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