<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodeDistanceMerchantGroupMetricResult
	 * @var LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupMetricResult
	 */
	public $GetStoresByPostalCodeDistanceMerchantGroupMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupMetricResult GetStoresByPostalCodeDistanceMerchantGroupMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupMetricResponse
	 */
	public function __construct($_GetStoresByPostalCodeDistanceMerchantGroupMetricResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodeDistanceMerchantGroupMetricResult'=>$_GetStoresByPostalCodeDistanceMerchantGroupMetricResult));
	}
	/**
	 * Set GetStoresByPostalCodeDistanceMerchantGroupMetricResult
	 * @param GetStoresByPostalCodeDistanceMerchantGroupMetricResult GetStoresByPostalCodeDistanceMerchantGroupMetricResult
	 * @return GetStoresByPostalCodeDistanceMerchantGroupMetricResult
	 */
	public function setGetStoresByPostalCodeDistanceMerchantGroupMetricResult($_GetStoresByPostalCodeDistanceMerchantGroupMetricResult)
	{
		return ($this->GetStoresByPostalCodeDistanceMerchantGroupMetricResult = $_GetStoresByPostalCodeDistanceMerchantGroupMetricResult);
	}
	/**
	 * Get GetStoresByPostalCodeDistanceMerchantGroupMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantGroupMetricResult
	 */
	public function getGetStoresByPostalCodeDistanceMerchantGroupMetricResult()
	{
		return $this->GetStoresByPostalCodeDistanceMerchantGroupMetricResult;
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