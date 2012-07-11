<?php
/**
 * Class file for SOIpValidationServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOIpValidationServiceGet
 * @date 08/07/2012
 */
class SOIpValidationServiceGet extends SOIpValidationWsdlClass
{
	/**
	 * Method to call GetLocationByIP
	 * Meta informations :
	 * 	- documentation : Returns geographic location information for a given IP address.
	 * @uses SOIpValidationWsdlClass::getSoapClient()
	 * @uses SOIpValidationWsdlClass::setResult()
	 * @uses SOIpValidationWsdlClass::getResult()
	 * @uses SOIpValidationWsdlClass::saveLastError()
	 * @uses SOIpValidationTypeGetLocationByIP::getIPAddress()
	 * @uses SOIpValidationTypeGetLocationByIP::getLicenseKey()
	 * @param SOIpValidationTypeGetLocationByIP GetLocationByIP
	 * @return SOIpValidationTypeGetLocationByIPResponse
	 */
	public function GetLocationByIP(SOIpValidationTypeGetLocationByIP $_SOIpValidationTypeGetLocationByIP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLocationByIP(array('IPAddress'=>$_SOIpValidationTypeGetLocationByIP->getIPAddress(),'LicenseKey'=>$_SOIpValidationTypeGetLocationByIP->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCountryByIP
	 * Meta informations :
	 * 	- documentation : Returns the country that the IP address is located in.
	 * @uses SOIpValidationWsdlClass::getSoapClient()
	 * @uses SOIpValidationWsdlClass::setResult()
	 * @uses SOIpValidationWsdlClass::getResult()
	 * @uses SOIpValidationWsdlClass::saveLastError()
	 * @uses SOIpValidationTypeGetCountryByIP::getIPAddress()
	 * @uses SOIpValidationTypeGetCountryByIP::getLicenseKey()
	 * @param SOIpValidationTypeGetCountryByIP GetCountryByIP
	 * @return SOIpValidationTypeGetCountryByIPResponse
	 */
	public function GetCountryByIP(SOIpValidationTypeGetCountryByIP $_SOIpValidationTypeGetCountryByIP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCountryByIP(array('IPAddress'=>$_SOIpValidationTypeGetCountryByIP->getIPAddress(),'LicenseKey'=>$_SOIpValidationTypeGetCountryByIP->getLicenseKey())));
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
	 * @return SOIpValidationTypeGetCountryByIPResponse
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