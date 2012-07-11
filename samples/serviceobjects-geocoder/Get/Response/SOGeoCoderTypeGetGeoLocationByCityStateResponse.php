<?php
/**
 * Class file for SOGeoCoderTypeGetGeoLocationByCityStateResponse
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetGeoLocationByCityStateResponse
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetGeoLocationByCityStateResponse extends SOGeoCoderWsdlClass
{
	/**
	 * The GetGeoLocationByCityStateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeLocation
	 */
	public $GetGeoLocationByCityStateResult;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeLocation GetGeoLocationByCityStateResult
	 * @return SOGeoCoderTypeGetGeoLocationByCityStateResponse
	 */
	public function __construct($_GetGeoLocationByCityStateResult = null)
	{
		parent::__construct(array('GetGeoLocationByCityStateResult'=>$_GetGeoLocationByCityStateResult));
	}
	/**
	 * Set GetGeoLocationByCityStateResult
	 * @param Location GetGeoLocationByCityStateResult
	 * @return Location
	 */
	public function setGetGeoLocationByCityStateResult($_GetGeoLocationByCityStateResult)
	{
		return ($this->GetGeoLocationByCityStateResult = $_GetGeoLocationByCityStateResult);
	}
	/**
	 * Get GetGeoLocationByCityStateResult
	 * @return SOGeoCoderTypeLocation
	 */
	public function getGetGeoLocationByCityStateResult()
	{
		return $this->GetGeoLocationByCityStateResult;
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