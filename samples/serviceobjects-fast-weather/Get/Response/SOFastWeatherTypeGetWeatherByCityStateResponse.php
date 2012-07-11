<?php
/**
 * Class file for SOFastWeatherTypeGetWeatherByCityStateResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWeatherByCityStateResponse
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWeatherByCityStateResponse extends SOFastWeatherWsdlClass
{
	/**
	 * The GetWeatherByCityStateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeWeather
	 */
	public $GetWeatherByCityStateResult;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeWeather GetWeatherByCityStateResult
	 * @return SOFastWeatherTypeGetWeatherByCityStateResponse
	 */
	public function __construct($_GetWeatherByCityStateResult = null)
	{
		parent::__construct(array('GetWeatherByCityStateResult'=>$_GetWeatherByCityStateResult));
	}
	/**
	 * Set GetWeatherByCityStateResult
	 * @param Weather GetWeatherByCityStateResult
	 * @return Weather
	 */
	public function setGetWeatherByCityStateResult($_GetWeatherByCityStateResult)
	{
		return ($this->GetWeatherByCityStateResult = $_GetWeatherByCityStateResult);
	}
	/**
	 * Get GetWeatherByCityStateResult
	 * @return SOFastWeatherTypeWeather
	 */
	public function getGetWeatherByCityStateResult()
	{
		return $this->GetWeatherByCityStateResult;
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