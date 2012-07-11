<?php
/**
 * Class file for XiEnergyTypeGetIntradayEnergyFutureChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetIntradayEnergyFutureChartBinaryResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetIntradayEnergyFutureChartBinaryResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetIntradayEnergyFutureChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeChartBinary
	 */
	public $GetIntradayEnergyFutureChartBinaryResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeChartBinary GetIntradayEnergyFutureChartBinaryResult
	 * @return XiEnergyTypeGetIntradayEnergyFutureChartBinaryResponse
	 */
	public function __construct($_GetIntradayEnergyFutureChartBinaryResult = null)
	{
		parent::__construct(array('GetIntradayEnergyFutureChartBinaryResult'=>$_GetIntradayEnergyFutureChartBinaryResult));
	}
	/**
	 * Set GetIntradayEnergyFutureChartBinaryResult
	 * @param ChartBinary GetIntradayEnergyFutureChartBinaryResult
	 * @return ChartBinary
	 */
	public function setGetIntradayEnergyFutureChartBinaryResult($_GetIntradayEnergyFutureChartBinaryResult)
	{
		return ($this->GetIntradayEnergyFutureChartBinaryResult = $_GetIntradayEnergyFutureChartBinaryResult);
	}
	/**
	 * Get GetIntradayEnergyFutureChartBinaryResult
	 * @return XiEnergyTypeChartBinary
	 */
	public function getGetIntradayEnergyFutureChartBinaryResult()
	{
		return $this->GetIntradayEnergyFutureChartBinaryResult;
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