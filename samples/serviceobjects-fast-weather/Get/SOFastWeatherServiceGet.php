<?php
/**
 * Class file for SOFastWeatherServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherServiceGet
 * @date 08/07/2012
 */
class SOFastWeatherServiceGet extends SOFastWeatherWsdlClass
{
	/**
	 * Method to call GetWeatherByZip
	 * Meta informations :
	 * 	- documentation : Returns the weather for a given US postal code.
	 * @uses SOFastWeatherWsdlClass::getSoapClient()
	 * @uses SOFastWeatherWsdlClass::setResult()
	 * @uses SOFastWeatherWsdlClass::getResult()
	 * @uses SOFastWeatherWsdlClass::saveLastError()
	 * @uses SOFastWeatherTypeGetWeatherByZip::getPostalCode()
	 * @uses SOFastWeatherTypeGetWeatherByZip::getLicenseKey()
	 * @param SOFastWeatherTypeGetWeatherByZip GetWeatherByZip
	 * @return SOFastWeatherTypeGetWeatherByZipResponse
	 */
	public function GetWeatherByZip(SOFastWeatherTypeGetWeatherByZip $_SOFastWeatherTypeGetWeatherByZip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWeatherByZip(array('PostalCode'=>$_SOFastWeatherTypeGetWeatherByZip->getPostalCode(),'LicenseKey'=>$_SOFastWeatherTypeGetWeatherByZip->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWeatherByCityState
	 * Meta informations :
	 * 	- documentation : Returns the weather for a given US city and state.
	 * @uses SOFastWeatherWsdlClass::getSoapClient()
	 * @uses SOFastWeatherWsdlClass::setResult()
	 * @uses SOFastWeatherWsdlClass::getResult()
	 * @uses SOFastWeatherWsdlClass::saveLastError()
	 * @uses SOFastWeatherTypeGetWeatherByCityState::getCity()
	 * @uses SOFastWeatherTypeGetWeatherByCityState::getState()
	 * @uses SOFastWeatherTypeGetWeatherByCityState::getLicenseKey()
	 * @param SOFastWeatherTypeGetWeatherByCityState GetWeatherByCityState
	 * @return SOFastWeatherTypeGetWeatherByCityStateResponse
	 */
	public function GetWeatherByCityState(SOFastWeatherTypeGetWeatherByCityState $_SOFastWeatherTypeGetWeatherByCityState)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWeatherByCityState(array('City'=>$_SOFastWeatherTypeGetWeatherByCityState->getCity(),'State'=>$_SOFastWeatherTypeGetWeatherByCityState->getState(),'LicenseKey'=>$_SOFastWeatherTypeGetWeatherByCityState->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFiveDayForecastByZip
	 * Meta informations :
	 * 	- documentation : Returns the five day forecast for the given zip code.
	 * @uses SOFastWeatherWsdlClass::getSoapClient()
	 * @uses SOFastWeatherWsdlClass::setResult()
	 * @uses SOFastWeatherWsdlClass::getResult()
	 * @uses SOFastWeatherWsdlClass::saveLastError()
	 * @uses SOFastWeatherTypeGetFiveDayForecastByZip::getZip()
	 * @uses SOFastWeatherTypeGetFiveDayForecastByZip::getLicenseKey()
	 * @param SOFastWeatherTypeGetFiveDayForecastByZip GetFiveDayForecastByZip
	 * @return SOFastWeatherTypeGetFiveDayForecastByZipResponse
	 */
	public function GetFiveDayForecastByZip(SOFastWeatherTypeGetFiveDayForecastByZip $_SOFastWeatherTypeGetFiveDayForecastByZip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFiveDayForecastByZip(array('Zip'=>$_SOFastWeatherTypeGetFiveDayForecastByZip->getZip(),'LicenseKey'=>$_SOFastWeatherTypeGetFiveDayForecastByZip->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWarningsByZip
	 * Meta informations :
	 * 	- documentation : Returns the weather warnings for the given zip code.
	 * @uses SOFastWeatherWsdlClass::getSoapClient()
	 * @uses SOFastWeatherWsdlClass::setResult()
	 * @uses SOFastWeatherWsdlClass::getResult()
	 * @uses SOFastWeatherWsdlClass::saveLastError()
	 * @uses SOFastWeatherTypeGetWarningsByZip::getZip()
	 * @uses SOFastWeatherTypeGetWarningsByZip::getLicenseKey()
	 * @param SOFastWeatherTypeGetWarningsByZip GetWarningsByZip
	 * @return SOFastWeatherTypeGetWarningsByZipResponse
	 */
	public function GetWarningsByZip(SOFastWeatherTypeGetWarningsByZip $_SOFastWeatherTypeGetWarningsByZip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWarningsByZip(array('Zip'=>$_SOFastWeatherTypeGetWarningsByZip->getZip(),'LicenseKey'=>$_SOFastWeatherTypeGetWarningsByZip->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWarningsByState
	 * Meta informations :
	 * 	- documentation : Returns the weather warnings for the given state.
	 * @uses SOFastWeatherWsdlClass::getSoapClient()
	 * @uses SOFastWeatherWsdlClass::setResult()
	 * @uses SOFastWeatherWsdlClass::getResult()
	 * @uses SOFastWeatherWsdlClass::saveLastError()
	 * @uses SOFastWeatherTypeGetWarningsByState::getState()
	 * @uses SOFastWeatherTypeGetWarningsByState::getLicenseKey()
	 * @param SOFastWeatherTypeGetWarningsByState GetWarningsByState
	 * @return SOFastWeatherTypeGetWarningsByStateResponse
	 */
	public function GetWarningsByState(SOFastWeatherTypeGetWarningsByState $_SOFastWeatherTypeGetWarningsByState)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWarningsByState(array('State'=>$_SOFastWeatherTypeGetWarningsByState->getState(),'LicenseKey'=>$_SOFastWeatherTypeGetWarningsByState->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWeatherByIP
	 * Meta informations :
	 * 	- documentation : Returns the weather for a given IP Address.
	 * @uses SOFastWeatherWsdlClass::getSoapClient()
	 * @uses SOFastWeatherWsdlClass::setResult()
	 * @uses SOFastWeatherWsdlClass::getResult()
	 * @uses SOFastWeatherWsdlClass::saveLastError()
	 * @uses SOFastWeatherTypeGetWeatherByIP::getIPAddress()
	 * @uses SOFastWeatherTypeGetWeatherByIP::getLicenseKey()
	 * @param SOFastWeatherTypeGetWeatherByIP GetWeatherByIP
	 * @return SOFastWeatherTypeGetWeatherByIPResponse
	 */
	public function GetWeatherByIP(SOFastWeatherTypeGetWeatherByIP $_SOFastWeatherTypeGetWeatherByIP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWeatherByIP(array('IPAddress'=>$_SOFastWeatherTypeGetWeatherByIP->getIPAddress(),'LicenseKey'=>$_SOFastWeatherTypeGetWeatherByIP->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWeatherHistoricalByZip
	 * Meta informations :
	 * 	- documentation : Returns historical weather information for a given US postal code, date, and time.
	 * @uses SOFastWeatherWsdlClass::getSoapClient()
	 * @uses SOFastWeatherWsdlClass::setResult()
	 * @uses SOFastWeatherWsdlClass::getResult()
	 * @uses SOFastWeatherWsdlClass::saveLastError()
	 * @uses SOFastWeatherTypeGetWeatherHistoricalByZip::getPostalCode()
	 * @uses SOFastWeatherTypeGetWeatherHistoricalByZip::getDate()
	 * @uses SOFastWeatherTypeGetWeatherHistoricalByZip::getTime()
	 * @uses SOFastWeatherTypeGetWeatherHistoricalByZip::getLicenseKey()
	 * @param SOFastWeatherTypeGetWeatherHistoricalByZip GetWeatherHistoricalByZip
	 * @return SOFastWeatherTypeGetWeatherHistoricalByZipResponse
	 */
	public function GetWeatherHistoricalByZip(SOFastWeatherTypeGetWeatherHistoricalByZip $_SOFastWeatherTypeGetWeatherHistoricalByZip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWeatherHistoricalByZip(array('PostalCode'=>$_SOFastWeatherTypeGetWeatherHistoricalByZip->getPostalCode(),'Date'=>$_SOFastWeatherTypeGetWeatherHistoricalByZip->getDate(),'Time'=>$_SOFastWeatherTypeGetWeatherHistoricalByZip->getTime(),'LicenseKey'=>$_SOFastWeatherTypeGetWeatherHistoricalByZip->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWeatherByWMOID
	 * Meta informations :
	 * 	- documentation : Returns the weather for a given WMOID. Also see the GetWMOIDByCity method.
	 * @uses SOFastWeatherWsdlClass::getSoapClient()
	 * @uses SOFastWeatherWsdlClass::setResult()
	 * @uses SOFastWeatherWsdlClass::getResult()
	 * @uses SOFastWeatherWsdlClass::saveLastError()
	 * @uses SOFastWeatherTypeGetWeatherByWMOID::getWMOID()
	 * @uses SOFastWeatherTypeGetWeatherByWMOID::getLicenseKey()
	 * @param SOFastWeatherTypeGetWeatherByWMOID GetWeatherByWMOID
	 * @return SOFastWeatherTypeGetWeatherByWMOIDResponse
	 */
	public function GetWeatherByWMOID(SOFastWeatherTypeGetWeatherByWMOID $_SOFastWeatherTypeGetWeatherByWMOID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWeatherByWMOID(array('WMOID'=>$_SOFastWeatherTypeGetWeatherByWMOID->getWMOID(),'LicenseKey'=>$_SOFastWeatherTypeGetWeatherByWMOID->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWMOIDByCity
	 * Meta informations :
	 * 	- documentation : Returns the WMOIDs for a partial city match.
	 * @uses SOFastWeatherWsdlClass::getSoapClient()
	 * @uses SOFastWeatherWsdlClass::setResult()
	 * @uses SOFastWeatherWsdlClass::getResult()
	 * @uses SOFastWeatherWsdlClass::saveLastError()
	 * @uses SOFastWeatherTypeGetWMOIDByCity::getCity()
	 * @uses SOFastWeatherTypeGetWMOIDByCity::getLicenseKey()
	 * @param SOFastWeatherTypeGetWMOIDByCity GetWMOIDByCity
	 * @return SOFastWeatherTypeGetWMOIDByCityResponse
	 */
	public function GetWMOIDByCity(SOFastWeatherTypeGetWMOIDByCity $_SOFastWeatherTypeGetWMOIDByCity)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWMOIDByCity(array('City'=>$_SOFastWeatherTypeGetWMOIDByCity->getCity(),'LicenseKey'=>$_SOFastWeatherTypeGetWMOIDByCity->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWeatherByStationID
	 * Meta informations :
	 * 	- documentation : Returns the current weather for a given weather station.
	 * @uses SOFastWeatherWsdlClass::getSoapClient()
	 * @uses SOFastWeatherWsdlClass::setResult()
	 * @uses SOFastWeatherWsdlClass::getResult()
	 * @uses SOFastWeatherWsdlClass::saveLastError()
	 * @uses SOFastWeatherTypeGetWeatherByStationID::getStationID()
	 * @uses SOFastWeatherTypeGetWeatherByStationID::getLicenseKey()
	 * @param SOFastWeatherTypeGetWeatherByStationID GetWeatherByStationID
	 * @return SOFastWeatherTypeGetWeatherByStationIDResponse
	 */
	public function GetWeatherByStationID(SOFastWeatherTypeGetWeatherByStationID $_SOFastWeatherTypeGetWeatherByStationID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWeatherByStationID(array('StationID'=>$_SOFastWeatherTypeGetWeatherByStationID->getStationID(),'LicenseKey'=>$_SOFastWeatherTypeGetWeatherByStationID->getLicenseKey())));
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
	 * @return SOFastWeatherTypeGetWeatherByStationIDResponse
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