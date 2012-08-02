<?php
/**
 * Class file for LifePicsTypeGetStoresByPostalCodeMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByPostalCodeMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByPostalCodeMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByPostalCodeMetricResult
	 * @var LifePicsTypeGetStoresByPostalCodeMetricResult
	 */
	public $GetStoresByPostalCodeMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByPostalCodeMetricResult GetStoresByPostalCodeMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodeMetricResponse
	 */
	public function __construct($_GetStoresByPostalCodeMetricResult = null)
	{
		parent::__construct(array('GetStoresByPostalCodeMetricResult'=>$_GetStoresByPostalCodeMetricResult));
	}
	/**
	 * Set GetStoresByPostalCodeMetricResult
	 * @param GetStoresByPostalCodeMetricResult GetStoresByPostalCodeMetricResult
	 * @return GetStoresByPostalCodeMetricResult
	 */
	public function setGetStoresByPostalCodeMetricResult($_GetStoresByPostalCodeMetricResult)
	{
		return ($this->GetStoresByPostalCodeMetricResult = $_GetStoresByPostalCodeMetricResult);
	}
	/**
	 * Get GetStoresByPostalCodeMetricResult
	 * @return LifePicsTypeGetStoresByPostalCodeMetricResult
	 */
	public function getGetStoresByPostalCodeMetricResult()
	{
		return $this->GetStoresByPostalCodeMetricResult;
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