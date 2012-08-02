<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudePagingMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudePagingMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudePagingMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudePagingMetricResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudePagingMetricResult
	 */
	public $GetStoresByLongitudeLatitudePagingMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudePagingMetricResult GetStoresByLongitudeLatitudePagingMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudePagingMetricResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudePagingMetricResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudePagingMetricResult'=>$_GetStoresByLongitudeLatitudePagingMetricResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudePagingMetricResult
	 * @param GetStoresByLongitudeLatitudePagingMetricResult GetStoresByLongitudeLatitudePagingMetricResult
	 * @return GetStoresByLongitudeLatitudePagingMetricResult
	 */
	public function setGetStoresByLongitudeLatitudePagingMetricResult($_GetStoresByLongitudeLatitudePagingMetricResult)
	{
		return ($this->GetStoresByLongitudeLatitudePagingMetricResult = $_GetStoresByLongitudeLatitudePagingMetricResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudePagingMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudePagingMetricResult
	 */
	public function getGetStoresByLongitudeLatitudePagingMetricResult()
	{
		return $this->GetStoresByLongitudeLatitudePagingMetricResult;
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