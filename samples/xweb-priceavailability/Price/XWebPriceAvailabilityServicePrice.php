<?php
/**
 * Class file for XWebPriceAvailabilityServicePrice
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityServicePrice
 * @date 09/07/2012
 */
class XWebPriceAvailabilityServicePrice extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * Method to call PriceAvailability
	 * @uses XWebPriceAvailabilityWsdlClass::getSoapClient()
	 * @uses XWebPriceAvailabilityWsdlClass::setResult()
	 * @uses XWebPriceAvailabilityWsdlClass::getResult()
	 * @uses XWebPriceAvailabilityWsdlClass::saveLastError()
	 * @uses XWebPriceAvailabilityTypePriceAvailabilityRequest::getRequestPriceAvailability()
	 * @param XWebPriceAvailabilityTypePriceAvailabilityRequest PriceAvailabilityRequest
	 * @return XWebPriceAvailabilityTypePriceAvailabilityResponse
	 */
	public function PriceAvailability(XWebPriceAvailabilityTypePriceAvailabilityRequest $_XWebPriceAvailabilityTypePriceAvailabilityRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PriceAvailability(array('RequestPriceAvailability'=>$_XWebPriceAvailabilityTypePriceAvailabilityRequest->getRequestPriceAvailability())));
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
	 * @return XWebPriceAvailabilityTypePriceAvailabilityResponse
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