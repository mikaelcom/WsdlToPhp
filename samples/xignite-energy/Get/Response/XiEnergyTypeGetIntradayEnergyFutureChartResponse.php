<?php
/**
 * Class file for XiEnergyTypeGetIntradayEnergyFutureChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetIntradayEnergyFutureChartResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetIntradayEnergyFutureChartResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetIntradayEnergyFutureChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeIntradayChart
	 */
	public $GetIntradayEnergyFutureChartResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeIntradayChart GetIntradayEnergyFutureChartResult
	 * @return XiEnergyTypeGetIntradayEnergyFutureChartResponse
	 */
	public function __construct($_GetIntradayEnergyFutureChartResult = null)
	{
		parent::__construct(array('GetIntradayEnergyFutureChartResult'=>$_GetIntradayEnergyFutureChartResult));
	}
	/**
	 * Set GetIntradayEnergyFutureChartResult
	 * @param IntradayChart GetIntradayEnergyFutureChartResult
	 * @return IntradayChart
	 */
	public function setGetIntradayEnergyFutureChartResult($_GetIntradayEnergyFutureChartResult)
	{
		return ($this->GetIntradayEnergyFutureChartResult = $_GetIntradayEnergyFutureChartResult);
	}
	/**
	 * Get GetIntradayEnergyFutureChartResult
	 * @return XiEnergyTypeIntradayChart
	 */
	public function getGetIntradayEnergyFutureChartResult()
	{
		return $this->GetIntradayEnergyFutureChartResult;
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