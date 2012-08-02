<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeMetricResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeMetricResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeMetricResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresByLongitudeLatitudeMetricResult
	 * @var LifePicsTypeGetStoresByLongitudeLatitudeMetricResult
	 */
	public $GetStoresByLongitudeLatitudeMetricResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresByLongitudeLatitudeMetricResult GetStoresByLongitudeLatitudeMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeMetricResponse
	 */
	public function __construct($_GetStoresByLongitudeLatitudeMetricResult = null)
	{
		parent::__construct(array('GetStoresByLongitudeLatitudeMetricResult'=>$_GetStoresByLongitudeLatitudeMetricResult));
	}
	/**
	 * Set GetStoresByLongitudeLatitudeMetricResult
	 * @param GetStoresByLongitudeLatitudeMetricResult GetStoresByLongitudeLatitudeMetricResult
	 * @return GetStoresByLongitudeLatitudeMetricResult
	 */
	public function setGetStoresByLongitudeLatitudeMetricResult($_GetStoresByLongitudeLatitudeMetricResult)
	{
		return ($this->GetStoresByLongitudeLatitudeMetricResult = $_GetStoresByLongitudeLatitudeMetricResult);
	}
	/**
	 * Get GetStoresByLongitudeLatitudeMetricResult
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeMetricResult
	 */
	public function getGetStoresByLongitudeLatitudeMetricResult()
	{
		return $this->GetStoresByLongitudeLatitudeMetricResult;
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