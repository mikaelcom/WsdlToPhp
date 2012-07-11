<?php
/**
 * Class file for SOFastWeatherTypeGetWeatherByIPResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWeatherByIPResponse
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWeatherByIPResponse extends SOFastWeatherWsdlClass
{
	/**
	 * The GetWeatherByIPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeWeather
	 */
	public $GetWeatherByIPResult;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeWeather GetWeatherByIPResult
	 * @return SOFastWeatherTypeGetWeatherByIPResponse
	 */
	public function __construct($_GetWeatherByIPResult = null)
	{
		parent::__construct(array('GetWeatherByIPResult'=>$_GetWeatherByIPResult));
	}
	/**
	 * Set GetWeatherByIPResult
	 * @param Weather GetWeatherByIPResult
	 * @return Weather
	 */
	public function setGetWeatherByIPResult($_GetWeatherByIPResult)
	{
		return ($this->GetWeatherByIPResult = $_GetWeatherByIPResult);
	}
	/**
	 * Get GetWeatherByIPResult
	 * @return SOFastWeatherTypeWeather
	 */
	public function getGetWeatherByIPResult()
	{
		return $this->GetWeatherByIPResult;
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