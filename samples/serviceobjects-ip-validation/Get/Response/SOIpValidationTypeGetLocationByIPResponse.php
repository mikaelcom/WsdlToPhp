<?php
/**
 * Class file for SOIpValidationTypeGetLocationByIPResponse
 * @date 08/07/2012
 */
/**
 * Class SOIpValidationTypeGetLocationByIPResponse
 * @date 08/07/2012
 */
class SOIpValidationTypeGetLocationByIPResponse extends SOIpValidationWsdlClass
{
	/**
	 * The GetLocationByIPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOIpValidationTypeLocation
	 */
	public $GetLocationByIPResult;
	/**
	 * Constructor
	 * @param SOIpValidationTypeLocation GetLocationByIPResult
	 * @return SOIpValidationTypeGetLocationByIPResponse
	 */
	public function __construct($_GetLocationByIPResult = null)
	{
		parent::__construct(array('GetLocationByIPResult'=>$_GetLocationByIPResult));
	}
	/**
	 * Set GetLocationByIPResult
	 * @param Location GetLocationByIPResult
	 * @return Location
	 */
	public function setGetLocationByIPResult($_GetLocationByIPResult)
	{
		return ($this->GetLocationByIPResult = $_GetLocationByIPResult);
	}
	/**
	 * Get GetLocationByIPResult
	 * @return SOIpValidationTypeLocation
	 */
	public function getGetLocationByIPResult()
	{
		return $this->GetLocationByIPResult;
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