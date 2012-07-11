<?php
/**
 * Class file for XiEnergyTypeGetIntradayEnergyFutureChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetIntradayEnergyFutureChartCustomResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetIntradayEnergyFutureChartCustomResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetIntradayEnergyFutureChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeIntradayChart
	 */
	public $GetIntradayEnergyFutureChartCustomResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeIntradayChart GetIntradayEnergyFutureChartCustomResult
	 * @return XiEnergyTypeGetIntradayEnergyFutureChartCustomResponse
	 */
	public function __construct($_GetIntradayEnergyFutureChartCustomResult = null)
	{
		parent::__construct(array('GetIntradayEnergyFutureChartCustomResult'=>$_GetIntradayEnergyFutureChartCustomResult));
	}
	/**
	 * Set GetIntradayEnergyFutureChartCustomResult
	 * @param IntradayChart GetIntradayEnergyFutureChartCustomResult
	 * @return IntradayChart
	 */
	public function setGetIntradayEnergyFutureChartCustomResult($_GetIntradayEnergyFutureChartCustomResult)
	{
		return ($this->GetIntradayEnergyFutureChartCustomResult = $_GetIntradayEnergyFutureChartCustomResult);
	}
	/**
	 * Get GetIntradayEnergyFutureChartCustomResult
	 * @return XiEnergyTypeIntradayChart
	 */
	public function getGetIntradayEnergyFutureChartCustomResult()
	{
		return $this->GetIntradayEnergyFutureChartCustomResult;
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