<?php
/**
 * Class file for SOFastWeatherTypeGetWeatherByStationIDResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWeatherByStationIDResponse
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWeatherByStationIDResponse extends SOFastWeatherWsdlClass
{
	/**
	 * The GetWeatherByStationIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeWeatherByStation
	 */
	public $GetWeatherByStationIDResult;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeWeatherByStation GetWeatherByStationIDResult
	 * @return SOFastWeatherTypeGetWeatherByStationIDResponse
	 */
	public function __construct($_GetWeatherByStationIDResult = null)
	{
		parent::__construct(array('GetWeatherByStationIDResult'=>$_GetWeatherByStationIDResult));
	}
	/**
	 * Set GetWeatherByStationIDResult
	 * @param WeatherByStation GetWeatherByStationIDResult
	 * @return WeatherByStation
	 */
	public function setGetWeatherByStationIDResult($_GetWeatherByStationIDResult)
	{
		return ($this->GetWeatherByStationIDResult = $_GetWeatherByStationIDResult);
	}
	/**
	 * Get GetWeatherByStationIDResult
	 * @return SOFastWeatherTypeWeatherByStation
	 */
	public function getGetWeatherByStationIDResult()
	{
		return $this->GetWeatherByStationIDResult;
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