<?php
/**
 * Class file for OvhTypeTelephonyFMHuntingModificationVoicemail
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFMHuntingModificationVoicemail
 * @date 02/07/2012
 */
class OvhTypeTelephonyFMHuntingModificationVoicemail extends OvhWsdlClass
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
	 * The noReplyTimer
	 * @var int
	 */
	public $noReplyTimer;
	/**
	 * The mainVoicemail
	 * @var string
	 */
	public $mainVoicemail;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string billingAccount
	 * @param int noReplyTimer
	 * @param string mainVoicemail
	 * @return OvhTypeTelephonyFMHuntingModificationVoicemail
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_billingAccount = null,$_noReplyTimer = null,$_mainVoicemail = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'billingAccount'=>$_billingAccount,'noReplyTimer'=>$_noReplyTimer,'mainVoicemail'=>$_mainVoicemail));
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
	 * Set noReplyTimer
	 * @param int noReplyTimer
	 * @return int
	 */
	public function setNoReplyTimer($_noReplyTimer)
	{
		return ($this->noReplyTimer = $_noReplyTimer);
	}
	/**
	 * Get noReplyTimer
	 * @return int
	 */
	public function getNoReplyTimer()
	{
		return $this->noReplyTimer;
	}
	/**
	 * Set mainVoicemail
	 * @param string mainVoicemail
	 * @return string
	 */
	public function setMainVoicemail($_mainVoicemail)
	{
		return ($this->mainVoicemail = $_mainVoicemail);
	}
	/**
	 * Get mainVoicemail
	 * @return string
	 */
	public function getMainVoicemail()
	{
		return $this->mainVoicemail;
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