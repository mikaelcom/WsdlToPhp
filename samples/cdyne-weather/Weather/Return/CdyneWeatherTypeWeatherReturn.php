<?php
/**
 * Class file for CdyneWeatherTypeWeatherReturn
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypeWeatherReturn
 * @date 02/07/2012
 */
class CdyneWeatherTypeWeatherReturn extends CdyneWeatherWsdlClass
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
	 * The WeatherID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var short
	 */
	public $WeatherID;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The Temperature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Temperature;
	/**
	 * The RelativeHumidity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RelativeHumidity;
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
	 * The Visibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Visibility;
	/**
	 * The WindChill
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WindChill;
	/**
	 * The Remarks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Remarks;
	/**
	 * Constructor
	 * @param boolean Success
	 * @param string ResponseText
	 * @param string State
	 * @param string City
	 * @param string WeatherStationCity
	 * @param short WeatherID
	 * @param string Description
	 * @param string Temperature
	 * @param string RelativeHumidity
	 * @param string Wind
	 * @param string Pressure
	 * @param string Visibility
	 * @param string WindChill
	 * @param string Remarks
	 * @return CdyneWeatherTypeWeatherReturn
	 */
	public function __construct($_Success,$_ResponseText = null,$_State = null,$_City = null,$_WeatherStationCity = null,$_WeatherID,$_Description = null,$_Temperature = null,$_RelativeHumidity = null,$_Wind = null,$_Pressure = null,$_Visibility = null,$_WindChill = null,$_Remarks = null)
	{
		parent::__construct(array('Success'=>$_Success,'ResponseText'=>$_ResponseText,'State'=>$_State,'City'=>$_City,'WeatherStationCity'=>$_WeatherStationCity,'WeatherID'=>$_WeatherID,'Description'=>$_Description,'Temperature'=>$_Temperature,'RelativeHumidity'=>$_RelativeHumidity,'Wind'=>$_Wind,'Pressure'=>$_Pressure,'Visibility'=>$_Visibility,'WindChill'=>$_WindChill,'Remarks'=>$_Remarks));
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
	 * Set WeatherID
	 * @param short WeatherID
	 * @return short
	 */
	public function setWeatherID($_WeatherID)
	{
		return ($this->WeatherID = $_WeatherID);
	}
	/**
	 * Get WeatherID
	 * @return short
	 */
	public function getWeatherID()
	{
		return $this->WeatherID;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Temperature
	 * @param string Temperature
	 * @return string
	 */
	public function setTemperature($_Temperature)
	{
		return ($this->Temperature = $_Temperature);
	}
	/**
	 * Get Temperature
	 * @return string
	 */
	public function getTemperature()
	{
		return $this->Temperature;
	}
	/**
	 * Set RelativeHumidity
	 * @param string RelativeHumidity
	 * @return string
	 */
	public function setRelativeHumidity($_RelativeHumidity)
	{
		return ($this->RelativeHumidity = $_RelativeHumidity);
	}
	/**
	 * Get RelativeHumidity
	 * @return string
	 */
	public function getRelativeHumidity()
	{
		return $this->RelativeHumidity;
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
	 * Set WindChill
	 * @param string WindChill
	 * @return string
	 */
	public function setWindChill($_WindChill)
	{
		return ($this->WindChill = $_WindChill);
	}
	/**
	 * Get WindChill
	 * @return string
	 */
	public function getWindChill()
	{
		return $this->WindChill;
	}
	/**
	 * Set Remarks
	 * @param string Remarks
	 * @return string
	 */
	public function setRemarks($_Remarks)
	{
		return ($this->Remarks = $_Remarks);
	}
	/**
	 * Get Remarks
	 * @return string
	 */
	public function getRemarks()
	{
		return $this->Remarks;
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