<?php
/**
 * Class file for SOGeoCoderTypeGetDistanceResponse
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetDistanceResponse
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetDistanceResponse extends SOGeoCoderWsdlClass
{
	/**
	 * The GetDistanceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeDistanceBetweenInfo
	 */
	public $GetDistanceResult;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeDistanceBetweenInfo GetDistanceResult
	 * @return SOGeoCoderTypeGetDistanceResponse
	 */
	public function __construct($_GetDistanceResult = null)
	{
		parent::__construct(array('GetDistanceResult'=>$_GetDistanceResult));
	}
	/**
	 * Set GetDistanceResult
	 * @param DistanceBetweenInfo GetDistanceResult
	 * @return DistanceBetweenInfo
	 */
	public function setGetDistanceResult($_GetDistanceResult)
	{
		return ($this->GetDistanceResult = $_GetDistanceResult);
	}
	/**
	 * Get GetDistanceResult
	 * @return SOGeoCoderTypeDistanceBetweenInfo
	 */
	public function getGetDistanceResult()
	{
		return $this->GetDistanceResult;
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