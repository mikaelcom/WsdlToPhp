<?php
/**
 * Class file for JmDataMovieAppTypeRemoveFavoriteMovie
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeRemoveFavoriteMovie
 * @date 10/07/2012
 */
class JmDataMovieAppTypeRemoveFavoriteMovie extends JmDataMovieAppWsdlClass
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
	 * The movieID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $movieID;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param int userID
	 * @param int movieID
	 * @return JmDataMovieAppTypeRemoveFavoriteMovie
	 */
	public function __construct($_APIKEY = null,$_userID,$_movieID)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'userID'=>$_userID,'movieID'=>$_movieID));
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
	 * Set movieID
	 * @param int movieID
	 * @return int
	 */
	public function setMovieID($_movieID)
	{
		return ($this->movieID = $_movieID);
	}
	/**
	 * Get movieID
	 * @return int
	 */
	public function getMovieID()
	{
		return $this->movieID;
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