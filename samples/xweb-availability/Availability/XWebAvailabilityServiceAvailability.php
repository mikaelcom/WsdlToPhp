<?php
/**
 * Class file for XWebAvailabilityServiceAvailability
 * @date 09/07/2012
 */
/**
 * Class XWebAvailabilityServiceAvailability
 * @date 09/07/2012
 */
class XWebAvailabilityServiceAvailability extends XWebAvailabilityWsdlClass
{
	/**
	 * Method to call Availability
	 * @uses XWebAvailabilityWsdlClass::getSoapClient()
	 * @uses XWebAvailabilityWsdlClass::setResult()
	 * @uses XWebAvailabilityWsdlClass::getResult()
	 * @uses XWebAvailabilityWsdlClass::saveLastError()
	 * @uses XWebAvailabilityTypeAvailabilityRequest::getRequestAvailability()
	 * @param XWebAvailabilityTypeAvailabilityRequest AvailabilityRequest
	 * @return XWebAvailabilityTypeAvailabilityResponse
	 */
	public function Availability(XWebAvailabilityTypeAvailabilityRequest $_XWebAvailabilityTypeAvailabilityRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Availability(array('RequestAvailability'=>$_XWebAvailabilityTypeAvailabilityRequest->getRequestAvailability())));
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
	 * @return XWebAvailabilityTypeAvailabilityResponse
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