<?php
/**
 * Class file for OvhTypeTelephonyHuntingModificationMode
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingModificationMode
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingModificationMode extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The billingAccount
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The strategy
	 * @var string
	 */
	public $strategy;
	/**
	 * The pattern
	 * @var string
	 */
	public $pattern;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string billingAccount
	 * @param string strategy
	 * @param string pattern
	 * @return OvhTypeTelephonyHuntingModificationMode
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_billingAccount = null,$_strategy = null,$_pattern = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'billingAccount'=>$_billingAccount,'strategy'=>$_strategy,'pattern'=>$_pattern));
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
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
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
	 * Set strategy
	 * @param string strategy
	 * @return string
	 */
	public function setStrategy($_strategy)
	{
		return ($this->strategy = $_strategy);
	}
	/**
	 * Get strategy
	 * @return string
	 */
	public function getStrategy()
	{
		return $this->strategy;
	}
	/**
	 * Set pattern
	 * @param string pattern
	 * @return string
	 */
	public function setPattern($_pattern)
	{
		return ($this->pattern = $_pattern);
	}
	/**
	 * Get pattern
	 * @return string
	 */
	public function getPattern()
	{
		return $this->pattern;
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