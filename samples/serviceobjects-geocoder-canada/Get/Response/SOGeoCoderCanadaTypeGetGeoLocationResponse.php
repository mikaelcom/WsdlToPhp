<?php
/**
 * Class file for SOGeoCoderCanadaTypeGetGeoLocationResponse
 * @date 06/07/2012
 */
/**
 * Class SOGeoCoderCanadaTypeGetGeoLocationResponse
 * @date 06/07/2012
 */
class SOGeoCoderCanadaTypeGetGeoLocationResponse extends SOGeoCoderCanadaWsdlClass
{
	/**
	 * The GetGeoLocationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderCanadaTypeLocation
	 */
	public $GetGeoLocationResult;
	/**
	 * Constructor
	 * @param SOGeoCoderCanadaTypeLocation GetGeoLocationResult
	 * @return SOGeoCoderCanadaTypeGetGeoLocationResponse
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
	 * @return SOGeoCoderCanadaTypeLocation
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