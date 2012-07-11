<?php
/**
 * Class file for JmDataMovieAppTypeRateMovie
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeRateMovie
 * @date 10/07/2012
 */
class JmDataMovieAppTypeRateMovie extends JmDataMovieAppWsdlClass
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
	 * The movieID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $movieID;
	/**
	 * The rating
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $rating;
	/**
	 * The userID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $userID;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param int movieID
	 * @param int rating
	 * @param int userID
	 * @return JmDataMovieAppTypeRateMovie
	 */
	public function __construct($_APIKEY = null,$_movieID,$_rating,$_userID)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'movieID'=>$_movieID,'rating'=>$_rating,'userID'=>$_userID));
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
	 * Set rating
	 * @param int rating
	 * @return int
	 */
	public function setRating($_rating)
	{
		return ($this->rating = $_rating);
	}
	/**
	 * Get rating
	 * @return int
	 */
	public function getRating()
	{
		return $this->rating;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>