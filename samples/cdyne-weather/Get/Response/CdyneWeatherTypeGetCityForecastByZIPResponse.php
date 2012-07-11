<?php
/**
 * Class file for CdyneWeatherTypeGetCityForecastByZIPResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypeGetCityForecastByZIPResponse
 * @date 02/07/2012
 */
class CdyneWeatherTypeGetCityForecastByZIPResponse extends CdyneWeatherWsdlClass
{
	/**
	 * The GetCityForecastByZIPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneWeatherTypeForecastReturn
	 */
	public $GetCityForecastByZIPResult;
	/**
	 * Constructor
	 * @param CdyneWeatherTypeForecastReturn GetCityForecastByZIPResult
	 * @return CdyneWeatherTypeGetCityForecastByZIPResponse
	 */
	public function __construct($_GetCityForecastByZIPResult = null)
	{
		parent::__construct(array('GetCityForecastByZIPResult'=>$_GetCityForecastByZIPResult));
	}
	/**
	 * Set GetCityForecastByZIPResult
	 * @param ForecastReturn GetCityForecastByZIPResult
	 * @return ForecastReturn
	 */
	public function setGetCityForecastByZIPResult($_GetCityForecastByZIPResult)
	{
		return ($this->GetCityForecastByZIPResult = $_GetCityForecastByZIPResult);
	}
	/**
	 * Get GetCityForecastByZIPResult
	 * @return CdyneWeatherTypeForecastReturn
	 */
	public function getGetCityForecastByZIPResult()
	{
		return $this->GetCityForecastByZIPResult;
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