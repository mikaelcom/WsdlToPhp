<?php
/**
 * Class file for JmDataMovieAppTypeGetNearByStores
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetNearByStores
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetNearByStores extends JmDataMovieAppWsdlClass
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
	 * The lat
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $lat;
	/**
	 * The lon
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $lon;
	/**
	 * The storeType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $storeType;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param double lat
	 * @param double lon
	 * @param int storeType
	 * @return JmDataMovieAppTypeGetNearByStores
	 */
	public function __construct($_APIKEY = null,$_lat,$_lon,$_storeType)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'lat'=>$_lat,'lon'=>$_lon,'storeType'=>$_storeType));
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
	 * Set lat
	 * @param double lat
	 * @return double
	 */
	public function setLat($_lat)
	{
		return ($this->lat = $_lat);
	}
	/**
	 * Get lat
	 * @return double
	 */
	public function getLat()
	{
		return $this->lat;
	}
	/**
	 * Set lon
	 * @param double lon
	 * @return double
	 */
	public function setLon($_lon)
	{
		return ($this->lon = $_lon);
	}
	/**
	 * Get lon
	 * @return double
	 */
	public function getLon()
	{
		return $this->lon;
	}
	/**
	 * Set storeType
	 * @param int storeType
	 * @return int
	 */
	public function setStoreType($_storeType)
	{
		return ($this->storeType = $_storeType);
	}
	/**
	 * Get storeType
	 * @return int
	 */
	public function getStoreType()
	{
		return $this->storeType;
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