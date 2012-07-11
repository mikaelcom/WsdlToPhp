<?php
/**
 * Class file for OvhTypeTelephonyHuntingModificationSimultaneousCalls
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingModificationSimultaneousCalls
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingModificationSimultaneousCalls extends OvhWsdlClass
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
	 * The numberOfCalls
	 * @var int
	 */
	public $numberOfCalls;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string billingAccount
	 * @param int numberOfCalls
	 * @return OvhTypeTelephonyHuntingModificationSimultaneousCalls
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_billingAccount = null,$_numberOfCalls = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'billingAccount'=>$_billingAccount,'numberOfCalls'=>$_numberOfCalls));
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
	 * Set numberOfCalls
	 * @param int numberOfCalls
	 * @return int
	 */
	public function setNumberOfCalls($_numberOfCalls)
	{
		return ($this->numberOfCalls = $_numberOfCalls);
	}
	/**
	 * Get numberOfCalls
	 * @return int
	 */
	public function getNumberOfCalls()
	{
		return $this->numberOfCalls;
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