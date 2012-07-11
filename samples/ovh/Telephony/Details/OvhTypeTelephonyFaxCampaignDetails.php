<?php
/**
 * Class file for OvhTypeTelephonyFaxCampaignDetails
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxCampaignDetails
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxCampaignDetails extends OvhWsdlClass
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
	 * The sendRecipients
	 * @var boolean
	 */
	public $sendRecipients;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string reference
	 * @param boolean sendRecipients
	 * @return OvhTypeTelephonyFaxCampaignDetails
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_reference = null,$_sendRecipients = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'reference'=>$_reference,'sendRecipients'=>$_sendRecipients));
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
	 * Set sendRecipients
	 * @param boolean sendRecipients
	 * @return boolean
	 */
	public function setSendRecipients($_sendRecipients)
	{
		return ($this->sendRecipients = $_sendRecipients);
	}
	/**
	 * Get sendRecipients
	 * @return boolean
	 */
	public function getSendRecipients()
	{
		return $this->sendRecipients;
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