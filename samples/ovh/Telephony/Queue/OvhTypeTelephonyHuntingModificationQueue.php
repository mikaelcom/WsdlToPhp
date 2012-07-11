<?php
/**
 * Class file for OvhTypeTelephonyHuntingModificationQueue
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingModificationQueue
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingModificationQueue extends OvhWsdlClass
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
	 * The onHoldTimer
	 * @var int
	 */
	public $onHoldTimer;
	/**
	 * The queueSize
	 * @var int
	 */
	public $queueSize;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string billingAccount
	 * @param int onHoldTimer
	 * @param int queueSize
	 * @return OvhTypeTelephonyHuntingModificationQueue
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_billingAccount = null,$_onHoldTimer = null,$_queueSize = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'billingAccount'=>$_billingAccount,'onHoldTimer'=>$_onHoldTimer,'queueSize'=>$_queueSize));
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
	 * Set onHoldTimer
	 * @param int onHoldTimer
	 * @return int
	 */
	public function setOnHoldTimer($_onHoldTimer)
	{
		return ($this->onHoldTimer = $_onHoldTimer);
	}
	/**
	 * Get onHoldTimer
	 * @return int
	 */
	public function getOnHoldTimer()
	{
		return $this->onHoldTimer;
	}
	/**
	 * Set queueSize
	 * @param int queueSize
	 * @return int
	 */
	public function setQueueSize($_queueSize)
	{
		return ($this->queueSize = $_queueSize);
	}
	/**
	 * Get queueSize
	 * @return int
	 */
	public function getQueueSize()
	{
		return $this->queueSize;
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