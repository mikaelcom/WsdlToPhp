<?php
/**
 * Class file for LifePicsTypeGetStoresPagingGroupMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresPagingGroupMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresPagingGroupMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresPagingGroupMetricResult
	 * @var LifePicsTypeGetStoresPagingGroupMetricResult
	 */
	public $GetStoresPagingGroupMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresPagingGroupMetricResult GetStoresPagingGroupMetricResult
	 * @return LifePicsTypeGetStoresPagingGroupMetricResponse
	 */
	public function __construct($_GetStoresPagingGroupMetricResult = null)
	{
		parent::__construct(array('GetStoresPagingGroupMetricResult'=>$_GetStoresPagingGroupMetricResult));
	}
	/**
	 * Set GetStoresPagingGroupMetricResult
	 * @param GetStoresPagingGroupMetricResult GetStoresPagingGroupMetricResult
	 * @return GetStoresPagingGroupMetricResult
	 */
	public function setGetStoresPagingGroupMetricResult($_GetStoresPagingGroupMetricResult)
	{
		return ($this->GetStoresPagingGroupMetricResult = $_GetStoresPagingGroupMetricResult);
	}
	/**
	 * Get GetStoresPagingGroupMetricResult
	 * @return LifePicsTypeGetStoresPagingGroupMetricResult
	 */
	public function getGetStoresPagingGroupMetricResult()
	{
		return $this->GetStoresPagingGroupMetricResult;
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