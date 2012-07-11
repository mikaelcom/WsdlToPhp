<?php
/**
 * Class file for JmDataMovieAppTypeUpdateUUID
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeUpdateUUID
 * @date 10/07/2012
 */
class JmDataMovieAppTypeUpdateUUID extends JmDataMovieAppWsdlClass
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
	 * The UUID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UUID;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param int userID
	 * @param string UUID
	 * @return JmDataMovieAppTypeUpdateUUID
	 */
	public function __construct($_APIKEY = null,$_userID,$_UUID = null)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'userID'=>$_userID,'UUID'=>$_UUID));
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
	 * Set UUID
	 * @param string UUID
	 * @return string
	 */
	public function setUUID($_UUID)
	{
		return ($this->UUID = $_UUID);
	}
	/**
	 * Get UUID
	 * @return string
	 */
	public function getUUID()
	{
		return $this->UUID;
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