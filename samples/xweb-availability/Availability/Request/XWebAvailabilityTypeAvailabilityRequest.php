<?php
/**
 * Class file for XWebAvailabilityTypeAvailabilityRequest
 * @date 09/07/2012
 */
/**
 * Class XWebAvailabilityTypeAvailabilityRequest
 * @date 09/07/2012
 */
class XWebAvailabilityTypeAvailabilityRequest extends XWebAvailabilityWsdlClass
{
	/**
	 * The RequestAvailability
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebAvailabilityTypeRequestAvailabilityType
	 */
	public $RequestAvailability;
	/**
	 * Constructor
	 * @param XWebAvailabilityTypeRequestAvailabilityType RequestAvailability
	 * @return XWebAvailabilityTypeAvailabilityRequest
	 */
	public function __construct($_RequestAvailability)
	{
		parent::__construct(array('RequestAvailability'=>$_RequestAvailability));
	}
	/**
	 * Set RequestAvailability
	 * @param RequestAvailabilityType RequestAvailability
	 * @return RequestAvailabilityType
	 */
	public function setRequestAvailability($_RequestAvailability)
	{
		return ($this->RequestAvailability = $_RequestAvailability);
	}
	/**
	 * Get RequestAvailability
	 * @return XWebAvailabilityTypeRequestAvailabilityType
	 */
	public function getRequestAvailability()
	{
		return $this->RequestAvailability;
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