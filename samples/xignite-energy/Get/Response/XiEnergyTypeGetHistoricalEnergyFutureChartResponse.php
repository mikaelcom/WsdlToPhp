<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyFutureChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyFutureChartResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyFutureChartResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyFutureChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeHistoricalChart
	 */
	public $GetHistoricalEnergyFutureChartResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeHistoricalChart GetHistoricalEnergyFutureChartResult
	 * @return XiEnergyTypeGetHistoricalEnergyFutureChartResponse
	 */
	public function __construct($_GetHistoricalEnergyFutureChartResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyFutureChartResult'=>$_GetHistoricalEnergyFutureChartResult));
	}
	/**
	 * Set GetHistoricalEnergyFutureChartResult
	 * @param HistoricalChart GetHistoricalEnergyFutureChartResult
	 * @return HistoricalChart
	 */
	public function setGetHistoricalEnergyFutureChartResult($_GetHistoricalEnergyFutureChartResult)
	{
		return ($this->GetHistoricalEnergyFutureChartResult = $_GetHistoricalEnergyFutureChartResult);
	}
	/**
	 * Get GetHistoricalEnergyFutureChartResult
	 * @return XiEnergyTypeHistoricalChart
	 */
	public function getGetHistoricalEnergyFutureChartResult()
	{
		return $this->GetHistoricalEnergyFutureChartResult;
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