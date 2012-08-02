<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult
	 */
	public $GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult'=>$_GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult
	 * @param GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult
	 * @return GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult
	 */
	public function setGetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult($_GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult)
	{
		return ($this->GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult = $_GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult
	 */
	public function getGetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult()
	{
		return $this->GetStoresByLongitudeLatitudeDistanceMerchantPagingMetricResult;
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