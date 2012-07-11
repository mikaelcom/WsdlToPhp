<?php
/**
 * Class file for OvhTypeTelephonyLineOrder
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineOrder
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineOrder extends OvhWsdlClass
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
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The prefix
	 * @var string
	 */
	public $prefix;
	/**
	 * The quantity
	 * @var int
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
	 * @param string billingAccount
	 * @param string offer
	 * @param string prefix
	 * @param int quantity
	 * @param boolean payWithPoints
	 * @return OvhTypeTelephonyLineOrder
	 */
	public function __construct($_session = null,$_billingAccount = null,$_offer = null,$_prefix = null,$_quantity = null,$_payWithPoints = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'offer'=>$_offer,'prefix'=>$_prefix,'quantity'=>$_quantity,'payWithPoints'=>$_payWithPoints));
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
	 * Set offer
	 * @param string offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get offer
	 * @return string
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set prefix
	 * @param string prefix
	 * @return string
	 */
	public function setPrefix($_prefix)
	{
		return ($this->prefix = $_prefix);
	}
	/**
	 * Get prefix
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}
	/**
	 * Set quantity
	 * @param int quantity
	 * @return int
	 */
	public function setQuantity($_quantity)
	{
		return ($this->quantity = $_quantity);
	}
	/**
	 * Get quantity
	 * @return int
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