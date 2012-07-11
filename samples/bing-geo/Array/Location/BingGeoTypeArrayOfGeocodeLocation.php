<?php
/**
 * Class file for BingGeoTypeArrayOfGeocodeLocation
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeArrayOfGeocodeLocation
 * @date 02/07/2012
 */
class BingGeoTypeArrayOfGeocodeLocation extends BingGeoWsdlClass
{
	/**
	 * The GeocodeLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var BingGeoTypeGeocodeLocation
	 */
	public $GeocodeLocation;
	/**
	 * Constructor
	 * @param BingGeoTypeGeocodeLocation GeocodeLocation
	 * @return BingGeoTypeArrayOfGeocodeLocation
	 */
	public function __construct($_GeocodeLocation = null)
	{
		parent::__construct(array('GeocodeLocation'=>$_GeocodeLocation));
	}
	/**
	 * Set GeocodeLocation
	 * @param GeocodeLocation GeocodeLocation
	 * @return GeocodeLocation
	 */
	public function setGeocodeLocation($_GeocodeLocation)
	{
		return ($this->GeocodeLocation = $_GeocodeLocation);
	}
	/**
	 * Get GeocodeLocation
	 * @return BingGeoTypeGeocodeLocation
	 */
	public function getGeocodeLocation()
	{
		return $this->GeocodeLocation;
	}
	/**
	 * Returns the current element
	 * @see BingGeoWsdlClass::current()
	 * @return BingGeoTypeGeocodeLocation
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingGeoWsdlClass::item()
	 * @param int
	 * @return BingGeoTypeGeocodeLocation
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::first()
	 * @return BingGeoTypeGeocodeLocation
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::last()
	 * @return BingGeoTypeGeocodeLocation
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::offsetGet()
	 * @param int
	 * @return BingGeoTypeGeocodeLocation
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'GeocodeLocation'
	 */
	public function getAttributeName()
	{
		return 'GeocodeLocation';
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