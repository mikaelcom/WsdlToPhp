<?php
/**
 * Class file for SOGeoCoderTypeGetGeoLocationResponse
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetGeoLocationResponse
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetGeoLocationResponse extends SOGeoCoderWsdlClass
{
	/**
	 * The GetGeoLocationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeLocation
	 */
	public $GetGeoLocationResult;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeLocation GetGeoLocationResult
	 * @return SOGeoCoderTypeGetGeoLocationResponse
	 */
	public function __construct($_GetGeoLocationResult = null)
	{
		parent::__construct(array('GetGeoLocationResult'=>$_GetGeoLocationResult));
	}
	/**
	 * Set GetGeoLocationResult
	 * @param Location GetGeoLocationResult
	 * @return Location
	 */
	public function setGetGeoLocationResult($_GetGeoLocationResult)
	{
		return ($this->GetGeoLocationResult = $_GetGeoLocationResult);
	}
	/**
	 * Get GetGeoLocationResult
	 * @return SOGeoCoderTypeLocation
	 */
	public function getGetGeoLocationResult()
	{
		return $this->GetGeoLocationResult;
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