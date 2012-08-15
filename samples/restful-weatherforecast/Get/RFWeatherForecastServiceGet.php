<?php
/**
 * Class file for RFWeatherForecastServiceGet
 * @date 15/08/2012
 */
/**
 * Class RFWeatherForecastServiceGet
 * @date 15/08/2012
 */
class RFWeatherForecastServiceGet extends RFWeatherForecastWsdlClass
{
	/**
	 * Method to call GetCitiesByCountry
	 * @uses RFWeatherForecastWsdlClass::getSoapClient()
	 * @uses RFWeatherForecastWsdlClass::setResult()
	 * @uses RFWeatherForecastWsdlClass::getResult()
	 * @uses RFWeatherForecastWsdlClass::saveLastError()
	 * @uses RFWeatherForecastTypeGetCitiesByCountry::getCountry()
	 * @param RFWeatherForecastTypeGetCitiesByCountry GetCitiesByCountry
	 * @return RFWeatherForecastTypeGetCitiesByCountryResponse
	 */
	public function GetCitiesByCountry(RFWeatherForecastTypeGetCitiesByCountry $_RFWeatherForecastTypeGetCitiesByCountry)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCitiesByCountry(array('Country'=>$_RFWeatherForecastTypeGetCitiesByCountry->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetForecastByCity
	 * @uses RFWeatherForecastWsdlClass::getSoapClient()
	 * @uses RFWeatherForecastWsdlClass::setResult()
	 * @uses RFWeatherForecastWsdlClass::getResult()
	 * @uses RFWeatherForecastWsdlClass::saveLastError()
	 * @uses RFWeatherForecastTypeGetForecastByCity::getCity()
	 * @uses RFWeatherForecastTypeGetForecastByCity::getCountry()
	 * @param RFWeatherForecastTypeGetForecastByCity GetForecastByCity
	 * @return RFWeatherForecastTypeGetForecastByCityResponse
	 */
	public function GetForecastByCity(RFWeatherForecastTypeGetForecastByCity $_RFWeatherForecastTypeGetForecastByCity)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetForecastByCity(array('City'=>$_RFWeatherForecastTypeGetForecastByCity->getCity(),'Country'=>$_RFWeatherForecastTypeGetForecastByCity->getCountry())));
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
	 * @return RFWeatherForecastTypeGetCitiesByCountryResponse|RFWeatherForecastTypeGetForecastByCityResponse
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