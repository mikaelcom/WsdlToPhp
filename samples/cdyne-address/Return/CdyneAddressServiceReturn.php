<?php
/**
 * Class file for CdyneAddressServiceReturn
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressServiceReturn
 * @date 02/07/2012
 */
class CdyneAddressServiceReturn extends CdyneAddressWsdlClass
{
	/**
	 * Method to call ReturnCityState
	 * Meta informations :
	 * 	- documentation : Checks a zipcode and returns City, State, Lat, Long and more. The latitude and longitude will be more precise with a plus 4. We have added Canadian Postal Codes to this mix. This is the only function that will pull Canadian Geo and City information.
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @uses CdyneAddressTypeReturnCityState::getZipcode()
	 * @uses CdyneAddressTypeReturnCityState::getLicenseKey()
	 * @param CdyneAddressTypeReturnCityState ReturnCityState
	 * @return CdyneAddressTypeReturnCityStateResponse
	 */
	public function ReturnCityState(CdyneAddressTypeReturnCityState $_CdyneAddressTypeReturnCityState)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReturnCityState(array('zipcode'=>$_CdyneAddressTypeReturnCityState->getZipcode(),'LicenseKey'=>$_CdyneAddressTypeReturnCityState->getLicenseKey())));
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
	 * @return CdyneAddressTypeReturnCityStateResponse
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