<?php
/**
 * Class file for JmDataMovieAppTypeGetMoviesFromIDs
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetMoviesFromIDs
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetMoviesFromIDs extends JmDataMovieAppWsdlClass
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
	 * The movieIDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $movieIDs;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param string movieIDs
	 * @return JmDataMovieAppTypeGetMoviesFromIDs
	 */
	public function __construct($_APIKEY = null,$_movieIDs = null)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'movieIDs'=>$_movieIDs));
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
	 * Set movieIDs
	 * @param string movieIDs
	 * @return string
	 */
	public function setMovieIDs($_movieIDs)
	{
		return ($this->movieIDs = $_movieIDs);
	}
	/**
	 * Get movieIDs
	 * @return string
	 */
	public function getMovieIDs()
	{
		return $this->movieIDs;
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