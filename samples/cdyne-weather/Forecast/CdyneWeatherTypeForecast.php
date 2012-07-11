<?php
/**
 * Class file for CdyneWeatherTypeForecast
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherTypeForecast
 * @date 02/07/2012
 */
class CdyneWeatherTypeForecast extends CdyneWeatherWsdlClass
{
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $Date;
	/**
	 * The WeatherID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var short
	 */
	public $WeatherID;
	/**
	 * The Desciption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Desciption;
	/**
	 * The Temperatures
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var CdyneWeatherTypeTemp
	 */
	public $Temperatures;
	/**
	 * The ProbabilityOfPrecipiation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var CdyneWeatherTypePOP
	 */
	public $ProbabilityOfPrecipiation;
	/**
	 * Constructor
	 * @param dateTime Date
	 * @param short WeatherID
	 * @param string Desciption
	 * @param CdyneWeatherTypeTemp Temperatures
	 * @param CdyneWeatherTypePOP ProbabilityOfPrecipiation
	 * @return CdyneWeatherTypeForecast
	 */
	public function __construct($_Date,$_WeatherID,$_Desciption = null,$_Temperatures,$_ProbabilityOfPrecipiation)
	{
		parent::__construct(array('Date'=>$_Date,'WeatherID'=>$_WeatherID,'Desciption'=>$_Desciption,'Temperatures'=>$_Temperatures,'ProbabilityOfPrecipiation'=>$_ProbabilityOfPrecipiation));
	}
	/**
	 * Set Date
	 * @param dateTime Date
	 * @return dateTime
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return dateTime
	 */
	public function getDate()
	{
		return $this->Date;
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
	 * Set Desciption
	 * @param string Desciption
	 * @return string
	 */
	public function setDesciption($_Desciption)
	{
		return ($this->Desciption = $_Desciption);
	}
	/**
	 * Get Desciption
	 * @return string
	 */
	public function getDesciption()
	{
		return $this->Desciption;
	}
	/**
	 * Set Temperatures
	 * @param temp Temperatures
	 * @return temp
	 */
	public function setTemperatures($_Temperatures)
	{
		return ($this->Temperatures = $_Temperatures);
	}
	/**
	 * Get Temperatures
	 * @return CdyneWeatherTypetemp
	 */
	public function getTemperatures()
	{
		return $this->Temperatures;
	}
	/**
	 * Set ProbabilityOfPrecipiation
	 * @param POP ProbabilityOfPrecipiation
	 * @return POP
	 */
	public function setProbabilityOfPrecipiation($_ProbabilityOfPrecipiation)
	{
		return ($this->ProbabilityOfPrecipiation = $_ProbabilityOfPrecipiation);
	}
	/**
	 * Get ProbabilityOfPrecipiation
	 * @return CdyneWeatherTypePOP
	 */
	public function getProbabilityOfPrecipiation()
	{
		return $this->ProbabilityOfPrecipiation;
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