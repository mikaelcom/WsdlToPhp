<?php
/**
 * Class file for SOGeoCoderTypeGetGeoLocationByZipPlusFourResponse
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetGeoLocationByZipPlusFourResponse
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetGeoLocationByZipPlusFourResponse extends SOGeoCoderWsdlClass
{
	/**
	 * The GetGeoLocationByZipPlusFourResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeLocation
	 */
	public $GetGeoLocationByZipPlusFourResult;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeLocation GetGeoLocationByZipPlusFourResult
	 * @return SOGeoCoderTypeGetGeoLocationByZipPlusFourResponse
	 */
	public function __construct($_GetGeoLocationByZipPlusFourResult = null)
	{
		parent::__construct(array('GetGeoLocationByZipPlusFourResult'=>$_GetGeoLocationByZipPlusFourResult));
	}
	/**
	 * Set GetGeoLocationByZipPlusFourResult
	 * @param Location GetGeoLocationByZipPlusFourResult
	 * @return Location
	 */
	public function setGetGeoLocationByZipPlusFourResult($_GetGeoLocationByZipPlusFourResult)
	{
		return ($this->GetGeoLocationByZipPlusFourResult = $_GetGeoLocationByZipPlusFourResult);
	}
	/**
	 * Get GetGeoLocationByZipPlusFourResult
	 * @return SOGeoCoderTypeLocation
	 */
	public function getGetGeoLocationByZipPlusFourResult()
	{
		return $this->GetGeoLocationByZipPlusFourResult;
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