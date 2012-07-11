<?php
/**
 * Class file for CdyneWeatherTypeForecastReturn
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypeForecastReturn
 * @date 02/07/2012
 */
class CdyneWeatherTypeForecastReturn extends CdyneWeatherWsdlClass
{
	/**
	 * The Success
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Success;
	/**
	 * The ResponseText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ResponseText;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The WeatherStationCity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WeatherStationCity;
	/**
	 * The ForecastResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneWeatherTypeArrayOfForecast
	 */
	public $ForecastResult;
	/**
	 * Constructor
	 * @param boolean Success
	 * @param string ResponseText
	 * @param string State
	 * @param string City
	 * @param string WeatherStationCity
	 * @param CdyneWeatherTypeArrayOfForecast ForecastResult
	 * @return CdyneWeatherTypeForecastReturn
	 */
	public function __construct($_Success,$_ResponseText = null,$_State = null,$_City = null,$_WeatherStationCity = null,$_ForecastResult = null)
	{
		parent::__construct(array('Success'=>$_Success,'ResponseText'=>$_ResponseText,'State'=>$_State,'City'=>$_City,'WeatherStationCity'=>$_WeatherStationCity,'ForecastResult'=>new CdyneWeatherTypeArrayOfForecast($_ForecastResult)));
	}
	/**
	 * Set Success
	 * @param boolean Success
	 * @return boolean
	 */
	public function setSuccess($_Success)
	{
		return ($this->Success = $_Success);
	}
	/**
	 * Get Success
	 * @return boolean
	 */
	public function getSuccess()
	{
		return $this->Success;
	}
	/**
	 * Set ResponseText
	 * @param string ResponseText
	 * @return string
	 */
	public function setResponseText($_ResponseText)
	{
		return ($this->ResponseText = $_ResponseText);
	}
	/**
	 * Get ResponseText
	 * @return string
	 */
	public function getResponseText()
	{
		return $this->ResponseText;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set City
	 * @param string City
	 * @return string
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set WeatherStationCity
	 * @param string WeatherStationCity
	 * @return string
	 */
	public function setWeatherStationCity($_WeatherStationCity)
	{
		return ($this->WeatherStationCity = $_WeatherStationCity);
	}
	/**
	 * Get WeatherStationCity
	 * @return string
	 */
	public function getWeatherStationCity()
	{
		return $this->WeatherStationCity;
	}
	/**
	 * Set ForecastResult
	 * @param ArrayOfForecast ForecastResult
	 * @return ArrayOfForecast
	 */
	public function setForecastResult($_ForecastResult)
	{
		return ($this->ForecastResult = $_ForecastResult);
	}
	/**
	 * Get ForecastResult
	 * @return CdyneWeatherTypeArrayOfForecast
	 */
	public function getForecastResult()
	{
		return $this->ForecastResult;
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