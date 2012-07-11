<?php
/**
 * Class file for XWebAvailabilityTypeAvailabilityResponse
 * @date 09/07/2012
 */
/**
 * Class XWebAvailabilityTypeAvailabilityResponse
 * @date 09/07/2012
 */
class XWebAvailabilityTypeAvailabilityResponse extends XWebAvailabilityWsdlClass
{
	/**
	 * The ResponseAvailability
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebAvailabilityTypeResponseAvailabilityType
	 */
	public $ResponseAvailability;
	/**
	 * Constructor
	 * @param XWebAvailabilityTypeResponseAvailabilityType ResponseAvailability
	 * @return XWebAvailabilityTypeAvailabilityResponse
	 */
	public function __construct($_ResponseAvailability)
	{
		parent::__construct(array('ResponseAvailability'=>$_ResponseAvailability));
	}
	/**
	 * Set ResponseAvailability
	 * @param ResponseAvailabilityType ResponseAvailability
	 * @return ResponseAvailabilityType
	 */
	public function setResponseAvailability($_ResponseAvailability)
	{
		return ($this->ResponseAvailability = $_ResponseAvailability);
	}
	/**
	 * Get ResponseAvailability
	 * @return XWebAvailabilityTypeResponseAvailabilityType
	 */
	public function getResponseAvailability()
	{
		return $this->ResponseAvailability;
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