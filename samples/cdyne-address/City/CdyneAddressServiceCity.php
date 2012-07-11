<?php
/**
 * Class file for CdyneAddressServiceCity
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressServiceCity
 * @date 02/07/2012
 */
class CdyneAddressServiceCity extends CdyneAddressWsdlClass
{
	/**
	 * Method to call CityStateToZipCodeMatcher
	 * Meta informations :
	 * 	- documentation : Returns all possible zipcodes for a city/state combination. <b>For this function to work you must put true or false in IgnoreBadCitySpelling</b>. That flag will allow you to have cities zipcodes that have the city name spelled incorrectly. This function is far more accurate with that flag set to false. Use a licensekey of 0 for testing.
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @uses CdyneAddressTypeCityStateToZipCodeMatcher::getCity()
	 * @uses CdyneAddressTypeCityStateToZipCodeMatcher::getStateAbbrev()
	 * @uses CdyneAddressTypeCityStateToZipCodeMatcher::getIgnoreBadCitySpelling()
	 * @uses CdyneAddressTypeCityStateToZipCodeMatcher::getLicenseKey()
	 * @param CdyneAddressTypeCityStateToZipCodeMatcher CityStateToZipCodeMatcher
	 * @return CdyneAddressTypeCityStateToZipCodeMatcherResponse
	 */
	public function CityStateToZipCodeMatcher(CdyneAddressTypeCityStateToZipCodeMatcher $_CdyneAddressTypeCityStateToZipCodeMatcher)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CityStateToZipCodeMatcher(array('City'=>$_CdyneAddressTypeCityStateToZipCodeMatcher->getCity(),'StateAbbrev'=>$_CdyneAddressTypeCityStateToZipCodeMatcher->getStateAbbrev(),'IgnoreBadCitySpelling'=>$_CdyneAddressTypeCityStateToZipCodeMatcher->getIgnoreBadCitySpelling(),'LicenseKey'=>$_CdyneAddressTypeCityStateToZipCodeMatcher->getLicenseKey())));
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
	 * @return CdyneAddressTypeCityStateToZipCodeMatcherResponse
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