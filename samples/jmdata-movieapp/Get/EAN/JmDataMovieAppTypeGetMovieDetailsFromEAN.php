<?php
/**
 * Class file for JmDataMovieAppTypeGetMovieDetailsFromEAN
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetMovieDetailsFromEAN
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetMovieDetailsFromEAN extends JmDataMovieAppWsdlClass
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
	 * The ean
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ean;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param string ean
	 * @return JmDataMovieAppTypeGetMovieDetailsFromEAN
	 */
	public function __construct($_APIKEY = null,$_ean = null)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'ean'=>$_ean));
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
	 * Set ean
	 * @param string ean
	 * @return string
	 */
	public function setEan($_ean)
	{
		return ($this->ean = $_ean);
	}
	/**
	 * Get ean
	 * @return string
	 */
	public function getEan()
	{
		return $this->ean;
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