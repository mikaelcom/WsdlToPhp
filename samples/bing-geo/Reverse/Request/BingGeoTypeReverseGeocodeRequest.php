<?php
/**
 * Class file for BingGeoTypeReverseGeocodeRequest
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeReverseGeocodeRequest
 * @date 02/07/2012
 */
class BingGeoTypeReverseGeocodeRequest extends BingGeoTypeRequestBase
{
	/**
	 * The Location
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeLocation
	 */
	public $Location;
	/**
	 * Constructor
	 * @param BingGeoTypeLocation Location
	 * @return BingGeoTypeReverseGeocodeRequest
	 */
	public function __construct($_Location = null)
	{
		BingGeoWsdlClass::__construct(array('Location'=>$_Location));
	}
	/**
	 * Set Location
	 * @param Location Location
	 * @return Location
	 */
	public function setLocation($_Location)
	{
		return ($this->Location = $_Location);
	}
	/**
	 * Get Location
	 * @return BingGeoTypeLocation
	 */
	public function getLocation()
	{
		return $this->Location;
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