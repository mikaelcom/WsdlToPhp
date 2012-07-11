<?php
/**
 * Class file for EccGeoZipCityTypeZipCity
 * @date 03/07/2012
 */
/**
 * Class EccGeoZipCityTypeZipCity
 * @date 03/07/2012
 */
class EccGeoZipCityTypeZipCity extends EccGeoZipCityWsdlClass
{
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Longitude;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Latitude;
	/**
	 * Constructor
	 * @param string City
	 * @param string State
	 * @param string Longitude
	 * @param string Latitude
	 * @return EccGeoZipCityTypeZipCity
	 */
	public function __construct($_City = null,$_State = null,$_Longitude = null,$_Latitude = null)
	{
		parent::__construct(array('City'=>$_City,'State'=>$_State,'Longitude'=>$_Longitude,'Latitude'=>$_Latitude));
	}
	/**
	 * Set City
	 * @param string City
	 * @return string
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set Longitude
	 * @param string Longitude
	 * @return string
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return string
	 */
	public function getLongitude()
	{
		return $this->Longitude;
	}
	/**
	 * Set Latitude
	 * @param string Latitude
	 * @return string
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return string
	 */
	public function getLatitude()
	{
		return $this->Latitude;
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