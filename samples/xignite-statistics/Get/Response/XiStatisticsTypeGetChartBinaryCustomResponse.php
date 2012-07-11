<?php
/**
 * Class file for XiStatisticsTypeGetChartBinaryCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetChartBinaryCustomResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetChartBinaryCustomResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetChartBinaryCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeChartBinary
	 */
	public $GetChartBinaryCustomResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeChartBinary GetChartBinaryCustomResult
	 * @return XiStatisticsTypeGetChartBinaryCustomResponse
	 */
	public function __construct($_GetChartBinaryCustomResult = null)
	{
		parent::__construct(array('GetChartBinaryCustomResult'=>$_GetChartBinaryCustomResult));
	}
	/**
	 * Set GetChartBinaryCustomResult
	 * @param ChartBinary GetChartBinaryCustomResult
	 * @return ChartBinary
	 */
	public function setGetChartBinaryCustomResult($_GetChartBinaryCustomResult)
	{
		return ($this->GetChartBinaryCustomResult = $_GetChartBinaryCustomResult);
	}
	/**
	 * Get GetChartBinaryCustomResult
	 * @return XiStatisticsTypeChartBinary
	 */
	public function getGetChartBinaryCustomResult()
	{
		return $this->GetChartBinaryCustomResult;
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