<?php
/**
 * Class file for RFWeatherForecastTypeGetForecastByCityResponse
 * @date 15/08/2012
 */
/**
 * Class RFWeatherForecastTypeGetForecastByCityResponse
 * @date 15/08/2012
 */
class RFWeatherForecastTypeGetForecastByCityResponse extends RFWeatherForecastWsdlClass
{
	/**
	 * The GetForecastByCityResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFWeatherForecastTypeWeather
	 */
	public $GetForecastByCityResult;
	/**
	 * Constructor
	 * @param RFWeatherForecastTypeWeather GetForecastByCityResult
	 * @return RFWeatherForecastTypeGetForecastByCityResponse
	 */
	public function __construct($_GetForecastByCityResult = null)
	{
		parent::__construct(array('GetForecastByCityResult'=>$_GetForecastByCityResult));
	}
	/**
	 * Set GetForecastByCityResult
	 * @param Weather GetForecastByCityResult
	 * @return Weather
	 */
	public function setGetForecastByCityResult($_GetForecastByCityResult)
	{
		return ($this->GetForecastByCityResult = $_GetForecastByCityResult);
	}
	/**
	 * Get GetForecastByCityResult
	 * @return RFWeatherForecastTypeWeather
	 */
	public function getGetForecastByCityResult()
	{
		return $this->GetForecastByCityResult;
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