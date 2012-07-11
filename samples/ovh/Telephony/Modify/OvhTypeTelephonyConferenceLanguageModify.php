<?php
/**
 * Class file for OvhTypeTelephonyConferenceLanguageModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyConferenceLanguageModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyConferenceLanguageModify extends OvhWsdlClass
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
	 * The newLanguage
	 * @var string
	 */
	public $newLanguage;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string room
	 * @param string newLanguage
	 * @return OvhTypeTelephonyConferenceLanguageModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_room = null,$_newLanguage = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'room'=>$_room,'newLanguage'=>$_newLanguage));
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
	 * Set newLanguage
	 * @param string newLanguage
	 * @return string
	 */
	public function setNewLanguage($_newLanguage)
	{
		return ($this->newLanguage = $_newLanguage);
	}
	/**
	 * Get newLanguage
	 * @return string
	 */
	public function getNewLanguage()
	{
		return $this->newLanguage;
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