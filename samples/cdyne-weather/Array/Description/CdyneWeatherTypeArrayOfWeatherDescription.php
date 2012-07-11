<?php
/**
 * Class file for CdyneWeatherTypeArrayOfWeatherDescription
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypeArrayOfWeatherDescription
 * @date 02/07/2012
 */
class CdyneWeatherTypeArrayOfWeatherDescription extends CdyneWeatherWsdlClass
{
	/**
	 * The WeatherDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var CdyneWeatherTypeWeatherDescription
	 */
	public $WeatherDescription;
	/**
	 * Constructor
	 * @param CdyneWeatherTypeWeatherDescription WeatherDescription
	 * @return CdyneWeatherTypeArrayOfWeatherDescription
	 */
	public function __construct($_WeatherDescription = null)
	{
		parent::__construct(array('WeatherDescription'=>$_WeatherDescription));
	}
	/**
	 * Set WeatherDescription
	 * @param WeatherDescription WeatherDescription
	 * @return WeatherDescription
	 */
	public function setWeatherDescription($_WeatherDescription)
	{
		return ($this->WeatherDescription = $_WeatherDescription);
	}
	/**
	 * Get WeatherDescription
	 * @return CdyneWeatherTypeWeatherDescription
	 */
	public function getWeatherDescription()
	{
		return $this->WeatherDescription;
	}
	/**
	 * Returns the current element
	 * @see CdyneWeatherWsdlClass::current()
	 * @return CdyneWeatherTypeWeatherDescription
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see CdyneWeatherWsdlClass::item()
	 * @param int
	 * @return CdyneWeatherTypeWeatherDescription
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see CdyneWeatherWsdlClass::first()
	 * @return CdyneWeatherTypeWeatherDescription
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see CdyneWeatherWsdlClass::last()
	 * @return CdyneWeatherTypeWeatherDescription
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see CdyneWeatherWsdlClass::offsetGet()
	 * @param int
	 * @return CdyneWeatherTypeWeatherDescription
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'WeatherDescription'
	 */
	public function getAttributeName()
	{
		return 'WeatherDescription';
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