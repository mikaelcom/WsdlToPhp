<?php
/**
 * Class file for SOFastWeatherTypeWeather
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeWeather
 * @date 08/07/2012
 */
class SOFastWeatherTypeWeather extends SOFastWeatherWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeErr
	 */
	public $Error;
	/**
	 * The LastUpdated
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastUpdated;
	/**
	 * The TemperatureF
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TemperatureF;
	/**
	 * The Windchill
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Windchill;
	/**
	 * The HeatIndex
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HeatIndex;
	/**
	 * The Humidity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Humidity;
	/**
	 * The Dewpoint
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Dewpoint;
	/**
	 * The Wind
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Wind;
	/**
	 * The Pressure
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Pressure;
	/**
	 * The Conditions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Conditions;
	/**
	 * The Visibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Visibility;
	/**
	 * The Sunrise
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sunrise;
	/**
	 * The Sunset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sunset;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * The Moonrise
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Moonrise;
	/**
	 * The Moonset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Moonset;
	/**
	 * The Precipitation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Precipitation;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeErr Error
	 * @param string LastUpdated
	 * @param string TemperatureF
	 * @param string Windchill
	 * @param string HeatIndex
	 * @param string Humidity
	 * @param string Dewpoint
	 * @param string Wind
	 * @param string Pressure
	 * @param string Conditions
	 * @param string Visibility
	 * @param string Sunrise
	 * @param string Sunset
	 * @param string City
	 * @param string State
	 * @param string Moonrise
	 * @param string Moonset
	 * @param string Precipitation
	 * @param string Country
	 * @return SOFastWeatherTypeWeather
	 */
	public function __construct($_Error = null,$_LastUpdated = null,$_TemperatureF = null,$_Windchill = null,$_HeatIndex = null,$_Humidity = null,$_Dewpoint = null,$_Wind = null,$_Pressure = null,$_Conditions = null,$_Visibility = null,$_Sunrise = null,$_Sunset = null,$_City = null,$_State = null,$_Moonrise = null,$_Moonset = null,$_Precipitation = null,$_Country = null)
	{
		parent::__construct(array('Error'=>$_Error,'LastUpdated'=>$_LastUpdated,'TemperatureF'=>$_TemperatureF,'Windchill'=>$_Windchill,'HeatIndex'=>$_HeatIndex,'Humidity'=>$_Humidity,'Dewpoint'=>$_Dewpoint,'Wind'=>$_Wind,'Pressure'=>$_Pressure,'Conditions'=>$_Conditions,'Visibility'=>$_Visibility,'Sunrise'=>$_Sunrise,'Sunset'=>$_Sunset,'City'=>$_City,'State'=>$_State,'Moonrise'=>$_Moonrise,'Moonset'=>$_Moonset,'Precipitation'=>$_Precipitation,'Country'=>$_Country));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOFastWeatherTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set LastUpdated
	 * @param string LastUpdated
	 * @return string
	 */
	public function setLastUpdated($_LastUpdated)
	{
		return ($this->LastUpdated = $_LastUpdated);
	}
	/**
	 * Get LastUpdated
	 * @return string
	 */
	public function getLastUpdated()
	{
		return $this->LastUpdated;
	}
	/**
	 * Set TemperatureF
	 * @param string TemperatureF
	 * @return string
	 */
	public function setTemperatureF($_TemperatureF)
	{
		return ($this->TemperatureF = $_TemperatureF);
	}
	/**
	 * Get TemperatureF
	 * @return string
	 */
	public function getTemperatureF()
	{
		return $this->TemperatureF;
	}
	/**
	 * Set Windchill
	 * @param string Windchill
	 * @return string
	 */
	public function setWindchill($_Windchill)
	{
		return ($this->Windchill = $_Windchill);
	}
	/**
	 * Get Windchill
	 * @return string
	 */
	public function getWindchill()
	{
		return $this->Windchill;
	}
	/**
	 * Set HeatIndex
	 * @param string HeatIndex
	 * @return string
	 */
	public function setHeatIndex($_HeatIndex)
	{
		return ($this->HeatIndex = $_HeatIndex);
	}
	/**
	 * Get HeatIndex
	 * @return string
	 */
	public function getHeatIndex()
	{
		return $this->HeatIndex;
	}
	/**
	 * Set Humidity
	 * @param string Humidity
	 * @return string
	 */
	public function setHumidity($_Humidity)
	{
		return ($this->Humidity = $_Humidity);
	}
	/**
	 * Get Humidity
	 * @return string
	 */
	public function getHumidity()
	{
		return $this->Humidity;
	}
	/**
	 * Set Dewpoint
	 * @param string Dewpoint
	 * @return string
	 */
	public function setDewpoint($_Dewpoint)
	{
		return ($this->Dewpoint = $_Dewpoint);
	}
	/**
	 * Get Dewpoint
	 * @return string
	 */
	public function getDewpoint()
	{
		return $this->Dewpoint;
	}
	/**
	 * Set Wind
	 * @param string Wind
	 * @return string
	 */
	public function setWind($_Wind)
	{
		return ($this->Wind = $_Wind);
	}
	/**
	 * Get Wind
	 * @return string
	 */
	public function getWind()
	{
		return $this->Wind;
	}
	/**
	 * Set Pressure
	 * @param string Pressure
	 * @return string
	 */
	public function setPressure($_Pressure)
	{
		return ($this->Pressure = $_Pressure);
	}
	/**
	 * Get Pressure
	 * @return string
	 */
	public function getPressure()
	{
		return $this->Pressure;
	}
	/**
	 * Set Conditions
	 * @param string Conditions
	 * @return string
	 */
	public function setConditions($_Conditions)
	{
		return ($this->Conditions = $_Conditions);
	}
	/**
	 * Get Conditions
	 * @return string
	 */
	public function getConditions()
	{
		return $this->Conditions;
	}
	/**
	 * Set Visibility
	 * @param string Visibility
	 * @return string
	 */
	public function setVisibility($_Visibility)
	{
		return ($this->Visibility = $_Visibility);
	}
	/**
	 * Get Visibility
	 * @return string
	 */
	public function getVisibility()
	{
		return $this->Visibility;
	}
	/**
	 * Set Sunrise
	 * @param string Sunrise
	 * @return string
	 */
	public function setSunrise($_Sunrise)
	{
		return ($this->Sunrise = $_Sunrise);
	}
	/**
	 * Get Sunrise
	 * @return string
	 */
	public function getSunrise()
	{
		return $this->Sunrise;
	}
	/**
	 * Set Sunset
	 * @param string Sunset
	 * @return string
	 */
	public function setSunset($_Sunset)
	{
		return ($this->Sunset = $_Sunset);
	}
	/**
	 * Get Sunset
	 * @return string
	 */
	public function getSunset()
	{
		return $this->Sunset;
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
	 * Set Moonrise
	 * @param string Moonrise
	 * @return string
	 */
	public function setMoonrise($_Moonrise)
	{
		return ($this->Moonrise = $_Moonrise);
	}
	/**
	 * Get Moonrise
	 * @return string
	 */
	public function getMoonrise()
	{
		return $this->Moonrise;
	}
	/**
	 * Set Moonset
	 * @param string Moonset
	 * @return string
	 */
	public function setMoonset($_Moonset)
	{
		return ($this->Moonset = $_Moonset);
	}
	/**
	 * Get Moonset
	 * @return string
	 */
	public function getMoonset()
	{
		return $this->Moonset;
	}
	/**
	 * Set Precipitation
	 * @param string Precipitation
	 * @return string
	 */
	public function setPrecipitation($_Precipitation)
	{
		return ($this->Precipitation = $_Precipitation);
	}
	/**
	 * Get Precipitation
	 * @return string
	 */
	public function getPrecipitation()
	{
		return $this->Precipitation;
	}
	/**
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
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