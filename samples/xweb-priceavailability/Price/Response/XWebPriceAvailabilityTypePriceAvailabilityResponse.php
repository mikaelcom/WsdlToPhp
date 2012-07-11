<?php
/**
 * Class file for XWebPriceAvailabilityTypePriceAvailabilityResponse
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypePriceAvailabilityResponse
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypePriceAvailabilityResponse extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * The ResponsePriceAvailability
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebPriceAvailabilityTypeResponsePriceAvailabilityType
	 */
	public $ResponsePriceAvailability;
	/**
	 * Constructor
	 * @param XWebPriceAvailabilityTypeResponsePriceAvailabilityType ResponsePriceAvailability
	 * @return XWebPriceAvailabilityTypePriceAvailabilityResponse
	 */
	public function __construct($_ResponsePriceAvailability)
	{
		parent::__construct(array('ResponsePriceAvailability'=>$_ResponsePriceAvailability));
	}
	/**
	 * Set ResponsePriceAvailability
	 * @param ResponsePriceAvailabilityType ResponsePriceAvailability
	 * @return ResponsePriceAvailabilityType
	 */
	public function setResponsePriceAvailability($_ResponsePriceAvailability)
	{
		return ($this->ResponsePriceAvailability = $_ResponsePriceAvailability);
	}
	/**
	 * Get ResponsePriceAvailability
	 * @return XWebPriceAvailabilityTypeResponsePriceAvailabilityType
	 */
	public function getResponsePriceAvailability()
	{
		return $this->ResponsePriceAvailability;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>