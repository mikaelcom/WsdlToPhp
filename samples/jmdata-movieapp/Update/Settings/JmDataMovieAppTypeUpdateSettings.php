<?php
/**
 * Class file for JmDataMovieAppTypeUpdateSettings
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeUpdateSettings
 * @date 10/07/2012
 */
class JmDataMovieAppTypeUpdateSettings extends JmDataMovieAppWsdlClass
{
	/**
	 * The APIKEY
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $APIKEY;
	/**
	 * The userID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $userID;
	/**
	 * The reminderEnabled
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $reminderEnabled;
	/**
	 * The reminderTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $reminderTime;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param int userID
	 * @param int reminderEnabled
	 * @param string reminderTime
	 * @return JmDataMovieAppTypeUpdateSettings
	 */
	public function __construct($_APIKEY = null,$_userID,$_reminderEnabled,$_reminderTime = null)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'userID'=>$_userID,'reminderEnabled'=>$_reminderEnabled,'reminderTime'=>$_reminderTime));
	}
	/**
	 * Set APIKEY
	 * @param string APIKEY
	 * @return string
	 */
	public function setAPIKEY($_APIKEY)
	{
		return ($this->APIKEY = $_APIKEY);
	}
	/**
	 * Get APIKEY
	 * @return string
	 */
	public function getAPIKEY()
	{
		return $this->APIKEY;
	}
	/**
	 * Set userID
	 * @param int userID
	 * @return int
	 */
	public function setUserID($_userID)
	{
		return ($this->userID = $_userID);
	}
	/**
	 * Get userID
	 * @return int
	 */
	public function getUserID()
	{
		return $this->userID;
	}
	/**
	 * Set reminderEnabled
	 * @param int reminderEnabled
	 * @return int
	 */
	public function setReminderEnabled($_reminderEnabled)
	{
		return ($this->reminderEnabled = $_reminderEnabled);
	}
	/**
	 * Get reminderEnabled
	 * @return int
	 */
	public function getReminderEnabled()
	{
		return $this->reminderEnabled;
	}
	/**
	 * Set reminderTime
	 * @param string reminderTime
	 * @return string
	 */
	public function setReminderTime($_reminderTime)
	{
		return ($this->reminderTime = $_reminderTime);
	}
	/**
	 * Get reminderTime
	 * @return string
	 */
	public function getReminderTime()
	{
		return $this->reminderTime;
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