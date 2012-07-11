<?php
/**
 * Class file for JmDataMovieAppTypeRegisterFavoriteStore
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeRegisterFavoriteStore
 * @date 10/07/2012
 */
class JmDataMovieAppTypeRegisterFavoriteStore extends JmDataMovieAppWsdlClass
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
	 * The storeID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $storeID;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param int userID
	 * @param int storeID
	 * @return JmDataMovieAppTypeRegisterFavoriteStore
	 */
	public function __construct($_APIKEY = null,$_userID,$_storeID)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'userID'=>$_userID,'storeID'=>$_storeID));
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
	 * Set storeID
	 * @param int storeID
	 * @return int
	 */
	public function setStoreID($_storeID)
	{
		return ($this->storeID = $_storeID);
	}
	/**
	 * Get storeID
	 * @return int
	 */
	public function getStoreID()
	{
		return $this->storeID;
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