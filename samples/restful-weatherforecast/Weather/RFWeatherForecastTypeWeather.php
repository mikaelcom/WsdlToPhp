<?php
/**
 * Class file for RFWeatherForecastTypeWeather
 * @date 15/08/2012
 */
/**
 * Class RFWeatherForecastTypeWeather
 * @date 15/08/2012
 */
class RFWeatherForecastTypeWeather extends RFWeatherForecastWsdlClass
{
	/**
	 * The Location
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Location;
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Time;
	/**
	 * The Wind
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Wind;
	/**
	 * The Visibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Visibility;
	/**
	 * The SkyConditions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $SkyConditions;
	/**
	 * The Temperature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Temperature;
	/**
	 * The DewPoint
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $DewPoint;
	/**
	 * The RelativeHumidity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $RelativeHumidity;
	/**
	 * The Pressure
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Pressure;
	/**
	 * Constructor
	 * @param string Location
	 * @param string Time
	 * @param string Wind
	 * @param string Visibility
	 * @param string SkyConditions
	 * @param string Temperature
	 * @param string DewPoint
	 * @param string RelativeHumidity
	 * @param string Pressure
	 * @return RFWeatherForecastTypeWeather
	 */
	public function __construct($_Location = null,$_Time = null,$_Wind = null,$_Visibility = null,$_SkyConditions = null,$_Temperature = null,$_DewPoint = null,$_RelativeHumidity = null,$_Pressure = null)
	{
		parent::__construct(array('Location'=>$_Location,'Time'=>$_Time,'Wind'=>$_Wind,'Visibility'=>$_Visibility,'SkyConditions'=>$_SkyConditions,'Temperature'=>$_Temperature,'DewPoint'=>$_DewPoint,'RelativeHumidity'=>$_RelativeHumidity,'Pressure'=>$_Pressure));
	}
	/**
	 * Set Location
	 * @param string Location
	 * @return string
	 */
	public function setLocation($_Location)
	{
		return ($this->Location = $_Location);
	}
	/**
	 * Get Location
	 * @return string
	 */
	public function getLocation()
	{
		return $this->Location;
	}
	/**
	 * Set Time
	 * @param string Time
	 * @return string
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return string
	 */
	public function getTime()
	{
		return $this->Time;
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
	 * Set SkyConditions
	 * @param string SkyConditions
	 * @return string
	 */
	public function setSkyConditions($_SkyConditions)
	{
		return ($this->SkyConditions = $_SkyConditions);
	}
	/**
	 * Get SkyConditions
	 * @return string
	 */
	public function getSkyConditions()
	{
		return $this->SkyConditions;
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
	 * Set DewPoint
	 * @param string DewPoint
	 * @return string
	 */
	public function setDewPoint($_DewPoint)
	{
		return ($this->DewPoint = $_DewPoint);
	}
	/**
	 * Get DewPoint
	 * @return string
	 */
	public function getDewPoint()
	{
		return $this->DewPoint;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>