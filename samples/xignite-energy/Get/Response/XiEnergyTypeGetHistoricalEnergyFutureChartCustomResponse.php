<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyFutureChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyFutureChartCustomResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyFutureChartCustomResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyFutureChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeHistoricalChart
	 */
	public $GetHistoricalEnergyFutureChartCustomResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeHistoricalChart GetHistoricalEnergyFutureChartCustomResult
	 * @return XiEnergyTypeGetHistoricalEnergyFutureChartCustomResponse
	 */
	public function __construct($_GetHistoricalEnergyFutureChartCustomResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyFutureChartCustomResult'=>$_GetHistoricalEnergyFutureChartCustomResult));
	}
	/**
	 * Set GetHistoricalEnergyFutureChartCustomResult
	 * @param HistoricalChart GetHistoricalEnergyFutureChartCustomResult
	 * @return HistoricalChart
	 */
	public function setGetHistoricalEnergyFutureChartCustomResult($_GetHistoricalEnergyFutureChartCustomResult)
	{
		return ($this->GetHistoricalEnergyFutureChartCustomResult = $_GetHistoricalEnergyFutureChartCustomResult);
	}
	/**
	 * Get GetHistoricalEnergyFutureChartCustomResult
	 * @return XiEnergyTypeHistoricalChart
	 */
	public function getGetHistoricalEnergyFutureChartCustomResult()
	{
		return $this->GetHistoricalEnergyFutureChartCustomResult;
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