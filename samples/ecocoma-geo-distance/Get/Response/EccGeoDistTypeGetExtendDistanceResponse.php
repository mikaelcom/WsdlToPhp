<?php
/**
 * Class file for EccGeoDistTypeGetExtendDistanceResponse
 * @date 03/07/2012
 */
/**
 * Class EccGeoDistTypeGetExtendDistanceResponse
 * @date 03/07/2012
 */
class EccGeoDistTypeGetExtendDistanceResponse extends EccGeoDistWsdlClass
{
	/**
	 * The GetExtendDistanceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccGeoDistTypeDistance
	 */
	public $GetExtendDistanceResult;
	/**
	 * Constructor
	 * @param EccGeoDistTypeDistance GetExtendDistanceResult
	 * @return EccGeoDistTypeGetExtendDistanceResponse
	 */
	public function __construct($_GetExtendDistanceResult = null)
	{
		parent::__construct(array('GetExtendDistanceResult'=>$_GetExtendDistanceResult));
	}
	/**
	 * Set GetExtendDistanceResult
	 * @param Distance GetExtendDistanceResult
	 * @return Distance
	 */
	public function setGetExtendDistanceResult($_GetExtendDistanceResult)
	{
		return ($this->GetExtendDistanceResult = $_GetExtendDistanceResult);
	}
	/**
	 * Get GetExtendDistanceResult
	 * @return EccGeoDistTypeDistance
	 */
	public function getGetExtendDistanceResult()
	{
		return $this->GetExtendDistanceResult;
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