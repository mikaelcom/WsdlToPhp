<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyCommodityChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyCommodityChartResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyCommodityChartResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyCommodityChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeHistoricalChart
	 */
	public $GetHistoricalEnergyCommodityChartResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeHistoricalChart GetHistoricalEnergyCommodityChartResult
	 * @return XiEnergyTypeGetHistoricalEnergyCommodityChartResponse
	 */
	public function __construct($_GetHistoricalEnergyCommodityChartResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyCommodityChartResult'=>$_GetHistoricalEnergyCommodityChartResult));
	}
	/**
	 * Set GetHistoricalEnergyCommodityChartResult
	 * @param HistoricalChart GetHistoricalEnergyCommodityChartResult
	 * @return HistoricalChart
	 */
	public function setGetHistoricalEnergyCommodityChartResult($_GetHistoricalEnergyCommodityChartResult)
	{
		return ($this->GetHistoricalEnergyCommodityChartResult = $_GetHistoricalEnergyCommodityChartResult);
	}
	/**
	 * Get GetHistoricalEnergyCommodityChartResult
	 * @return XiEnergyTypeHistoricalChart
	 */
	public function getGetHistoricalEnergyCommodityChartResult()
	{
		return $this->GetHistoricalEnergyCommodityChartResult;
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