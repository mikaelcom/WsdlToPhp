<?php
/**
 * Class file for XiStatisticsTypeGetChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetChartBinaryResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetChartBinaryResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeChartBinary
	 */
	public $GetChartBinaryResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeChartBinary GetChartBinaryResult
	 * @return XiStatisticsTypeGetChartBinaryResponse
	 */
	public function __construct($_GetChartBinaryResult = null)
	{
		parent::__construct(array('GetChartBinaryResult'=>$_GetChartBinaryResult));
	}
	/**
	 * Set GetChartBinaryResult
	 * @param ChartBinary GetChartBinaryResult
	 * @return ChartBinary
	 */
	public function setGetChartBinaryResult($_GetChartBinaryResult)
	{
		return ($this->GetChartBinaryResult = $_GetChartBinaryResult);
	}
	/**
	 * Get GetChartBinaryResult
	 * @return XiStatisticsTypeChartBinary
	 */
	public function getGetChartBinaryResult()
	{
		return $this->GetChartBinaryResult;
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