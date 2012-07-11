<?php
/**
 * Class file for SOGeoCoderTypeGetGeoLocationWorldwideResponse
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetGeoLocationWorldwideResponse
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetGeoLocationWorldwideResponse extends SOGeoCoderWsdlClass
{
	/**
	 * The GetGeoLocationWorldwideResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeArrayOfGeocodeCityWorldwideInfo
	 */
	public $GetGeoLocationWorldwideResult;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeArrayOfGeocodeCityWorldwideInfo GetGeoLocationWorldwideResult
	 * @return SOGeoCoderTypeGetGeoLocationWorldwideResponse
	 */
	public function __construct($_GetGeoLocationWorldwideResult = null)
	{
		parent::__construct(array('GetGeoLocationWorldwideResult'=>new SOGeoCoderTypeArrayOfGeocodeCityWorldwideInfo($_GetGeoLocationWorldwideResult)));
	}
	/**
	 * Set GetGeoLocationWorldwideResult
	 * @param ArrayOfGeocodeCityWorldwideInfo GetGeoLocationWorldwideResult
	 * @return ArrayOfGeocodeCityWorldwideInfo
	 */
	public function setGetGeoLocationWorldwideResult($_GetGeoLocationWorldwideResult)
	{
		return ($this->GetGeoLocationWorldwideResult = $_GetGeoLocationWorldwideResult);
	}
	/**
	 * Get GetGeoLocationWorldwideResult
	 * @return SOGeoCoderTypeArrayOfGeocodeCityWorldwideInfo
	 */
	public function getGetGeoLocationWorldwideResult()
	{
		return $this->GetGeoLocationWorldwideResult;
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