<?php
/**
 * Class file for XiCurrenciesTypeCrossRateTableWithBidAsk
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeCrossRateTableWithBidAsk
 * @date 08/07/2012
 */
class XiCurrenciesTypeCrossRateTableWithBidAsk extends XiCurrenciesTypeCommon
{
	/**
	 * The Lines
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfCrossRateTableLineWithBidAsk
	 */
	public $Lines;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfCrossRateTableLineWithBidAsk Lines
	 * @return XiCurrenciesTypeCrossRateTableWithBidAsk
	 */
	public function __construct($_Lines = null)
	{
		XiCurrenciesWsdlClass::__construct(array('Lines'=>new XiCurrenciesTypeArrayOfCrossRateTableLineWithBidAsk($_Lines)));
	}
	/**
	 * Set Lines
	 * @param ArrayOfCrossRateTableLineWithBidAsk Lines
	 * @return ArrayOfCrossRateTableLineWithBidAsk
	 */
	public function setLines($_Lines)
	{
		return ($this->Lines = $_Lines);
	}
	/**
	 * Get Lines
	 * @return XiCurrenciesTypeArrayOfCrossRateTableLineWithBidAsk
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