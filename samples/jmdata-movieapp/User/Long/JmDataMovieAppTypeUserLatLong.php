<?php
/**
 * Class file for JmDataMovieAppTypeUserLatLong
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeUserLatLong
 * @date 10/07/2012
 */
class JmDataMovieAppTypeUserLatLong extends JmDataMovieAppWsdlClass
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
	 * The latitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var float
	 */
	public $latitude;
	/**
	 * The longitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var float
	 */
	public $longitude;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param int userID
	 * @param float latitude
	 * @param float longitude
	 * @return JmDataMovieAppTypeUserLatLong
	 */
	public function __construct($_APIKEY = null,$_userID,$_latitude,$_longitude)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'userID'=>$_userID,'latitude'=>$_latitude,'longitude'=>$_longitude));
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
	 * Set latitude
	 * @param float latitude
	 * @return float
	 */
	public function setLatitude($_latitude)
	{
		return ($this->latitude = $_latitude);
	}
	/**
	 * Get latitude
	 * @return float
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}
	/**
	 * Set longitude
	 * @param float longitude
	 * @return float
	 */
	public function setLongitude($_longitude)
	{
		return ($this->longitude = $_longitude);
	}
	/**
	 * Get longitude
	 * @return float
	 */
	public function getLongitude()
	{
		return $this->longitude;
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