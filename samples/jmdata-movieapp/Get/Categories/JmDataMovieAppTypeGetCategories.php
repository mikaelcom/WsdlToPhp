<?php
/**
 * Class file for JmDataMovieAppTypeGetCategories
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetCategories
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetCategories extends JmDataMovieAppWsdlClass
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
	 * Constructor
	 * @param string APIKEY
	 * @return JmDataMovieAppTypeGetCategories
	 */
	public function __construct($_APIKEY = null)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>