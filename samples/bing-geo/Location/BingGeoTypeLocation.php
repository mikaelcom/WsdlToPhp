<?php
/**
 * Class file for BingGeoTypeLocation
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeLocation
 * @date 02/07/2012
 */
class BingGeoTypeLocation extends BingGeoWsdlClass
{
	/**
	 * The Altitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var double
	 */
	public $Altitude;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var double
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var double
	 */
	public $Longitude;
	/**
	 * Constructor
	 * @param double Altitude
	 * @param double Latitude
	 * @param double Longitude
	 * @return BingGeoTypeLocation
	 */
	public function __construct($_Altitude = null,$_Latitude = null,$_Longitude = null)
	{
		parent::__construct(array('Altitude'=>$_Altitude,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude));
	}
	/**
	 * Set Altitude
	 * @param double Altitude
	 * @return double
	 */
	public function setAltitude($_Altitude)
	{
		return ($this->Altitude = $_Altitude);
	}
	/**
	 * Get Altitude
	 * @return double
	 */
	public function getAltitude()
	{
		return $this->Altitude;
	}
	/**
	 * Set Latitude
	 * @param double Latitude
	 * @return double
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return double
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Longitude
	 * @param double Longitude
	 * @return double
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return double
	 */
	public function getLongitude()
	{
		return $this->Longitude;
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