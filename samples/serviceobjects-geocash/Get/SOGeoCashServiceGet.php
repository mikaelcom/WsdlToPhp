<?php
/**
 * Class file for SOGeoCashServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOGeoCashServiceGet
 * @date 08/07/2012
 */
class SOGeoCashServiceGet extends SOGeoCashWsdlClass
{
	/**
	 * Method to call GetATMLocations
	 * Meta informations :
	 * 	- documentation : Returns up to ten ATM locations for a given 5-digit zipcode.
	 * @uses SOGeoCashWsdlClass::getSoapClient()
	 * @uses SOGeoCashWsdlClass::setResult()
	 * @uses SOGeoCashWsdlClass::getResult()
	 * @uses SOGeoCashWsdlClass::saveLastError()
	 * @uses SOGeoCashTypeGetATMLocations::getPostalCode()
	 * @uses SOGeoCashTypeGetATMLocations::getLicenseKey()
	 * @param SOGeoCashTypeGetATMLocations GetATMLocations
	 * @return SOGeoCashTypeGetATMLocationsResponse
	 */
	public function GetATMLocations(SOGeoCashTypeGetATMLocations $_SOGeoCashTypeGetATMLocations)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetATMLocations(array('PostalCode'=>$_SOGeoCashTypeGetATMLocations->getPostalCode(),'LicenseKey'=>$_SOGeoCashTypeGetATMLocations->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetATMLocationsByZipRadius
	 * Meta informations :
	 * 	- documentation : Returns up to fifty ATM locations within a specified radius (in miles) for a given 5-digit zipcode.
	 * @uses SOGeoCashWsdlClass::getSoapClient()
	 * @uses SOGeoCashWsdlClass::setResult()
	 * @uses SOGeoCashWsdlClass::getResult()
	 * @uses SOGeoCashWsdlClass::saveLastError()
	 * @uses SOGeoCashTypeGetATMLocationsByZipRadius::getPostalCode()
	 * @uses SOGeoCashTypeGetATMLocationsByZipRadius::getRadius()
	 * @uses SOGeoCashTypeGetATMLocationsByZipRadius::getLicenseKey()
	 * @param SOGeoCashTypeGetATMLocationsByZipRadius GetATMLocationsByZipRadius
	 * @return SOGeoCashTypeGetATMLocationsByZipRadiusResponse
	 */
	public function GetATMLocationsByZipRadius(SOGeoCashTypeGetATMLocationsByZipRadius $_SOGeoCashTypeGetATMLocationsByZipRadius)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetATMLocationsByZipRadius(array('PostalCode'=>$_SOGeoCashTypeGetATMLocationsByZipRadius->getPostalCode(),'Radius'=>$_SOGeoCashTypeGetATMLocationsByZipRadius->getRadius(),'LicenseKey'=>$_SOGeoCashTypeGetATMLocationsByZipRadius->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetATMLocationsByZipStreet
	 * Meta informations :
	 * 	- documentation : Returns up to fifty ATM locations that match a street name within a given 5-digit zipcode.
	 * @uses SOGeoCashWsdlClass::getSoapClient()
	 * @uses SOGeoCashWsdlClass::setResult()
	 * @uses SOGeoCashWsdlClass::getResult()
	 * @uses SOGeoCashWsdlClass::saveLastError()
	 * @uses SOGeoCashTypeGetATMLocationsByZipStreet::getPostalCode()
	 * @uses SOGeoCashTypeGetATMLocationsByZipStreet::getStreetName()
	 * @uses SOGeoCashTypeGetATMLocationsByZipStreet::getLicenseKey()
	 * @param SOGeoCashTypeGetATMLocationsByZipStreet GetATMLocationsByZipStreet
	 * @return SOGeoCashTypeGetATMLocationsByZipStreetResponse
	 */
	public function GetATMLocationsByZipStreet(SOGeoCashTypeGetATMLocationsByZipStreet $_SOGeoCashTypeGetATMLocationsByZipStreet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetATMLocationsByZipStreet(array('PostalCode'=>$_SOGeoCashTypeGetATMLocationsByZipStreet->getPostalCode(),'StreetName'=>$_SOGeoCashTypeGetATMLocationsByZipStreet->getStreetName(),'LicenseKey'=>$_SOGeoCashTypeGetATMLocationsByZipStreet->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetATMLocationsByCityState
	 * Meta informations :
	 * 	- documentation : Returns up to fifty ATM locations for a given city and 2-letter state abbreviation.
	 * @uses SOGeoCashWsdlClass::getSoapClient()
	 * @uses SOGeoCashWsdlClass::setResult()
	 * @uses SOGeoCashWsdlClass::getResult()
	 * @uses SOGeoCashWsdlClass::saveLastError()
	 * @uses SOGeoCashTypeGetATMLocationsByCityState::getCity()
	 * @uses SOGeoCashTypeGetATMLocationsByCityState::getState()
	 * @uses SOGeoCashTypeGetATMLocationsByCityState::getLicenseKey()
	 * @param SOGeoCashTypeGetATMLocationsByCityState GetATMLocationsByCityState
	 * @return SOGeoCashTypeGetATMLocationsByCityStateResponse
	 */
	public function GetATMLocationsByCityState(SOGeoCashTypeGetATMLocationsByCityState $_SOGeoCashTypeGetATMLocationsByCityState)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetATMLocationsByCityState(array('City'=>$_SOGeoCashTypeGetATMLocationsByCityState->getCity(),'State'=>$_SOGeoCashTypeGetATMLocationsByCityState->getState(),'LicenseKey'=>$_SOGeoCashTypeGetATMLocationsByCityState->getLicenseKey())));
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
	 * @return SOGeoCashTypeGetATMLocationsByCityStateResponse
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