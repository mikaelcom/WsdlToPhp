<?php
/**
 * Class file for XiEnergyTypeGetIntradayEnergyFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetIntradayEnergyFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetIntradayEnergyFutureChartCustomBinaryResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetIntradayEnergyFutureChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeChartBinary
	 */
	public $GetIntradayEnergyFutureChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeChartBinary GetIntradayEnergyFutureChartCustomBinaryResult
	 * @return XiEnergyTypeGetIntradayEnergyFutureChartCustomBinaryResponse
	 */
	public function __construct($_GetIntradayEnergyFutureChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetIntradayEnergyFutureChartCustomBinaryResult'=>$_GetIntradayEnergyFutureChartCustomBinaryResult));
	}
	/**
	 * Set GetIntradayEnergyFutureChartCustomBinaryResult
	 * @param ChartBinary GetIntradayEnergyFutureChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetIntradayEnergyFutureChartCustomBinaryResult($_GetIntradayEnergyFutureChartCustomBinaryResult)
	{
		return ($this->GetIntradayEnergyFutureChartCustomBinaryResult = $_GetIntradayEnergyFutureChartCustomBinaryResult);
	}
	/**
	 * Get GetIntradayEnergyFutureChartCustomBinaryResult
	 * @return XiEnergyTypeChartBinary
	 */
	public function getGetIntradayEnergyFutureChartCustomBinaryResult()
	{
		return $this->GetIntradayEnergyFutureChartCustomBinaryResult;
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