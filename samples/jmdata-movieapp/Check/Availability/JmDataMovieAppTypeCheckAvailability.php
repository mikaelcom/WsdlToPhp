<?php
/**
 * Class file for JmDataMovieAppTypeCheckAvailability
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeCheckAvailability
 * @date 10/07/2012
 */
class JmDataMovieAppTypeCheckAvailability extends JmDataMovieAppWsdlClass
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
	 * @param int movieID
	 * @param int storeID
	 * @return JmDataMovieAppTypeCheckAvailability
	 */
	public function __construct($_APIKEY = null,$_movieID,$_storeID)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'movieID'=>$_movieID,'storeID'=>$_storeID));
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