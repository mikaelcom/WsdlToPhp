<?php
/**
 * Class file for EccGeoIPCtryServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccGeoIPCtryServiceGet
 * @date 03/07/2012
 */
class EccGeoIPCtryServiceGet extends EccGeoIPCtryWsdlClass
{
	/**
	 * Method to call GetCountry
	 * Meta informations :
	 * 	- documentation : Determine the Internet visitor's country based on the IP address. (Global)
	 * @uses EccGeoIPCtryWsdlClass::getSoapClient()
	 * @uses EccGeoIPCtryWsdlClass::setResult()
	 * @uses EccGeoIPCtryWsdlClass::getResult()
	 * @uses EccGeoIPCtryWsdlClass::saveLastError()
	 * @uses EccGeoIPCtryTypeGetCountry::getKeyID()
	 * @uses EccGeoIPCtryTypeGetCountry::getDomainID()
	 * @uses EccGeoIPCtryTypeGetCountry::getIPAddress()
	 * @param EccGeoIPCtryTypeGetCountry GetCountry
	 * @return EccGeoIPCtryTypeGetCountryResponse
	 */
	public function GetCountry(EccGeoIPCtryTypeGetCountry $_EccGeoIPCtryTypeGetCountry)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCountry(array('KeyID'=>$_EccGeoIPCtryTypeGetCountry->getKeyID(),'DomainID'=>$_EccGeoIPCtryTypeGetCountry->getDomainID(),'IPAddress'=>$_EccGeoIPCtryTypeGetCountry->getIPAddress())));
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
	 * @return EccGeoIPCtryTypeGetCountryResponse
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