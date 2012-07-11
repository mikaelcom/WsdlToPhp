<?php
/**
 * Class file for SOFastWeatherTypeArrayOfForecast
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeArrayOfForecast
 * @date 08/07/2012
 */
class SOFastWeatherTypeArrayOfForecast extends SOFastWeatherWsdlClass
{
	/**
	 * The Forecast
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOFastWeatherTypeForecast
	 */
	public $Forecast;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeForecast Forecast
	 * @return SOFastWeatherTypeArrayOfForecast
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
	 * @return SOFastWeatherTypeForecast
	 */
	public function getForecast()
	{
		return $this->Forecast;
	}
	/**
	 * Returns the current element
	 * @see SOFastWeatherWsdlClass::current()
	 * @return SOFastWeatherTypeForecast
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOFastWeatherWsdlClass::item()
	 * @param int
	 * @return SOFastWeatherTypeForecast
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOFastWeatherWsdlClass::first()
	 * @return SOFastWeatherTypeForecast
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOFastWeatherWsdlClass::last()
	 * @return SOFastWeatherTypeForecast
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOFastWeatherWsdlClass::offsetGet()
	 * @param int
	 * @return SOFastWeatherTypeForecast
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