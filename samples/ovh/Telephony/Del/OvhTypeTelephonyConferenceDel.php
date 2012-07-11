<?php
/**
 * Class file for OvhTypeTelephonyConferenceDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyConferenceDel
 * @date 02/07/2012
 */
class OvhTypeTelephonyConferenceDel extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string room
	 * @return OvhTypeTelephonyConferenceDel
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_room = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'room'=>$_room));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>