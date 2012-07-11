<?php
/**
 * Class file for JmDataMovieAppTypeGetStoresFromIDs
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetStoresFromIDs
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetStoresFromIDs extends JmDataMovieAppWsdlClass
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
	 * The IDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IDs;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param string IDs
	 * @return JmDataMovieAppTypeGetStoresFromIDs
	 */
	public function __construct($_APIKEY = null,$_IDs = null)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'IDs'=>$_IDs));
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
	 * Set IDs
	 * @param string IDs
	 * @return string
	 */
	public function setIDs($_IDs)
	{
		return ($this->IDs = $_IDs);
	}
	/**
	 * Get IDs
	 * @return string
	 */
	public function getIDs()
	{
		return $this->IDs;
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