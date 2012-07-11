<?php
/**
 * Class file for BingGeoTypeArrayOfGeocodeResult
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeArrayOfGeocodeResult
 * @date 02/07/2012
 */
class BingGeoTypeArrayOfGeocodeResult extends BingGeoWsdlClass
{
	/**
	 * The GeocodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var BingGeoTypeGeocodeResult
	 */
	public $GeocodeResult;
	/**
	 * Constructor
	 * @param BingGeoTypeGeocodeResult GeocodeResult
	 * @return BingGeoTypeArrayOfGeocodeResult
	 */
	public function __construct($_GeocodeResult = null)
	{
		parent::__construct(array('GeocodeResult'=>$_GeocodeResult));
	}
	/**
	 * Set GeocodeResult
	 * @param GeocodeResult GeocodeResult
	 * @return GeocodeResult
	 */
	public function setGeocodeResult($_GeocodeResult)
	{
		return ($this->GeocodeResult = $_GeocodeResult);
	}
	/**
	 * Get GeocodeResult
	 * @return BingGeoTypeGeocodeResult
	 */
	public function getGeocodeResult()
	{
		return $this->GeocodeResult;
	}
	/**
	 * Returns the current element
	 * @see BingGeoWsdlClass::current()
	 * @return BingGeoTypeGeocodeResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingGeoWsdlClass::item()
	 * @param int
	 * @return BingGeoTypeGeocodeResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::first()
	 * @return BingGeoTypeGeocodeResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::last()
	 * @return BingGeoTypeGeocodeResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::offsetGet()
	 * @param int
	 * @return BingGeoTypeGeocodeResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'GeocodeResult'
	 */
	public function getAttributeName()
	{
		return 'GeocodeResult';
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