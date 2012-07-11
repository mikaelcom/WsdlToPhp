<?php
/**
 * Class file for BingGeoServiceReverse
 * @date 02/07/2012
 */
/**
 * Class BingGeoServiceReverse
 * @date 02/07/2012
 */
class BingGeoServiceReverse extends BingGeoWsdlClass
{
	/**
	 * Method to call ReverseGeocode
	 * @uses BingGeoWsdlClass::getSoapClient()
	 * @uses BingGeoWsdlClass::setResult()
	 * @uses BingGeoWsdlClass::getResult()
	 * @uses BingGeoWsdlClass::saveLastError()
	 * @uses BingGeoTypeReverseGeocode::getRequest()
	 * @param BingGeoTypeReverseGeocode ReverseGeocode
	 * @return BingGeoTypeReverseGeocodeResponse
	 */
	public function ReverseGeocode(BingGeoTypeReverseGeocode $_BingGeoTypeReverseGeocode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReverseGeocode(array('request'=>$_BingGeoTypeReverseGeocode->getRequest())));
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
	 * @return BingGeoTypeReverseGeocodeResponse
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