<?php
/**
 * Class file for OvhTypeTelephonyHuntingModificationMembers
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingModificationMembers
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingModificationMembers extends OvhWsdlClass
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
	 * The list_destinations
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $list_destinations;
	/**
	 * The list_noReplyTimer
	 * @var OvhTypeMyArrayOfIntType
	 */
	public $list_noReplyTimer;
	/**
	 * The list_logged
	 * @var OvhTypeMyArrayOfBooleanType
	 */
	public $list_logged;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string billingAccount
	 * @param OvhTypeMyArrayOfStringType list_destinations
	 * @param OvhTypeMyArrayOfIntType list_noReplyTimer
	 * @param OvhTypeMyArrayOfBooleanType list_logged
	 * @return OvhTypeTelephonyHuntingModificationMembers
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_billingAccount = null,$_list_destinations = null,$_list_noReplyTimer = null,$_list_logged = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'billingAccount'=>$_billingAccount,'list_destinations'=>new OvhTypeMyArrayOfStringType($_list_destinations),'list_noReplyTimer'=>new OvhTypeMyArrayOfIntType($_list_noReplyTimer),'list_logged'=>new OvhTypeMyArrayOfBooleanType($_list_logged)));
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
	 * Set list_destinations
	 * @param MyArrayOfStringType list_destinations
	 * @return MyArrayOfStringType
	 */
	public function setList_destinations($_list_destinations)
	{
		return ($this->list_destinations = $_list_destinations);
	}
	/**
	 * Get list_destinations
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getList_destinations()
	{
		return $this->list_destinations;
	}
	/**
	 * Set list_noReplyTimer
	 * @param MyArrayOfIntType list_noReplyTimer
	 * @return MyArrayOfIntType
	 */
	public function setList_noReplyTimer($_list_noReplyTimer)
	{
		return ($this->list_noReplyTimer = $_list_noReplyTimer);
	}
	/**
	 * Get list_noReplyTimer
	 * @return OvhTypeMyArrayOfIntType
	 */
	public function getList_noReplyTimer()
	{
		return $this->list_noReplyTimer;
	}
	/**
	 * Set list_logged
	 * @param MyArrayOfBooleanType list_logged
	 * @return MyArrayOfBooleanType
	 */
	public function setList_logged($_list_logged)
	{
		return ($this->list_logged = $_list_logged);
	}
	/**
	 * Get list_logged
	 * @return OvhTypeMyArrayOfBooleanType
	 */
	public function getList_logged()
	{
		return $this->list_logged;
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