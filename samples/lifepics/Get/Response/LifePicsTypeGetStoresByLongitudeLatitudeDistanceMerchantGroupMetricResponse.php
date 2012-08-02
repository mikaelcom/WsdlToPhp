<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult
	 */
	public $GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult'=>$_GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult
	 * @param GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult
	 * @return GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult
	 */
	public function setGetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult($_GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult)
	{
		return ($this->GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult = $_GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult
	 */
	public function getGetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult()
	{
		return $this->GetStoresByLongitudeLatitudeDistanceMerchantGroupMetricResult;
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