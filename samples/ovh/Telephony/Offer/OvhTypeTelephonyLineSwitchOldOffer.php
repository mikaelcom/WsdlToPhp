<?php
/**
 * Class file for OvhTypeTelephonyLineSwitchOldOffer
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineSwitchOldOffer
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineSwitchOldOffer extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The numbers
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $numbers;
	/**
	 * The offers
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $offers;
	/**
	 * The billingAccount
	 * @var string
	 */
	public $billingAccount;
	/**
	 * Constructor
	 * @param string session
	 * @param OvhTypeMyArrayOfStringType numbers
	 * @param OvhTypeMyArrayOfStringType offers
	 * @param string billingAccount
	 * @return OvhTypeTelephonyLineSwitchOldOffer
	 */
	public function __construct($_session = null,$_numbers = null,$_offers = null,$_billingAccount = null)
	{
		parent::__construct(array('session'=>$_session,'numbers'=>new OvhTypeMyArrayOfStringType($_numbers),'offers'=>new OvhTypeMyArrayOfStringType($_offers),'billingAccount'=>$_billingAccount));
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
	 * Set offers
	 * @param MyArrayOfStringType offers
	 * @return MyArrayOfStringType
	 */
	public function setOffers($_offers)
	{
		return ($this->offers = $_offers);
	}
	/**
	 * Get offers
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getOffers()
	{
		return $this->offers;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>