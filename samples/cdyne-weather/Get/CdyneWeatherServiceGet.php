<?php
/**
 * Class file for CdyneWeatherServiceGet
 * @date 02/07/2012
 */
/**
 * Class CdyneWeatherServiceGet
 * @date 02/07/2012
 */
class CdyneWeatherServiceGet extends CdyneWeatherWsdlClass
{
	/**
	 * Method to call GetWeatherInformation
	 * Meta informations :
	 * 	- documentation : Gets Information for each WeatherID
	 * @uses CdyneWeatherWsdlClass::getSoapClient()
	 * @uses CdyneWeatherWsdlClass::setResult()
	 * @uses CdyneWeatherWsdlClass::getResult()
	 * @uses CdyneWeatherWsdlClass::saveLastError()
	 * @param CdyneWeatherTypeGetWeatherInformation GetWeatherInformation
	 * @return CdyneWeatherTypeGetWeatherInformationResponse
	 */
	public function GetWeatherInformation(CdyneWeatherTypeGetWeatherInformation $_CdyneWeatherTypeGetWeatherInformation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWeatherInformation(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCityForecastByZIP
	 * Meta informations :
	 * 	- documentation : Allows you to get your City Forecast Over the Next 7 Days, which is updated hourly. U.S. Only
	 * @uses CdyneWeatherWsdlClass::getSoapClient()
	 * @uses CdyneWeatherWsdlClass::setResult()
	 * @uses CdyneWeatherWsdlClass::getResult()
	 * @uses CdyneWeatherWsdlClass::saveLastError()
	 * @uses CdyneWeatherTypeGetCityForecastByZIP::getZIP()
	 * @param CdyneWeatherTypeGetCityForecastByZIP GetCityForecastByZIP
	 * @return CdyneWeatherTypeGetCityForecastByZIPResponse
	 */
	public function GetCityForecastByZIP(CdyneWeatherTypeGetCityForecastByZIP $_CdyneWeatherTypeGetCityForecastByZIP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCityForecastByZIP(array('ZIP'=>$_CdyneWeatherTypeGetCityForecastByZIP->getZIP())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCityWeatherByZIP
	 * Meta informations :
	 * 	- documentation : Allows you to get your City's Weather, which is updated hourly. U.S. Only
	 * @uses CdyneWeatherWsdlClass::getSoapClient()
	 * @uses CdyneWeatherWsdlClass::setResult()
	 * @uses CdyneWeatherWsdlClass::getResult()
	 * @uses CdyneWeatherWsdlClass::saveLastError()
	 * @uses CdyneWeatherTypeGetCityWeatherByZIP::getZIP()
	 * @param CdyneWeatherTypeGetCityWeatherByZIP GetCityWeatherByZIP
	 * @return CdyneWeatherTypeGetCityWeatherByZIPResponse
	 */
	public function GetCityWeatherByZIP(CdyneWeatherTypeGetCityWeatherByZIP $_CdyneWeatherTypeGetCityWeatherByZIP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCityWeatherByZIP(array('ZIP'=>$_CdyneWeatherTypeGetCityWeatherByZIP->getZIP())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return CdyneWeatherTypeGetCityWeatherByZIPResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>