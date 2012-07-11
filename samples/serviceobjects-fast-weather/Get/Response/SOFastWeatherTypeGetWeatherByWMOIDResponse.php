<?php
/**
 * Class file for SOFastWeatherTypeGetWeatherByWMOIDResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWeatherByWMOIDResponse
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWeatherByWMOIDResponse extends SOFastWeatherWsdlClass
{
	/**
	 * The GetWeatherByWMOIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeWeather
	 */
	public $GetWeatherByWMOIDResult;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeWeather GetWeatherByWMOIDResult
	 * @return SOFastWeatherTypeGetWeatherByWMOIDResponse
	 */
	public function __construct($_GetWeatherByWMOIDResult = null)
	{
		parent::__construct(array('GetWeatherByWMOIDResult'=>$_GetWeatherByWMOIDResult));
	}
	/**
	 * Set GetWeatherByWMOIDResult
	 * @param Weather GetWeatherByWMOIDResult
	 * @return Weather
	 */
	public function setGetWeatherByWMOIDResult($_GetWeatherByWMOIDResult)
	{
		return ($this->GetWeatherByWMOIDResult = $_GetWeatherByWMOIDResult);
	}
	/**
	 * Get GetWeatherByWMOIDResult
	 * @return SOFastWeatherTypeWeather
	 */
	public function getGetWeatherByWMOIDResult()
	{
		return $this->GetWeatherByWMOIDResult;
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