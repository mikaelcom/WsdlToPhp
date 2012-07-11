<?php
/**
 * Class file for EccGeoDistTypeGetDistanceResponse
 * @date 03/07/2012
 */
/**
 * Class EccGeoDistTypeGetDistanceResponse
 * @date 03/07/2012
 */
class EccGeoDistTypeGetDistanceResponse extends EccGeoDistWsdlClass
{
	/**
	 * The GetDistanceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccGeoDistTypeDistance
	 */
	public $GetDistanceResult;
	/**
	 * Constructor
	 * @param EccGeoDistTypeDistance GetDistanceResult
	 * @return EccGeoDistTypeGetDistanceResponse
	 */
	public function __construct($_GetDistanceResult = null)
	{
		parent::__construct(array('GetDistanceResult'=>$_GetDistanceResult));
	}
	/**
	 * Set GetDistanceResult
	 * @param Distance GetDistanceResult
	 * @return Distance
	 */
	public function setGetDistanceResult($_GetDistanceResult)
	{
		return ($this->GetDistanceResult = $_GetDistanceResult);
	}
	/**
	 * Get GetDistanceResult
	 * @return EccGeoDistTypeDistance
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