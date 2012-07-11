<?php
/**
 * Class file for SOFastWeatherTypeWeatherByStation
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeWeatherByStation
 * @date 08/07/2012
 */
class SOFastWeatherTypeWeatherByStation extends SOFastWeatherWsdlClass
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
	 * The StationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StationID;
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
	 * The DewpointF
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DewpointF;
	/**
	 * The Humidity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Humidity;
	/**
	 * The WindSpeed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WindSpeed;
	/**
	 * The WindDirection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WindDirection;
	/**
	 * The WindGust
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WindGust;
	/**
	 * The BatteryVoltage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BatteryVoltage;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeErr Error
	 * @param string StationID
	 * @param string LastUpdated
	 * @param string TemperatureF
	 * @param string DewpointF
	 * @param string Humidity
	 * @param string WindSpeed
	 * @param string WindDirection
	 * @param string WindGust
	 * @param string BatteryVoltage
	 * @return SOFastWeatherTypeWeatherByStation
	 */
	public function __construct($_Error = null,$_StationID = null,$_LastUpdated = null,$_TemperatureF = null,$_DewpointF = null,$_Humidity = null,$_WindSpeed = null,$_WindDirection = null,$_WindGust = null,$_BatteryVoltage = null)
	{
		parent::__construct(array('Error'=>$_Error,'StationID'=>$_StationID,'LastUpdated'=>$_LastUpdated,'TemperatureF'=>$_TemperatureF,'DewpointF'=>$_DewpointF,'Humidity'=>$_Humidity,'WindSpeed'=>$_WindSpeed,'WindDirection'=>$_WindDirection,'WindGust'=>$_WindGust,'BatteryVoltage'=>$_BatteryVoltage));
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
	 * Set StationID
	 * @param string StationID
	 * @return string
	 */
	public function setStationID($_StationID)
	{
		return ($this->StationID = $_StationID);
	}
	/**
	 * Get StationID
	 * @return string
	 */
	public function getStationID()
	{
		return $this->StationID;
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
	 * Set DewpointF
	 * @param string DewpointF
	 * @return string
	 */
	public function setDewpointF($_DewpointF)
	{
		return ($this->DewpointF = $_DewpointF);
	}
	/**
	 * Get DewpointF
	 * @return string
	 */
	public function getDewpointF()
	{
		return $this->DewpointF;
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
	 * Set WindSpeed
	 * @param string WindSpeed
	 * @return string
	 */
	public function setWindSpeed($_WindSpeed)
	{
		return ($this->WindSpeed = $_WindSpeed);
	}
	/**
	 * Get WindSpeed
	 * @return string
	 */
	public function getWindSpeed()
	{
		return $this->WindSpeed;
	}
	/**
	 * Set WindDirection
	 * @param string WindDirection
	 * @return string
	 */
	public function setWindDirection($_WindDirection)
	{
		return ($this->WindDirection = $_WindDirection);
	}
	/**
	 * Get WindDirection
	 * @return string
	 */
	public function getWindDirection()
	{
		return $this->WindDirection;
	}
	/**
	 * Set WindGust
	 * @param string WindGust
	 * @return string
	 */
	public function setWindGust($_WindGust)
	{
		return ($this->WindGust = $_WindGust);
	}
	/**
	 * Get WindGust
	 * @return string
	 */
	public function getWindGust()
	{
		return $this->WindGust;
	}
	/**
	 * Set BatteryVoltage
	 * @param string BatteryVoltage
	 * @return string
	 */
	public function setBatteryVoltage($_BatteryVoltage)
	{
		return ($this->BatteryVoltage = $_BatteryVoltage);
	}
	/**
	 * Get BatteryVoltage
	 * @return string
	 */
	public function getBatteryVoltage()
	{
		return $this->BatteryVoltage;
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