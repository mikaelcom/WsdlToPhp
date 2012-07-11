<?php
/**
 * Class file for CdyneWeatherTypeGetCityWeatherByZIPResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypeGetCityWeatherByZIPResponse
 * @date 02/07/2012
 */
class CdyneWeatherTypeGetCityWeatherByZIPResponse extends CdyneWeatherWsdlClass
{
	/**
	 * The GetCityWeatherByZIPResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var CdyneWeatherTypeWeatherReturn
	 */
	public $GetCityWeatherByZIPResult;
	/**
	 * Constructor
	 * @param CdyneWeatherTypeWeatherReturn GetCityWeatherByZIPResult
	 * @return CdyneWeatherTypeGetCityWeatherByZIPResponse
	 */
	public function __construct($_GetCityWeatherByZIPResult)
	{
		parent::__construct(array('GetCityWeatherByZIPResult'=>$_GetCityWeatherByZIPResult));
	}
	/**
	 * Set GetCityWeatherByZIPResult
	 * @param WeatherReturn GetCityWeatherByZIPResult
	 * @return WeatherReturn
	 */
	public function setGetCityWeatherByZIPResult($_GetCityWeatherByZIPResult)
	{
		return ($this->GetCityWeatherByZIPResult = $_GetCityWeatherByZIPResult);
	}
	/**
	 * Get GetCityWeatherByZIPResult
	 * @return CdyneWeatherTypeWeatherReturn
	 */
	public function getGetCityWeatherByZIPResult()
	{
		return $this->GetCityWeatherByZIPResult;
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