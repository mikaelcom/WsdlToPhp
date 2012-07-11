<?php
/**
 * Class file for SOFastWeatherTypeGetWeatherHistoricalByZipResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWeatherHistoricalByZipResponse
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWeatherHistoricalByZipResponse extends SOFastWeatherWsdlClass
{
	/**
	 * The GetWeatherHistoricalByZipResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeWeather
	 */
	public $GetWeatherHistoricalByZipResult;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeWeather GetWeatherHistoricalByZipResult
	 * @return SOFastWeatherTypeGetWeatherHistoricalByZipResponse
	 */
	public function __construct($_GetWeatherHistoricalByZipResult = null)
	{
		parent::__construct(array('GetWeatherHistoricalByZipResult'=>$_GetWeatherHistoricalByZipResult));
	}
	/**
	 * Set GetWeatherHistoricalByZipResult
	 * @param Weather GetWeatherHistoricalByZipResult
	 * @return Weather
	 */
	public function setGetWeatherHistoricalByZipResult($_GetWeatherHistoricalByZipResult)
	{
		return ($this->GetWeatherHistoricalByZipResult = $_GetWeatherHistoricalByZipResult);
	}
	/**
	 * Get GetWeatherHistoricalByZipResult
	 * @return SOFastWeatherTypeWeather
	 */
	public function getGetWeatherHistoricalByZipResult()
	{
		return $this->GetWeatherHistoricalByZipResult;
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