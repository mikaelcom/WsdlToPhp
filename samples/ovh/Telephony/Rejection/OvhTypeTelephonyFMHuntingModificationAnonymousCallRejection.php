<?php
/**
 * Class file for OvhTypeTelephonyFMHuntingModificationAnonymousCallRejection
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFMHuntingModificationAnonymousCallRejection
 * @date 02/07/2012
 */
class OvhTypeTelephonyFMHuntingModificationAnonymousCallRejection extends OvhWsdlClass
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
	 * The anonymousCallRejection
	 * @var boolean
	 */
	public $anonymousCallRejection;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string billingAccount
	 * @param boolean anonymousCallRejection
	 * @return OvhTypeTelephonyFMHuntingModificationAnonymousCallRejection
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_billingAccount = null,$_anonymousCallRejection = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'billingAccount'=>$_billingAccount,'anonymousCallRejection'=>$_anonymousCallRejection));
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
	 * Set anonymousCallRejection
	 * @param boolean anonymousCallRejection
	 * @return boolean
	 */
	public function setAnonymousCallRejection($_anonymousCallRejection)
	{
		return ($this->anonymousCallRejection = $_anonymousCallRejection);
	}
	/**
	 * Get anonymousCallRejection
	 * @return boolean
	 */
	public function getAnonymousCallRejection()
	{
		return $this->anonymousCallRejection;
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