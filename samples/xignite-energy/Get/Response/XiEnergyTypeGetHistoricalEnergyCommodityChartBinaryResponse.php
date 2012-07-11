<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyCommodityChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyCommodityChartBinaryResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyCommodityChartBinaryResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyCommodityChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeChartBinary
	 */
	public $GetHistoricalEnergyCommodityChartBinaryResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeChartBinary GetHistoricalEnergyCommodityChartBinaryResult
	 * @return XiEnergyTypeGetHistoricalEnergyCommodityChartBinaryResponse
	 */
	public function __construct($_GetHistoricalEnergyCommodityChartBinaryResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyCommodityChartBinaryResult'=>$_GetHistoricalEnergyCommodityChartBinaryResult));
	}
	/**
	 * Set GetHistoricalEnergyCommodityChartBinaryResult
	 * @param ChartBinary GetHistoricalEnergyCommodityChartBinaryResult
	 * @return ChartBinary
	 */
	public function setGetHistoricalEnergyCommodityChartBinaryResult($_GetHistoricalEnergyCommodityChartBinaryResult)
	{
		return ($this->GetHistoricalEnergyCommodityChartBinaryResult = $_GetHistoricalEnergyCommodityChartBinaryResult);
	}
	/**
	 * Get GetHistoricalEnergyCommodityChartBinaryResult
	 * @return XiEnergyTypeChartBinary
	 */
	public function getGetHistoricalEnergyCommodityChartBinaryResult()
	{
		return $this->GetHistoricalEnergyCommodityChartBinaryResult;
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