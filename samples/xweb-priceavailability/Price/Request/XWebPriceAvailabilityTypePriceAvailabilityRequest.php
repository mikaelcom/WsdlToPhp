<?php
/**
 * Class file for XWebPriceAvailabilityTypePriceAvailabilityRequest
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypePriceAvailabilityRequest
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypePriceAvailabilityRequest extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * The RequestPriceAvailability
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebPriceAvailabilityTypeRequestPriceAvailabilityType
	 */
	public $RequestPriceAvailability;
	/**
	 * Constructor
	 * @param XWebPriceAvailabilityTypeRequestPriceAvailabilityType RequestPriceAvailability
	 * @return XWebPriceAvailabilityTypePriceAvailabilityRequest
	 */
	public function __construct($_RequestPriceAvailability)
	{
		parent::__construct(array('RequestPriceAvailability'=>$_RequestPriceAvailability));
	}
	/**
	 * Set RequestPriceAvailability
	 * @param RequestPriceAvailabilityType RequestPriceAvailability
	 * @return RequestPriceAvailabilityType
	 */
	public function setRequestPriceAvailability($_RequestPriceAvailability)
	{
		return ($this->RequestPriceAvailability = $_RequestPriceAvailability);
	}
	/**
	 * Get RequestPriceAvailability
	 * @return XWebPriceAvailabilityTypeRequestPriceAvailabilityType
	 */
	public function getRequestPriceAvailability()
	{
		return $this->RequestPriceAvailability;
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