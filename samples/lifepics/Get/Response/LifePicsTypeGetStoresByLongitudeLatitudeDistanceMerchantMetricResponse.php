<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudeDistanceMerchantMetricResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantMetricResult
	 */
	public $GetStoresByLongitudeLatitudeDistanceMerchantMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantMetricResult GetStoresByLongitudeLatitudeDistanceMerchantMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantMetricResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudeDistanceMerchantMetricResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudeDistanceMerchantMetricResult'=>$_GetStoresByLongitudeLatitudeDistanceMerchantMetricResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudeDistanceMerchantMetricResult
	 * @param GetStoresByLongitudeLatitudeDistanceMerchantMetricResult GetStoresByLongitudeLatitudeDistanceMerchantMetricResult
	 * @return GetStoresByLongitudeLatitudeDistanceMerchantMetricResult
	 */
	public function setGetStoresByLongitudeLatitudeDistanceMerchantMetricResult($_GetStoresByLongitudeLatitudeDistanceMerchantMetricResult)
	{
		return ($this->GetStoresByLongitudeLatitudeDistanceMerchantMetricResult = $_GetStoresByLongitudeLatitudeDistanceMerchantMetricResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudeDistanceMerchantMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantMetricResult
	 */
	public function getGetStoresByLongitudeLatitudeDistanceMerchantMetricResult()
	{
		return $this->GetStoresByLongitudeLatitudeDistanceMerchantMetricResult;
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