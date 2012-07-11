<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinaryResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyFutureChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeChartBinary
	 */
	public $GetHistoricalEnergyFutureChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeChartBinary GetHistoricalEnergyFutureChartCustomBinaryResult
	 * @return XiEnergyTypeGetHistoricalEnergyFutureChartCustomBinaryResponse
	 */
	public function __construct($_GetHistoricalEnergyFutureChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyFutureChartCustomBinaryResult'=>$_GetHistoricalEnergyFutureChartCustomBinaryResult));
	}
	/**
	 * Set GetHistoricalEnergyFutureChartCustomBinaryResult
	 * @param ChartBinary GetHistoricalEnergyFutureChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetHistoricalEnergyFutureChartCustomBinaryResult($_GetHistoricalEnergyFutureChartCustomBinaryResult)
	{
		return ($this->GetHistoricalEnergyFutureChartCustomBinaryResult = $_GetHistoricalEnergyFutureChartCustomBinaryResult);
	}
	/**
	 * Get GetHistoricalEnergyFutureChartCustomBinaryResult
	 * @return XiEnergyTypeChartBinary
	 */
	public function getGetHistoricalEnergyFutureChartCustomBinaryResult()
	{
		return $this->GetHistoricalEnergyFutureChartCustomBinaryResult;
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