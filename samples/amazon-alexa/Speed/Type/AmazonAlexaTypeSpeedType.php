<?php
/**
 * Class file for AmazonAlexaTypeSpeedType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeSpeedType
 * @date 10/07/2012
 */
class AmazonAlexaTypeSpeedType extends AmazonAlexaWsdlClass
{
	/**
	 * The MedianLoadTime
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $MedianLoadTime;
	/**
	 * The Percentile
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $Percentile;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeGenericDataType MedianLoadTime
	 * @param AmazonAlexaTypeGenericDataType Percentile
	 * @return AmazonAlexaTypeSpeedType
	 */
	public function __construct($_MedianLoadTime = null,$_Percentile = null)
	{
		parent::__construct(array('MedianLoadTime'=>$_MedianLoadTime,'Percentile'=>$_Percentile));
	}
	/**
	 * Set MedianLoadTime
	 * @param GenericDataType MedianLoadTime
	 * @return GenericDataType
	 */
	public function setMedianLoadTime($_MedianLoadTime)
	{
		return ($this->MedianLoadTime = $_MedianLoadTime);
	}
	/**
	 * Get MedianLoadTime
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getMedianLoadTime()
	{
		return $this->MedianLoadTime;
	}
	/**
	 * Set Percentile
	 * @param GenericDataType Percentile
	 * @return GenericDataType
	 */
	public function setPercentile($_Percentile)
	{
		return ($this->Percentile = $_Percentile);
	}
	/**
	 * Get Percentile
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getPercentile()
	{
		return $this->Percentile;
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