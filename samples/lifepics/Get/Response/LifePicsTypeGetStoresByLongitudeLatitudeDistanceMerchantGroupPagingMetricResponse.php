<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult
	 */
	public $GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult'=>$_GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult
	 * @param GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult
	 * @return GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult
	 */
	public function setGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult($_GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult)
	{
		return ($this->GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult = $_GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult
	 */
	public function getGetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult()
	{
		return $this->GetStoresByLongitudeLatitudeDistanceMerchantGroupPagingMetricResult;
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