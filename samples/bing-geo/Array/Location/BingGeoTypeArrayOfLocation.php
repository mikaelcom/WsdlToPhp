<?php
/**
 * Class file for BingGeoTypeArrayOfLocation
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeArrayOfLocation
 * @date 02/07/2012
 */
class BingGeoTypeArrayOfLocation extends BingGeoWsdlClass
{
	/**
	 * The Location
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var BingGeoTypeLocation
	 */
	public $Location;
	/**
	 * Constructor
	 * @param BingGeoTypeLocation Location
	 * @return BingGeoTypeArrayOfLocation
	 */
	public function __construct($_Location = null)
	{
		parent::__construct(array('Location'=>$_Location));
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
	 * Returns the current element
	 * @see BingGeoWsdlClass::current()
	 * @return BingGeoTypeLocation
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingGeoWsdlClass::item()
	 * @param int
	 * @return BingGeoTypeLocation
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::first()
	 * @return BingGeoTypeLocation
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::last()
	 * @return BingGeoTypeLocation
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::offsetGet()
	 * @param int
	 * @return BingGeoTypeLocation
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Location'
	 */
	public function getAttributeName()
	{
		return 'Location';
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