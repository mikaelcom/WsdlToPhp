<?php
/**
 * Class file for SOGeoCoderTypeGetDistanceToWaterByAddressResponse
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetDistanceToWaterByAddressResponse
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetDistanceToWaterByAddressResponse extends SOGeoCoderWsdlClass
{
	/**
	 * The GetDistanceToWaterByAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeDistanceToWaterInfo
	 */
	public $GetDistanceToWaterByAddressResult;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeDistanceToWaterInfo GetDistanceToWaterByAddressResult
	 * @return SOGeoCoderTypeGetDistanceToWaterByAddressResponse
	 */
	public function __construct($_GetDistanceToWaterByAddressResult = null)
	{
		parent::__construct(array('GetDistanceToWaterByAddressResult'=>$_GetDistanceToWaterByAddressResult));
	}
	/**
	 * Set GetDistanceToWaterByAddressResult
	 * @param DistanceToWaterInfo GetDistanceToWaterByAddressResult
	 * @return DistanceToWaterInfo
	 */
	public function setGetDistanceToWaterByAddressResult($_GetDistanceToWaterByAddressResult)
	{
		return ($this->GetDistanceToWaterByAddressResult = $_GetDistanceToWaterByAddressResult);
	}
	/**
	 * Get GetDistanceToWaterByAddressResult
	 * @return SOGeoCoderTypeDistanceToWaterInfo
	 */
	public function getGetDistanceToWaterByAddressResult()
	{
		return $this->GetDistanceToWaterByAddressResult;
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