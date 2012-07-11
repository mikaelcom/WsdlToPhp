<?php
/**
 * Class file for OvhTypeTelephonySpecialNumberOrder
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySpecialNumberOrder
 * @date 02/07/2012
 */
class OvhTypeTelephonySpecialNumberOrder extends OvhWsdlClass
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
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The aliasNumber
	 * @var string
	 */
	public $aliasNumber;
	/**
	 * The prefix
	 * @var string
	 */
	public $prefix;
	/**
	 * The category
	 * @var string
	 */
	public $category;
	/**
	 * The numberToReserve
	 * @var string
	 */
	public $numberToReserve;
	/**
	 * Constructor
	 * @param string session
	 * @param string billingAccount
	 * @param string country
	 * @param string aliasNumber
	 * @param string prefix
	 * @param string category
	 * @param string numberToReserve
	 * @return OvhTypeTelephonySpecialNumberOrder
	 */
	public function __construct($_session = null,$_billingAccount = null,$_country = null,$_aliasNumber = null,$_prefix = null,$_category = null,$_numberToReserve = null)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'country'=>$_country,'aliasNumber'=>$_aliasNumber,'prefix'=>$_prefix,'category'=>$_category,'numberToReserve'=>$_numberToReserve));
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
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set aliasNumber
	 * @param string aliasNumber
	 * @return string
	 */
	public function setAliasNumber($_aliasNumber)
	{
		return ($this->aliasNumber = $_aliasNumber);
	}
	/**
	 * Get aliasNumber
	 * @return string
	 */
	public function getAliasNumber()
	{
		return $this->aliasNumber;
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
	 * Set category
	 * @param string category
	 * @return string
	 */
	public function setCategory($_category)
	{
		return ($this->category = $_category);
	}
	/**
	 * Get category
	 * @return string
	 */
	public function getCategory()
	{
		return $this->category;
	}
	/**
	 * Set numberToReserve
	 * @param string numberToReserve
	 * @return string
	 */
	public function setNumberToReserve($_numberToReserve)
	{
		return ($this->numberToReserve = $_numberToReserve);
	}
	/**
	 * Get numberToReserve
	 * @return string
	 */
	public function getNumberToReserve()
	{
		return $this->numberToReserve;
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