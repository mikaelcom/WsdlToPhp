<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodeDistanceMerchantPagingMetricResult
	 * @var LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingMetricResult
	 */
	public $GetStoresByPostalCodeDistanceMerchantPagingMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingMetricResult GetStoresByPostalCodeDistanceMerchantPagingMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingMetricResponse
	 */
	public function __construct($_GetStoresByPostalCodeDistanceMerchantPagingMetricResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodeDistanceMerchantPagingMetricResult'=>$_GetStoresByPostalCodeDistanceMerchantPagingMetricResult));
	}
	/**
	 * Set GetStoresByPostalCodeDistanceMerchantPagingMetricResult
	 * @param GetStoresByPostalCodeDistanceMerchantPagingMetricResult GetStoresByPostalCodeDistanceMerchantPagingMetricResult
	 * @return GetStoresByPostalCodeDistanceMerchantPagingMetricResult
	 */
	public function setGetStoresByPostalCodeDistanceMerchantPagingMetricResult($_GetStoresByPostalCodeDistanceMerchantPagingMetricResult)
	{
		return ($this->GetStoresByPostalCodeDistanceMerchantPagingMetricResult = $_GetStoresByPostalCodeDistanceMerchantPagingMetricResult);
	}
	/**
	 * Get GetStoresByPostalCodeDistanceMerchantPagingMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantPagingMetricResult
	 */
	public function getGetStoresByPostalCodeDistanceMerchantPagingMetricResult()
	{
		return $this->GetStoresByPostalCodeDistanceMerchantPagingMetricResult;
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