<?php
/**
 * Class file for XiRatesTypeRateTable
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeRateTable
 * @date 08/07/2012
 */
class XiRatesTypeRateTable extends XiRatesTypeCommon
{
	/**
	 * The RateTableLines
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfRateTableLine
	 */
	public $RateTableLines;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfRateTableLine RateTableLines
	 * @return XiRatesTypeRateTable
	 */
	public function __construct($_RateTableLines = null)
	{
		XiRatesWsdlClass::__construct(array('RateTableLines'=>new XiRatesTypeArrayOfRateTableLine($_RateTableLines)));
	}
	/**
	 * Set RateTableLines
	 * @param ArrayOfRateTableLine RateTableLines
	 * @return ArrayOfRateTableLine
	 */
	public function setRateTableLines($_RateTableLines)
	{
		return ($this->RateTableLines = $_RateTableLines);
	}
	/**
	 * Get RateTableLines
	 * @return XiRatesTypeArrayOfRateTableLine
	 */
	public function getRateTableLines()
	{
		return $this->RateTableLines;
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