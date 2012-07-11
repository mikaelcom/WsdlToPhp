<?php
/**
 * Class file for EccGeoZipCityServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccGeoZipCityServiceGet
 * @date 03/07/2012
 */
class EccGeoZipCityServiceGet extends EccGeoZipCityWsdlClass
{
	/**
	 * Method to call GetCity
	 * Meta informations :
	 * 	- documentation : Get accurate city and state information when you only have the ZIP Code. (United States)
	 * @uses EccGeoZipCityWsdlClass::getSoapClient()
	 * @uses EccGeoZipCityWsdlClass::setResult()
	 * @uses EccGeoZipCityWsdlClass::getResult()
	 * @uses EccGeoZipCityWsdlClass::saveLastError()
	 * @uses EccGeoZipCityTypeGetCity::getKeyID()
	 * @uses EccGeoZipCityTypeGetCity::getDomainID()
	 * @uses EccGeoZipCityTypeGetCity::getZipCode()
	 * @param EccGeoZipCityTypeGetCity GetCity
	 * @return EccGeoZipCityTypeGetCityResponse
	 */
	public function GetCity(EccGeoZipCityTypeGetCity $_EccGeoZipCityTypeGetCity)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCity(array('KeyID'=>$_EccGeoZipCityTypeGetCity->getKeyID(),'DomainID'=>$_EccGeoZipCityTypeGetCity->getDomainID(),'ZipCode'=>$_EccGeoZipCityTypeGetCity->getZipCode())));
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
	 * @return EccGeoZipCityTypeGetCityResponse
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