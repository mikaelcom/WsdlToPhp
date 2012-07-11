<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyCommodityChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyCommodityChartCustomResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyCommodityChartCustomResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyCommodityChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeHistoricalChart
	 */
	public $GetHistoricalEnergyCommodityChartCustomResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeHistoricalChart GetHistoricalEnergyCommodityChartCustomResult
	 * @return XiEnergyTypeGetHistoricalEnergyCommodityChartCustomResponse
	 */
	public function __construct($_GetHistoricalEnergyCommodityChartCustomResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyCommodityChartCustomResult'=>$_GetHistoricalEnergyCommodityChartCustomResult));
	}
	/**
	 * Set GetHistoricalEnergyCommodityChartCustomResult
	 * @param HistoricalChart GetHistoricalEnergyCommodityChartCustomResult
	 * @return HistoricalChart
	 */
	public function setGetHistoricalEnergyCommodityChartCustomResult($_GetHistoricalEnergyCommodityChartCustomResult)
	{
		return ($this->GetHistoricalEnergyCommodityChartCustomResult = $_GetHistoricalEnergyCommodityChartCustomResult);
	}
	/**
	 * Get GetHistoricalEnergyCommodityChartCustomResult
	 * @return XiEnergyTypeHistoricalChart
	 */
	public function getGetHistoricalEnergyCommodityChartCustomResult()
	{
		return $this->GetHistoricalEnergyCommodityChartCustomResult;
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