<?php
/**
 * Class file for SOIpValidationTypeGetCountryByIPResponse
 * @date 08/07/2012
 */
/**
 * Class SOIpValidationTypeGetCountryByIPResponse
 * @date 08/07/2012
 */
class SOIpValidationTypeGetCountryByIPResponse extends SOIpValidationWsdlClass
{
	/**
	 * The GetCountryByIPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOIpValidationTypeCountryLocation
	 */
	public $GetCountryByIPResult;
	/**
	 * Constructor
	 * @param SOIpValidationTypeCountryLocation GetCountryByIPResult
	 * @return SOIpValidationTypeGetCountryByIPResponse
	 */
	public function __construct($_GetCountryByIPResult = null)
	{
		parent::__construct(array('GetCountryByIPResult'=>$_GetCountryByIPResult));
	}
	/**
	 * Set GetCountryByIPResult
	 * @param CountryLocation GetCountryByIPResult
	 * @return CountryLocation
	 */
	public function setGetCountryByIPResult($_GetCountryByIPResult)
	{
		return ($this->GetCountryByIPResult = $_GetCountryByIPResult);
	}
	/**
	 * Get GetCountryByIPResult
	 * @return SOIpValidationTypeCountryLocation
	 */
	public function getGetCountryByIPResult()
	{
		return $this->GetCountryByIPResult;
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