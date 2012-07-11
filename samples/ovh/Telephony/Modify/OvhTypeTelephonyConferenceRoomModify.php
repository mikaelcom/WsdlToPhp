<?php
/**
 * Class file for OvhTypeTelephonyConferenceRoomModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyConferenceRoomModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyConferenceRoomModify extends OvhWsdlClass
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
	 * The currentRoom
	 * @var string
	 */
	public $currentRoom;
	/**
	 * The newRoom
	 * @var string
	 */
	public $newRoom;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string currentRoom
	 * @param string newRoom
	 * @return OvhTypeTelephonyConferenceRoomModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_currentRoom = null,$_newRoom = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'currentRoom'=>$_currentRoom,'newRoom'=>$_newRoom));
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
	 * Set currentRoom
	 * @param string currentRoom
	 * @return string
	 */
	public function setCurrentRoom($_currentRoom)
	{
		return ($this->currentRoom = $_currentRoom);
	}
	/**
	 * Get currentRoom
	 * @return string
	 */
	public function getCurrentRoom()
	{
		return $this->currentRoom;
	}
	/**
	 * Set newRoom
	 * @param string newRoom
	 * @return string
	 */
	public function setNewRoom($_newRoom)
	{
		return ($this->newRoom = $_newRoom);
	}
	/**
	 * Get newRoom
	 * @return string
	 */
	public function getNewRoom()
	{
		return $this->newRoom;
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