<?php
/**
 * Class file for OvhTypeTelephonyConferenceMailReportModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyConferenceMailReportModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyConferenceMailReportModify extends OvhWsdlClass
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
	 * The room
	 * @var string
	 */
	public $room;
	/**
	 * The enable
	 * @var boolean
	 */
	public $enable;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string room
	 * @param boolean enable
	 * @param string email
	 * @return OvhTypeTelephonyConferenceMailReportModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_room = null,$_enable = null,$_email = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'room'=>$_room,'enable'=>$_enable,'email'=>$_email));
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
	 * Set room
	 * @param string room
	 * @return string
	 */
	public function setRoom($_room)
	{
		return ($this->room = $_room);
	}
	/**
	 * Get room
	 * @return string
	 */
	public function getRoom()
	{
		return $this->room;
	}
	/**
	 * Set enable
	 * @param boolean enable
	 * @return boolean
	 */
	public function setEnable($_enable)
	{
		return ($this->enable = $_enable);
	}
	/**
	 * Get enable
	 * @return boolean
	 */
	public function getEnable()
	{
		return $this->enable;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
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