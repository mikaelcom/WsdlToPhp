<?php
/**
 * Class file for XiStatisticsTypeGetChartBinaryPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetChartBinaryPresetResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetChartBinaryPresetResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetChartBinaryPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeChartBinary
	 */
	public $GetChartBinaryPresetResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeChartBinary GetChartBinaryPresetResult
	 * @return XiStatisticsTypeGetChartBinaryPresetResponse
	 */
	public function __construct($_GetChartBinaryPresetResult = null)
	{
		parent::__construct(array('GetChartBinaryPresetResult'=>$_GetChartBinaryPresetResult));
	}
	/**
	 * Set GetChartBinaryPresetResult
	 * @param ChartBinary GetChartBinaryPresetResult
	 * @return ChartBinary
	 */
	public function setGetChartBinaryPresetResult($_GetChartBinaryPresetResult)
	{
		return ($this->GetChartBinaryPresetResult = $_GetChartBinaryPresetResult);
	}
	/**
	 * Get GetChartBinaryPresetResult
	 * @return XiStatisticsTypeChartBinary
	 */
	public function getGetChartBinaryPresetResult()
	{
		return $this->GetChartBinaryPresetResult;
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