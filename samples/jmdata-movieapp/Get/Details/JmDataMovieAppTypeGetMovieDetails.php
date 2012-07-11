<?php
/**
 * Class file for JmDataMovieAppTypeGetMovieDetails
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetMovieDetails
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetMovieDetails extends JmDataMovieAppWsdlClass
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
	 * Constructor
	 * @param string APIKEY
	 * @param int movieID
	 * @return JmDataMovieAppTypeGetMovieDetails
	 */
	public function __construct($_APIKEY = null,$_movieID)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'movieID'=>$_movieID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>