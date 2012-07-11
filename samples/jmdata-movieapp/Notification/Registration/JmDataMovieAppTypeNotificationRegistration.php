<?php
/**
 * Class file for JmDataMovieAppTypeNotificationRegistration
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeNotificationRegistration
 * @date 10/07/2012
 */
class JmDataMovieAppTypeNotificationRegistration extends JmDataMovieAppWsdlClass
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
	 * The tokenID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $tokenID;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param int userID
	 * @param string tokenID
	 * @return JmDataMovieAppTypeNotificationRegistration
	 */
	public function __construct($_APIKEY = null,$_userID,$_tokenID = null)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'userID'=>$_userID,'tokenID'=>$_tokenID));
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
	 * Set tokenID
	 * @param string tokenID
	 * @return string
	 */
	public function setTokenID($_tokenID)
	{
		return ($this->tokenID = $_tokenID);
	}
	/**
	 * Get tokenID
	 * @return string
	 */
	public function getTokenID()
	{
		return $this->tokenID;
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