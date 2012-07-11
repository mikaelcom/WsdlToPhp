<?php
/**
 * Class file for SOFastWeatherTypeGetFiveDayForecastByZipResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetFiveDayForecastByZipResponse
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetFiveDayForecastByZipResponse extends SOFastWeatherWsdlClass
{
	/**
	 * The GetFiveDayForecastByZipResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeArrayOfForecast
	 */
	public $GetFiveDayForecastByZipResult;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeArrayOfForecast GetFiveDayForecastByZipResult
	 * @return SOFastWeatherTypeGetFiveDayForecastByZipResponse
	 */
	public function __construct($_GetFiveDayForecastByZipResult = null)
	{
		parent::__construct(array('GetFiveDayForecastByZipResult'=>new SOFastWeatherTypeArrayOfForecast($_GetFiveDayForecastByZipResult)));
	}
	/**
	 * Set GetFiveDayForecastByZipResult
	 * @param ArrayOfForecast GetFiveDayForecastByZipResult
	 * @return ArrayOfForecast
	 */
	public function setGetFiveDayForecastByZipResult($_GetFiveDayForecastByZipResult)
	{
		return ($this->GetFiveDayForecastByZipResult = $_GetFiveDayForecastByZipResult);
	}
	/**
	 * Get GetFiveDayForecastByZipResult
	 * @return SOFastWeatherTypeArrayOfForecast
	 */
	public function getGetFiveDayForecastByZipResult()
	{
		return $this->GetFiveDayForecastByZipResult;
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