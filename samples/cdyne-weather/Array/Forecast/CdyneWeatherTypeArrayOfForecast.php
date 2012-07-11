<?php
/**
 * Class file for CdyneWeatherTypeArrayOfForecast
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypeArrayOfForecast
 * @date 02/07/2012
 */
class CdyneWeatherTypeArrayOfForecast extends CdyneWeatherWsdlClass
{
	/**
	 * The Forecast
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var CdyneWeatherTypeForecast
	 */
	public $Forecast;
	/**
	 * Constructor
	 * @param CdyneWeatherTypeForecast Forecast
	 * @return CdyneWeatherTypeArrayOfForecast
	 */
	public function __construct($_Forecast = null)
	{
		parent::__construct(array('Forecast'=>$_Forecast));
	}
	/**
	 * Set Forecast
	 * @param Forecast Forecast
	 * @return Forecast
	 */
	public function setForecast($_Forecast)
	{
		return ($this->Forecast = $_Forecast);
	}
	/**
	 * Get Forecast
	 * @return CdyneWeatherTypeForecast
	 */
	public function getForecast()
	{
		return $this->Forecast;
	}
	/**
	 * Returns the current element
	 * @see CdyneWeatherWsdlClass::current()
	 * @return CdyneWeatherTypeForecast
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see CdyneWeatherWsdlClass::item()
	 * @param int
	 * @return CdyneWeatherTypeForecast
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see CdyneWeatherWsdlClass::first()
	 * @return CdyneWeatherTypeForecast
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see CdyneWeatherWsdlClass::last()
	 * @return CdyneWeatherTypeForecast
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see CdyneWeatherWsdlClass::offsetGet()
	 * @param int
	 * @return CdyneWeatherTypeForecast
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Forecast'
	 */
	public function getAttributeName()
	{
		return 'Forecast';
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