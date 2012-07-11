<?php
/**
 * Class file for OvhTypeTelephonyFaxCampaignStartStop
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxCampaignStartStop
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxCampaignStartStop extends OvhWsdlClass
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
	 * The reference
	 * @var string
	 */
	public $reference;
	/**
	 * The forceStart
	 * @var boolean
	 */
	public $forceStart;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string reference
	 * @param boolean forceStart
	 * @return OvhTypeTelephonyFaxCampaignStartStop
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_reference = null,$_forceStart = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'reference'=>$_reference,'forceStart'=>$_forceStart));
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
	 * Set reference
	 * @param string reference
	 * @return string
	 */
	public function setReference($_reference)
	{
		return ($this->reference = $_reference);
	}
	/**
	 * Get reference
	 * @return string
	 */
	public function getReference()
	{
		return $this->reference;
	}
	/**
	 * Set forceStart
	 * @param boolean forceStart
	 * @return boolean
	 */
	public function setForceStart($_forceStart)
	{
		return ($this->forceStart = $_forceStart);
	}
	/**
	 * Get forceStart
	 * @return boolean
	 */
	public function getForceStart()
	{
		return $this->forceStart;
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