<?php
/**
 * Class file for BingGeoServiceGeocode
 * @date 02/07/2012
 */
/**
 * Class BingGeoServiceGeocode
 * @date 02/07/2012
 */
class BingGeoServiceGeocode extends BingGeoWsdlClass
{
	/**
	 * Method to call Geocode
	 * @uses BingGeoWsdlClass::getSoapClient()
	 * @uses BingGeoWsdlClass::setResult()
	 * @uses BingGeoWsdlClass::getResult()
	 * @uses BingGeoWsdlClass::saveLastError()
	 * @uses BingGeoTypeGeocode::getRequest()
	 * @param BingGeoTypeGeocode Geocode
	 * @return BingGeoTypeGeocodeResponse
	 */
	public function Geocode(BingGeoTypeGeocode $_BingGeoTypeGeocode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Geocode(array('request'=>$_BingGeoTypeGeocode->getRequest())));
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
	 * @return BingGeoTypeGeocodeResponse
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