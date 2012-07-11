<?php
/**
 * Class file for SOGeoCoderServiceGet
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderServiceGet
 * @date 05/07/2012
 */
class SOGeoCoderServiceGet extends SOGeoCoderWsdlClass
{
	/**
	 * Method to call GetGeoLocation
	 * Meta informations :
	 * 	- documentation : Returns latitude and longitude of a given US address.
	 * @uses SOGeoCoderWsdlClass::getSoapClient()
	 * @uses SOGeoCoderWsdlClass::setResult()
	 * @uses SOGeoCoderWsdlClass::getResult()
	 * @uses SOGeoCoderWsdlClass::saveLastError()
	 * @uses SOGeoCoderTypeGetGeoLocation::getAddress()
	 * @uses SOGeoCoderTypeGetGeoLocation::getCity()
	 * @uses SOGeoCoderTypeGetGeoLocation::getState()
	 * @uses SOGeoCoderTypeGetGeoLocation::getPostalCode()
	 * @uses SOGeoCoderTypeGetGeoLocation::getLicenseKey()
	 * @param SOGeoCoderTypeGetGeoLocation GetGeoLocation
	 * @return SOGeoCoderTypeGetGeoLocationResponse
	 */
	public function GetGeoLocation(SOGeoCoderTypeGetGeoLocation $_SOGeoCoderTypeGetGeoLocation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGeoLocation(array('Address'=>$_SOGeoCoderTypeGetGeoLocation->getAddress(),'City'=>$_SOGeoCoderTypeGetGeoLocation->getCity(),'State'=>$_SOGeoCoderTypeGetGeoLocation->getState(),'PostalCode'=>$_SOGeoCoderTypeGetGeoLocation->getPostalCode(),'LicenseKey'=>$_SOGeoCoderTypeGetGeoLocation->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGeoLocationByZipPlusFour
	 * Meta informations :
	 * 	- documentation : Returns latitude and longitude of a given Zip+4.
	 * @uses SOGeoCoderWsdlClass::getSoapClient()
	 * @uses SOGeoCoderWsdlClass::setResult()
	 * @uses SOGeoCoderWsdlClass::getResult()
	 * @uses SOGeoCoderWsdlClass::saveLastError()
	 * @uses SOGeoCoderTypeGetGeoLocationByZipPlusFour::getPostalCode()
	 * @uses SOGeoCoderTypeGetGeoLocationByZipPlusFour::getLicenseKey()
	 * @param SOGeoCoderTypeGetGeoLocationByZipPlusFour GetGeoLocationByZipPlusFour
	 * @return SOGeoCoderTypeGetGeoLocationByZipPlusFourResponse
	 */
	public function GetGeoLocationByZipPlusFour(SOGeoCoderTypeGetGeoLocationByZipPlusFour $_SOGeoCoderTypeGetGeoLocationByZipPlusFour)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGeoLocationByZipPlusFour(array('PostalCode'=>$_SOGeoCoderTypeGetGeoLocationByZipPlusFour->getPostalCode(),'LicenseKey'=>$_SOGeoCoderTypeGetGeoLocationByZipPlusFour->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGeoLocationByZipPlusTwo
	 * Meta informations :
	 * 	- documentation : Returns latitude and longitude of a given Zip+2.
	 * @uses SOGeoCoderWsdlClass::getSoapClient()
	 * @uses SOGeoCoderWsdlClass::setResult()
	 * @uses SOGeoCoderWsdlClass::getResult()
	 * @uses SOGeoCoderWsdlClass::saveLastError()
	 * @uses SOGeoCoderTypeGetGeoLocationByZipPlusTwo::getPostalCode()
	 * @uses SOGeoCoderTypeGetGeoLocationByZipPlusTwo::getLicenseKey()
	 * @param SOGeoCoderTypeGetGeoLocationByZipPlusTwo GetGeoLocationByZipPlusTwo
	 * @return SOGeoCoderTypeGetGeoLocationByZipPlusTwoResponse
	 */
	public function GetGeoLocationByZipPlusTwo(SOGeoCoderTypeGetGeoLocationByZipPlusTwo $_SOGeoCoderTypeGetGeoLocationByZipPlusTwo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGeoLocationByZipPlusTwo(array('PostalCode'=>$_SOGeoCoderTypeGetGeoLocationByZipPlusTwo->getPostalCode(),'LicenseKey'=>$_SOGeoCoderTypeGetGeoLocationByZipPlusTwo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGeoLocationByCityState
	 * Meta informations :
	 * 	- documentation : Returns Latitude and Longitude location of a given US City and State.
	 * @uses SOGeoCoderWsdlClass::getSoapClient()
	 * @uses SOGeoCoderWsdlClass::setResult()
	 * @uses SOGeoCoderWsdlClass::getResult()
	 * @uses SOGeoCoderWsdlClass::saveLastError()
	 * @uses SOGeoCoderTypeGetGeoLocationByCityState::getCity()
	 * @uses SOGeoCoderTypeGetGeoLocationByCityState::getState()
	 * @uses SOGeoCoderTypeGetGeoLocationByCityState::getLicenseKey()
	 * @param SOGeoCoderTypeGetGeoLocationByCityState GetGeoLocationByCityState
	 * @return SOGeoCoderTypeGetGeoLocationByCityStateResponse
	 */
	public function GetGeoLocationByCityState(SOGeoCoderTypeGetGeoLocationByCityState $_SOGeoCoderTypeGetGeoLocationByCityState)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGeoLocationByCityState(array('City'=>$_SOGeoCoderTypeGetGeoLocationByCityState->getCity(),'State'=>$_SOGeoCoderTypeGetGeoLocationByCityState->getState(),'LicenseKey'=>$_SOGeoCoderTypeGetGeoLocationByCityState->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBestMatch
	 * Meta informations :
	 * 	- documentation : Returns the closest known Latitude and Longitude location for a given US Address.
	 * @uses SOGeoCoderWsdlClass::getSoapClient()
	 * @uses SOGeoCoderWsdlClass::setResult()
	 * @uses SOGeoCoderWsdlClass::getResult()
	 * @uses SOGeoCoderWsdlClass::saveLastError()
	 * @uses SOGeoCoderTypeGetBestMatch::getAddress()
	 * @uses SOGeoCoderTypeGetBestMatch::getCity()
	 * @uses SOGeoCoderTypeGetBestMatch::getState()
	 * @uses SOGeoCoderTypeGetBestMatch::getPostalCode()
	 * @uses SOGeoCoderTypeGetBestMatch::getLicenseKey()
	 * @param SOGeoCoderTypeGetBestMatch GetBestMatch
	 * @return SOGeoCoderTypeGetBestMatchResponse
	 */
	public function GetBestMatch(SOGeoCoderTypeGetBestMatch $_SOGeoCoderTypeGetBestMatch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBestMatch(array('Address'=>$_SOGeoCoderTypeGetBestMatch->getAddress(),'City'=>$_SOGeoCoderTypeGetBestMatch->getCity(),'State'=>$_SOGeoCoderTypeGetBestMatch->getState(),'PostalCode'=>$_SOGeoCoderTypeGetBestMatch->getPostalCode(),'LicenseKey'=>$_SOGeoCoderTypeGetBestMatch->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetZipInfo
	 * Meta informations :
	 * 	- documentation : Returns general information about a given US Zip Code.
	 * @uses SOGeoCoderWsdlClass::getSoapClient()
	 * @uses SOGeoCoderWsdlClass::setResult()
	 * @uses SOGeoCoderWsdlClass::getResult()
	 * @uses SOGeoCoderWsdlClass::saveLastError()
	 * @uses SOGeoCoderTypeGetZipInfo::getPostalCode()
	 * @uses SOGeoCoderTypeGetZipInfo::getLicenseKey()
	 * @param SOGeoCoderTypeGetZipInfo GetZipInfo
	 * @return SOGeoCoderTypeGetZipInfoResponse
	 */
	public function GetZipInfo(SOGeoCoderTypeGetZipInfo $_SOGeoCoderTypeGetZipInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetZipInfo(array('PostalCode'=>$_SOGeoCoderTypeGetZipInfo->getPostalCode(),'LicenseKey'=>$_SOGeoCoderTypeGetZipInfo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGeoLocationWorldwide
	 * Meta informations :
	 * 	- documentation : Returns Lat Lon information for a given worldwide city. Multiple matches can be filtered by country or region(state, province etc.)
	 * @uses SOGeoCoderWsdlClass::getSoapClient()
	 * @uses SOGeoCoderWsdlClass::setResult()
	 * @uses SOGeoCoderWsdlClass::getResult()
	 * @uses SOGeoCoderWsdlClass::saveLastError()
	 * @uses SOGeoCoderTypeGetGeoLocationWorldwide::getCity()
	 * @uses SOGeoCoderTypeGetGeoLocationWorldwide::getRegion()
	 * @uses SOGeoCoderTypeGetGeoLocationWorldwide::getCountry()
	 * @uses SOGeoCoderTypeGetGeoLocationWorldwide::getLicenseKey()
	 * @param SOGeoCoderTypeGetGeoLocationWorldwide GetGeoLocationWorldwide
	 * @return SOGeoCoderTypeGetGeoLocationWorldwideResponse
	 */
	public function GetGeoLocationWorldwide(SOGeoCoderTypeGetGeoLocationWorldwide $_SOGeoCoderTypeGetGeoLocationWorldwide)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGeoLocationWorldwide(array('City'=>$_SOGeoCoderTypeGetGeoLocationWorldwide->getCity(),'Region'=>$_SOGeoCoderTypeGetGeoLocationWorldwide->getRegion(),'Country'=>$_SOGeoCoderTypeGetGeoLocationWorldwide->getCountry(),'LicenseKey'=>$_SOGeoCoderTypeGetGeoLocationWorldwide->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetReverseLocation
	 * Meta informations :
	 * 	- documentation : Returns an estimated address for a given latitude and longitude.
	 * @uses SOGeoCoderWsdlClass::getSoapClient()
	 * @uses SOGeoCoderWsdlClass::setResult()
	 * @uses SOGeoCoderWsdlClass::getResult()
	 * @uses SOGeoCoderWsdlClass::saveLastError()
	 * @uses SOGeoCoderTypeGetReverseLocation::getLatitude()
	 * @uses SOGeoCoderTypeGetReverseLocation::getLongitude()
	 * @uses SOGeoCoderTypeGetReverseLocation::getLicenseKey()
	 * @param SOGeoCoderTypeGetReverseLocation GetReverseLocation
	 * @return SOGeoCoderTypeGetReverseLocationResponse
	 */
	public function GetReverseLocation(SOGeoCoderTypeGetReverseLocation $_SOGeoCoderTypeGetReverseLocation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetReverseLocation(array('Latitude'=>$_SOGeoCoderTypeGetReverseLocation->getLatitude(),'Longitude'=>$_SOGeoCoderTypeGetReverseLocation->getLongitude(),'LicenseKey'=>$_SOGeoCoderTypeGetReverseLocation->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDistanceToWater
	 * Meta informations :
	 * 	- documentation : Returns an estimated distance from a given latitude and longitude to the nearest saltwater.
	 * @uses SOGeoCoderWsdlClass::getSoapClient()
	 * @uses SOGeoCoderWsdlClass::setResult()
	 * @uses SOGeoCoderWsdlClass::getResult()
	 * @uses SOGeoCoderWsdlClass::saveLastError()
	 * @uses SOGeoCoderTypeGetDistanceToWater::getLatitude()
	 * @uses SOGeoCoderTypeGetDistanceToWater::getLongitude()
	 * @uses SOGeoCoderTypeGetDistanceToWater::getLicenseKey()
	 * @param SOGeoCoderTypeGetDistanceToWater GetDistanceToWater
	 * @return SOGeoCoderTypeGetDistanceToWaterResponse
	 */
	public function GetDistanceToWater(SOGeoCoderTypeGetDistanceToWater $_SOGeoCoderTypeGetDistanceToWater)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDistanceToWater(array('Latitude'=>$_SOGeoCoderTypeGetDistanceToWater->getLatitude(),'Longitude'=>$_SOGeoCoderTypeGetDistanceToWater->getLongitude(),'LicenseKey'=>$_SOGeoCoderTypeGetDistanceToWater->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDistanceToWaterByAddress
	 * Meta informations :
	 * 	- documentation : Returns an estimated distance from a given address to the nearest saltwater.
	 * @uses SOGeoCoderWsdlClass::getSoapClient()
	 * @uses SOGeoCoderWsdlClass::setResult()
	 * @uses SOGeoCoderWsdlClass::getResult()
	 * @uses SOGeoCoderWsdlClass::saveLastError()
	 * @uses SOGeoCoderTypeGetDistanceToWaterByAddress::getAddress()
	 * @uses SOGeoCoderTypeGetDistanceToWaterByAddress::getCity()
	 * @uses SOGeoCoderTypeGetDistanceToWaterByAddress::getState()
	 * @uses SOGeoCoderTypeGetDistanceToWaterByAddress::getPostalCode()
	 * @uses SOGeoCoderTypeGetDistanceToWaterByAddress::getLicenseKey()
	 * @param SOGeoCoderTypeGetDistanceToWaterByAddress GetDistanceToWaterByAddress
	 * @return SOGeoCoderTypeGetDistanceToWaterByAddressResponse
	 */
	public function GetDistanceToWaterByAddress(SOGeoCoderTypeGetDistanceToWaterByAddress $_SOGeoCoderTypeGetDistanceToWaterByAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDistanceToWaterByAddress(array('Address'=>$_SOGeoCoderTypeGetDistanceToWaterByAddress->getAddress(),'City'=>$_SOGeoCoderTypeGetDistanceToWaterByAddress->getCity(),'State'=>$_SOGeoCoderTypeGetDistanceToWaterByAddress->getState(),'PostalCode'=>$_SOGeoCoderTypeGetDistanceToWaterByAddress->getPostalCode(),'LicenseKey'=>$_SOGeoCoderTypeGetDistanceToWaterByAddress->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDistance
	 * Meta informations :
	 * 	- documentation : Returns an estimated distance between two given locations.
	 * @uses SOGeoCoderWsdlClass::getSoapClient()
	 * @uses SOGeoCoderWsdlClass::setResult()
	 * @uses SOGeoCoderWsdlClass::getResult()
	 * @uses SOGeoCoderWsdlClass::saveLastError()
	 * @uses SOGeoCoderTypeGetDistance::getFromLatitude()
	 * @uses SOGeoCoderTypeGetDistance::getFromLongitude()
	 * @uses SOGeoCoderTypeGetDistance::getToLatitude()
	 * @uses SOGeoCoderTypeGetDistance::getToLongitude()
	 * @uses SOGeoCoderTypeGetDistance::getLicenseKey()
	 * @param SOGeoCoderTypeGetDistance GetDistance
	 * @return SOGeoCoderTypeGetDistanceResponse
	 */
	public function GetDistance(SOGeoCoderTypeGetDistance $_SOGeoCoderTypeGetDistance)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDistance(array('FromLatitude'=>$_SOGeoCoderTypeGetDistance->getFromLatitude(),'FromLongitude'=>$_SOGeoCoderTypeGetDistance->getFromLongitude(),'ToLatitude'=>$_SOGeoCoderTypeGetDistance->getToLatitude(),'ToLongitude'=>$_SOGeoCoderTypeGetDistance->getToLongitude(),'LicenseKey'=>$_SOGeoCoderTypeGetDistance->getLicenseKey())));
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
	 * @return SOGeoCoderTypeGetDistanceResponse
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