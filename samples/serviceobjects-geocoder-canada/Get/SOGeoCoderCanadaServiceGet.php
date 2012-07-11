<?php
/**
 * Class file for SOGeoCoderCanadaServiceGet
 * @date 06/07/2012
 */
/**
 * Class SOGeoCoderCanadaServiceGet
 * @date 06/07/2012
 */
class SOGeoCoderCanadaServiceGet extends SOGeoCoderCanadaWsdlClass
{
	/**
	 * Method to call GetGeoLocation
	 * Meta informations :
	 * 	- documentation : Returns latitude/longitude information for a given Canadian postal address.
	 * @uses SOGeoCoderCanadaWsdlClass::getSoapClient()
	 * @uses SOGeoCoderCanadaWsdlClass::setResult()
	 * @uses SOGeoCoderCanadaWsdlClass::getResult()
	 * @uses SOGeoCoderCanadaWsdlClass::saveLastError()
	 * @uses SOGeoCoderCanadaTypeGetGeoLocation::getAddress()
	 * @uses SOGeoCoderCanadaTypeGetGeoLocation::getMunicipality()
	 * @uses SOGeoCoderCanadaTypeGetGeoLocation::getProvince()
	 * @uses SOGeoCoderCanadaTypeGetGeoLocation::getPostalCode()
	 * @uses SOGeoCoderCanadaTypeGetGeoLocation::getLicenseKey()
	 * @param SOGeoCoderCanadaTypeGetGeoLocation GetGeoLocation
	 * @return SOGeoCoderCanadaTypeGetGeoLocationResponse
	 */
	public function GetGeoLocation(SOGeoCoderCanadaTypeGetGeoLocation $_SOGeoCoderCanadaTypeGetGeoLocation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGeoLocation(array('Address'=>$_SOGeoCoderCanadaTypeGetGeoLocation->getAddress(),'Municipality'=>$_SOGeoCoderCanadaTypeGetGeoLocation->getMunicipality(),'Province'=>$_SOGeoCoderCanadaTypeGetGeoLocation->getProvince(),'PostalCode'=>$_SOGeoCoderCanadaTypeGetGeoLocation->getPostalCode(),'LicenseKey'=>$_SOGeoCoderCanadaTypeGetGeoLocation->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGeoLocationByMunicipalityProvince
	 * Meta informations :
	 * 	- documentation : Returns latitude/longitude information for a given Canadian city and province.
	 * @uses SOGeoCoderCanadaWsdlClass::getSoapClient()
	 * @uses SOGeoCoderCanadaWsdlClass::setResult()
	 * @uses SOGeoCoderCanadaWsdlClass::getResult()
	 * @uses SOGeoCoderCanadaWsdlClass::saveLastError()
	 * @uses SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince::getMunicipality()
	 * @uses SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince::getProvince()
	 * @uses SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince::getLicenseKey()
	 * @param SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince GetGeoLocationByMunicipalityProvince
	 * @return SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvinceResponse
	 */
	public function GetGeoLocationByMunicipalityProvince(SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince $_SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGeoLocationByMunicipalityProvince(array('Municipality'=>$_SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince->getMunicipality(),'Province'=>$_SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince->getProvince(),'LicenseKey'=>$_SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPostalCodeInfo
	 * Meta informations :
	 * 	- documentation : Returns location and demographic information for a given Canadian postal code.
	 * @uses SOGeoCoderCanadaWsdlClass::getSoapClient()
	 * @uses SOGeoCoderCanadaWsdlClass::setResult()
	 * @uses SOGeoCoderCanadaWsdlClass::getResult()
	 * @uses SOGeoCoderCanadaWsdlClass::saveLastError()
	 * @uses SOGeoCoderCanadaTypeGetPostalCodeInfo::getPostalCode()
	 * @uses SOGeoCoderCanadaTypeGetPostalCodeInfo::getLicenseKey()
	 * @param SOGeoCoderCanadaTypeGetPostalCodeInfo GetPostalCodeInfo
	 * @return SOGeoCoderCanadaTypeGetPostalCodeInfoResponse
	 */
	public function GetPostalCodeInfo(SOGeoCoderCanadaTypeGetPostalCodeInfo $_SOGeoCoderCanadaTypeGetPostalCodeInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPostalCodeInfo(array('PostalCode'=>$_SOGeoCoderCanadaTypeGetPostalCodeInfo->getPostalCode(),'LicenseKey'=>$_SOGeoCoderCanadaTypeGetPostalCodeInfo->getLicenseKey())));
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
	 * @return SOGeoCoderCanadaTypeGetPostalCodeInfoResponse
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