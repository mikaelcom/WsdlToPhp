<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinaryResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyCommodityChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeChartBinary
	 */
	public $GetHistoricalEnergyCommodityChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeChartBinary GetHistoricalEnergyCommodityChartCustomBinaryResult
	 * @return XiEnergyTypeGetHistoricalEnergyCommodityChartCustomBinaryResponse
	 */
	public function __construct($_GetHistoricalEnergyCommodityChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyCommodityChartCustomBinaryResult'=>$_GetHistoricalEnergyCommodityChartCustomBinaryResult));
	}
	/**
	 * Set GetHistoricalEnergyCommodityChartCustomBinaryResult
	 * @param ChartBinary GetHistoricalEnergyCommodityChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetHistoricalEnergyCommodityChartCustomBinaryResult($_GetHistoricalEnergyCommodityChartCustomBinaryResult)
	{
		return ($this->GetHistoricalEnergyCommodityChartCustomBinaryResult = $_GetHistoricalEnergyCommodityChartCustomBinaryResult);
	}
	/**
	 * Get GetHistoricalEnergyCommodityChartCustomBinaryResult
	 * @return XiEnergyTypeChartBinary
	 */
	public function getGetHistoricalEnergyCommodityChartCustomBinaryResult()
	{
		return $this->GetHistoricalEnergyCommodityChartCustomBinaryResult;
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