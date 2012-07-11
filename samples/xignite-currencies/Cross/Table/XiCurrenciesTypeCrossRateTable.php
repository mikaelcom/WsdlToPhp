<?php
/**
 * Class file for XiCurrenciesTypeCrossRateTable
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeCrossRateTable
 * @date 08/07/2012
 */
class XiCurrenciesTypeCrossRateTable extends XiCurrenciesTypeCommon
{
	/**
	 * The Lines
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfCrossRateTableLine
	 */
	public $Lines;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfCrossRateTableLine Lines
	 * @return XiCurrenciesTypeCrossRateTable
	 */
	public function __construct($_Lines = null)
	{
		XiCurrenciesWsdlClass::__construct(array('Lines'=>new XiCurrenciesTypeArrayOfCrossRateTableLine($_Lines)));
	}
	/**
	 * Set Lines
	 * @param ArrayOfCrossRateTableLine Lines
	 * @return ArrayOfCrossRateTableLine
	 */
	public function setLines($_Lines)
	{
		return ($this->Lines = $_Lines);
	}
	/**
	 * Get Lines
	 * @return XiCurrenciesTypeArrayOfCrossRateTableLine
	 */
	public function getLines()
	{
		return $this->Lines;
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