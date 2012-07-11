<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyFutureChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyFutureChartBinaryResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyFutureChartBinaryResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyFutureChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeChartBinary
	 */
	public $GetHistoricalEnergyFutureChartBinaryResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeChartBinary GetHistoricalEnergyFutureChartBinaryResult
	 * @return XiEnergyTypeGetHistoricalEnergyFutureChartBinaryResponse
	 */
	public function __construct($_GetHistoricalEnergyFutureChartBinaryResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyFutureChartBinaryResult'=>$_GetHistoricalEnergyFutureChartBinaryResult));
	}
	/**
	 * Set GetHistoricalEnergyFutureChartBinaryResult
	 * @param ChartBinary GetHistoricalEnergyFutureChartBinaryResult
	 * @return ChartBinary
	 */
	public function setGetHistoricalEnergyFutureChartBinaryResult($_GetHistoricalEnergyFutureChartBinaryResult)
	{
		return ($this->GetHistoricalEnergyFutureChartBinaryResult = $_GetHistoricalEnergyFutureChartBinaryResult);
	}
	/**
	 * Get GetHistoricalEnergyFutureChartBinaryResult
	 * @return XiEnergyTypeChartBinary
	 */
	public function getGetHistoricalEnergyFutureChartBinaryResult()
	{
		return $this->GetHistoricalEnergyFutureChartBinaryResult;
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