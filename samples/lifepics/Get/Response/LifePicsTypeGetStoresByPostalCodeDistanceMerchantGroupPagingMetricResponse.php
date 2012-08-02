<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult
	 * @var LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult
	 */
	public $GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingMetricResponse
	 */
	public function __construct($_GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult'=>$_GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult));
	}
	/**
	 * Set GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult
	 * @param GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult
	 * @return GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult
	 */
	public function setGetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult($_GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult)
	{
		return ($this->GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult = $_GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult);
	}
	/**
	 * Get GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult
	 */
	public function getGetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult()
	{
		return $this->GetStoresByPostalCodeDistanceMerchantGroupPagingMetricResult;
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