<?php
/**
 * Class file for SOGeoCoderTypeGetGeoLocationByZipPlusTwoResponse
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetGeoLocationByZipPlusTwoResponse
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetGeoLocationByZipPlusTwoResponse extends SOGeoCoderWsdlClass
{
	/**
	 * The GetGeoLocationByZipPlusTwoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeLocation
	 */
	public $GetGeoLocationByZipPlusTwoResult;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeLocation GetGeoLocationByZipPlusTwoResult
	 * @return SOGeoCoderTypeGetGeoLocationByZipPlusTwoResponse
	 */
	public function __construct($_GetGeoLocationByZipPlusTwoResult = null)
	{
		parent::__construct(array('GetGeoLocationByZipPlusTwoResult'=>$_GetGeoLocationByZipPlusTwoResult));
	}
	/**
	 * Set GetGeoLocationByZipPlusTwoResult
	 * @param Location GetGeoLocationByZipPlusTwoResult
	 * @return Location
	 */
	public function setGetGeoLocationByZipPlusTwoResult($_GetGeoLocationByZipPlusTwoResult)
	{
		return ($this->GetGeoLocationByZipPlusTwoResult = $_GetGeoLocationByZipPlusTwoResult);
	}
	/**
	 * Get GetGeoLocationByZipPlusTwoResult
	 * @return SOGeoCoderTypeLocation
	 */
	public function getGetGeoLocationByZipPlusTwoResult()
	{
		return $this->GetGeoLocationByZipPlusTwoResult;
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