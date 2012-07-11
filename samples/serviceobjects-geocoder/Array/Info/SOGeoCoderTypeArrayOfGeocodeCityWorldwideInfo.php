<?php
/**
 * Class file for SOGeoCoderTypeArrayOfGeocodeCityWorldwideInfo
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeArrayOfGeocodeCityWorldwideInfo
 * @date 05/07/2012
 */
class SOGeoCoderTypeArrayOfGeocodeCityWorldwideInfo extends SOGeoCoderWsdlClass
{
	/**
	 * The GeocodeCityWorldwideInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOGeoCoderTypeGeocodeCityWorldwideInfo
	 */
	public $GeocodeCityWorldwideInfo;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeGeocodeCityWorldwideInfo GeocodeCityWorldwideInfo
	 * @return SOGeoCoderTypeArrayOfGeocodeCityWorldwideInfo
	 */
	public function __construct($_GeocodeCityWorldwideInfo = null)
	{
		parent::__construct(array('GeocodeCityWorldwideInfo'=>$_GeocodeCityWorldwideInfo));
	}
	/**
	 * Set GeocodeCityWorldwideInfo
	 * @param GeocodeCityWorldwideInfo GeocodeCityWorldwideInfo
	 * @return GeocodeCityWorldwideInfo
	 */
	public function setGeocodeCityWorldwideInfo($_GeocodeCityWorldwideInfo)
	{
		return ($this->GeocodeCityWorldwideInfo = $_GeocodeCityWorldwideInfo);
	}
	/**
	 * Get GeocodeCityWorldwideInfo
	 * @return SOGeoCoderTypeGeocodeCityWorldwideInfo
	 */
	public function getGeocodeCityWorldwideInfo()
	{
		return $this->GeocodeCityWorldwideInfo;
	}
	/**
	 * Returns the current element
	 * @see SOGeoCoderWsdlClass::current()
	 * @return SOGeoCoderTypeGeocodeCityWorldwideInfo
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOGeoCoderWsdlClass::item()
	 * @param int
	 * @return SOGeoCoderTypeGeocodeCityWorldwideInfo
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOGeoCoderWsdlClass::first()
	 * @return SOGeoCoderTypeGeocodeCityWorldwideInfo
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOGeoCoderWsdlClass::last()
	 * @return SOGeoCoderTypeGeocodeCityWorldwideInfo
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOGeoCoderWsdlClass::offsetGet()
	 * @param int
	 * @return SOGeoCoderTypeGeocodeCityWorldwideInfo
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'GeocodeCityWorldwideInfo'
	 */
	public function getAttributeName()
	{
		return 'GeocodeCityWorldwideInfo';
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