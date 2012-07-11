<?php
/**
 * Class file for SOFastWeatherTypeGetWeatherByZipResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWeatherByZipResponse
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWeatherByZipResponse extends SOFastWeatherWsdlClass
{
	/**
	 * The GetWeatherByZipResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeWeather
	 */
	public $GetWeatherByZipResult;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeWeather GetWeatherByZipResult
	 * @return SOFastWeatherTypeGetWeatherByZipResponse
	 */
	public function __construct($_GetWeatherByZipResult = null)
	{
		parent::__construct(array('GetWeatherByZipResult'=>$_GetWeatherByZipResult));
	}
	/**
	 * Set GetWeatherByZipResult
	 * @param Weather GetWeatherByZipResult
	 * @return Weather
	 */
	public function setGetWeatherByZipResult($_GetWeatherByZipResult)
	{
		return ($this->GetWeatherByZipResult = $_GetWeatherByZipResult);
	}
	/**
	 * Get GetWeatherByZipResult
	 * @return SOFastWeatherTypeWeather
	 */
	public function getGetWeatherByZipResult()
	{
		return $this->GetWeatherByZipResult;
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