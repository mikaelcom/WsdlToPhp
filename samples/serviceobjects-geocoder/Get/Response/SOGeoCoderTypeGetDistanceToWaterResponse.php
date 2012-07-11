<?php
/**
 * Class file for SOGeoCoderTypeGetDistanceToWaterResponse
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetDistanceToWaterResponse
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetDistanceToWaterResponse extends SOGeoCoderWsdlClass
{
	/**
	 * The GetDistanceToWaterResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeDistanceToWaterInfo
	 */
	public $GetDistanceToWaterResult;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeDistanceToWaterInfo GetDistanceToWaterResult
	 * @return SOGeoCoderTypeGetDistanceToWaterResponse
	 */
	public function __construct($_GetDistanceToWaterResult = null)
	{
		parent::__construct(array('GetDistanceToWaterResult'=>$_GetDistanceToWaterResult));
	}
	/**
	 * Set GetDistanceToWaterResult
	 * @param DistanceToWaterInfo GetDistanceToWaterResult
	 * @return DistanceToWaterInfo
	 */
	public function setGetDistanceToWaterResult($_GetDistanceToWaterResult)
	{
		return ($this->GetDistanceToWaterResult = $_GetDistanceToWaterResult);
	}
	/**
	 * Get GetDistanceToWaterResult
	 * @return SOGeoCoderTypeDistanceToWaterInfo
	 */
	public function getGetDistanceToWaterResult()
	{
		return $this->GetDistanceToWaterResult;
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