<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodeDistanceMerchantMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodeDistanceMerchantMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodeDistanceMerchantMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodeDistanceMerchantMetricResult
	 * @var LifePicsTypeGetStoresByPostalCodeDistanceMerchantMetricResult
	 */
	public $GetStoresByPostalCodeDistanceMerchantMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodeDistanceMerchantMetricResult GetStoresByPostalCodeDistanceMerchantMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantMetricResponse
	 */
	public function __construct($_GetStoresByPostalCodeDistanceMerchantMetricResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodeDistanceMerchantMetricResult'=>$_GetStoresByPostalCodeDistanceMerchantMetricResult));
	}
	/**
	 * Set GetStoresByPostalCodeDistanceMerchantMetricResult
	 * @param GetStoresByPostalCodeDistanceMerchantMetricResult GetStoresByPostalCodeDistanceMerchantMetricResult
	 * @return GetStoresByPostalCodeDistanceMerchantMetricResult
	 */
	public function setGetStoresByPostalCodeDistanceMerchantMetricResult($_GetStoresByPostalCodeDistanceMerchantMetricResult)
	{
		return ($this->GetStoresByPostalCodeDistanceMerchantMetricResult = $_GetStoresByPostalCodeDistanceMerchantMetricResult);
	}
	/**
	 * Get GetStoresByPostalCodeDistanceMerchantMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodeDistanceMerchantMetricResult
	 */
	public function getGetStoresByPostalCodeDistanceMerchantMetricResult()
	{
		return $this->GetStoresByPostalCodeDistanceMerchantMetricResult;
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