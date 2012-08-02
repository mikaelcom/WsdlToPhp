<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodePagingMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodePagingMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodePagingMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodePagingMetricResult
	 * @var LifePicsTypeGetStoresByPostalCodePagingMetricResult
	 */
	public $GetStoresByPostalCodePagingMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodePagingMetricResult GetStoresByPostalCodePagingMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodePagingMetricResponse
	 */
	public function __construct($_GetStoresByPostalCodePagingMetricResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodePagingMetricResult'=>$_GetStoresByPostalCodePagingMetricResult));
	}
	/**
	 * Set GetStoresByPostalCodePagingMetricResult
	 * @param GetStoresByPostalCodePagingMetricResult GetStoresByPostalCodePagingMetricResult
	 * @return GetStoresByPostalCodePagingMetricResult
	 */
	public function setGetStoresByPostalCodePagingMetricResult($_GetStoresByPostalCodePagingMetricResult)
	{
		return ($this->GetStoresByPostalCodePagingMetricResult = $_GetStoresByPostalCodePagingMetricResult);
	}
	/**
	 * Get GetStoresByPostalCodePagingMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodePagingMetricResult
	 */
	public function getGetStoresByPostalCodePagingMetricResult()
	{
		return $this->GetStoresByPostalCodePagingMetricResult;
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